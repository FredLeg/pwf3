	</div><!-- /.container -->

	<footer class="blog-footer">

    <footer class="footer">
      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav  nav-pills nav-stacked">
                <li class="item-143">
                  <a href="http://www.webforce3.fr" title="Mentions légales">Webforce3 2015</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </footer>

      <!-- <p>{$website_title} &copy; 2015</p> -->
      <p>
        <a href="#">{t}Back to top{/t}</a>
      </p>
    </footer>

	<script src="{$JS_ROOT}jquery.min.js"></script>
	<script src="{$JS_ROOT}bootstrap.min.js"></script>
  <script src="{$JS_ROOT}bootstrap-checkbox.js"></script>

  <script>
  $(document).ready(function() {

    $('input[type="checkbox"].checkbox-control').checkbox({
      buttonStyle: 'btn-default',
      buttonStyleChecked: 'btn-info',
      checkedClass: 'icon-check',
      uncheckedClass: 'icon-check-empty'
    });

    $('[data-toggle="tooltip"]').tooltip()

  });
  </script>
</body>
</html>
