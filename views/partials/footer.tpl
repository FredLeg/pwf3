	</div><!-- /.container -->

	<footer class="blog-footer">

    <footer class="footer">
      <section class="copyright">
        <div class="container">
          <div class="row">
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


    </footer>

	<script src="{$JS_ROOT}jquery.min.js"></script>
	<script src="{$JS_ROOT}bootstrap.min.js"></script>
  <script src="{$JS_ROOT}bootstrap-checkbox.js"></script>

  <script>
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

    });

    $('[data-toggle="tooltip"]').tooltip()

  });
  </script>
</body>
</html>
