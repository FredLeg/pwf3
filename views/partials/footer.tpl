
  </div><!-- .container.blog-content -->

	<footer class="blog-footer">
      <section class="copyright">
        <div class="container">
          <div class="row" id="logo-footer">
            <div class="col-md-12">
                <span>
                  <a href="#">{t}Back to top{/t}</a>
                </span>
                <p>
                  <a href="http://www.webforce3.fr" title="Mentions légales">Web Force 3</a>
                </p>
            </div>
          </div>
        </div>
      </section>
  </footer>

  {include file="partials/debug.tpl"}

	<script src="{$JS_ROOT}jquery.min.js"></script>
	<script src="{$JS_ROOT}bootstrap.min.js"></script>
  <script src="{$JS_ROOT}bootstrap-checkbox.js"></script>

  <script>

  var HTTP_ROOT = '{$HTTP_ROOT}';

  {literal}
  $(document).ready(function() {

    var checkbox_options = {
      buttonStyle: 'btn-default',
      buttonStyleChecked: 'btn-success',
      checkedClass: 'icon-check',
      uncheckedClass: 'icon-check-empty'
    };

    $('input[type="checkbox"].checkbox-control').each(function() {

      var type = typeof($(this).data('checked')) !== 'undefined' ? $(this).data('checked') : 'default';

      checkbox_options.buttonStyleChecked = 'btn-'+type;

      $(this).checkbox(checkbox_options);

      $(this).unbind('click').bind('click', function() {

        var student_id = $(this).closest('.presence').data('id');
        var action = $(this).attr('name');
        var day = parseInt($.now() / 1000);
        var value = $(this).prop('checked') ? 1 : 0;

        $.ajax({
          method: "POST",
          url: HTTP_ROOT+"presence/update",
          data: {student_id: student_id, action: action, value: value, day: day},
          dataType: 'json'
        })
        .done(function(result) {
          if (typeof(result.error) !== 'undefined') {
            alert(result.error);
          } else {
            var actions = {'r1':true, 'r2':true, 'd1':true, 'd2':true, 'absent':true};
            for (var i in result) {

               if (typeof(actions[i]) !== 'undefined' && actions[i] === true) {

                var checked = parseInt(result[i]) ? true : false;

                console.log(i, result[i], value, '#presence-'+result.student_id+' input.'+i, checked);

                //checkbox_options.checked = checked;

                //$('#presence-'+result.student_id+' .'+i).checkbox(checkbox_options);
                $('#presence-'+result.student_id+' input.'+i).checkbox({'checked': checked});
              }
            }
          }
        });

      });

    });

    $('[data-toggle="tooltip"]').tooltip({
      container: 'body'
    })

  });
  {/literal}
  </script>

</body>
</html>
