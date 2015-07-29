
  </div><!-- .container.blog-content -->

	<footer class="blog-footer">
      <section class="copyright">
        <div class="container">
          <div class="row" id="logo-footer">
            <div class="col-md-12">
                <p>
                  <a href="#">{t}Back to top{/t}</a>
                </p>
                <p>
                  <a href="http://www.webforce3.fr" title="Mentions légales">Webforce3 2015
                  </a>
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
        var date = parseInt($.now()) / 1000;
        var value = $(this).prop('checked') ? 1 : 0;

        $.ajax({
          method: "POST",
          url: HTTP_ROOT+"presence/update",
          data: {student_id: student_id, action: action, value: value, date: date}
        })
        .done(function(result) {
          console.log(result);
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
