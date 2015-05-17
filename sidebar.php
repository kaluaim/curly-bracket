<div class="col-sm-3 sidebar">
  <div class="collapse navbar-collapse" id="sidemenu">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  	<label>
  		<input type="lookup" class="search-field" placeholder="Search …" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search …'" value="" name="s" />
  	</label>
  	<button  type="submit" class="search-submit">
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    </button >
  </form>

    <?php if(!dynamic_sidebar('Sidebar')): ?>
      <h3>Side bar</h3>
      <p>i think i need to setup a default side bar in case it is not setup by the user.</p>
    <?php endif; ?>

    <footer class="footer visible-lg-block visible-md-block">
      <p>&copy; <?php bloginfo('neme'); ?> <?php echo date('Y'); ?><br/>
      using with
      <i class="fa fa-heart"></i>
      <a href="http://projects.kalua.im/curlyBracket/">curlyBracket</a>
      on <a href="https://wordpress.org/"><i class="fa fa-wordpress"></i></a></p>
    </footer>
  </div>




</div>
