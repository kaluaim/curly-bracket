
<footer class="container footer-collapse visible-sm-block visible-xs-block">
  <p>&copy; <?php bloginfo('neme'); ?> <?php echo date('Y'); ?><br/>
  using with
  <i class="fa fa-heart"></i>
  <a href="http://projects.kalua.im/curlyBracket/">curlyBracket</a>
  on <a href="https://wordpress.org/"><i class="fa fa-wordpress"></i></a></p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
      $('.row-offcanvas').toggleClass('active')
    });
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
