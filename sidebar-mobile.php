<div class="cd-panel from-right hidden-lg hidden-md">
	<header class="cd-panel-header">
		<a href="#0" class="cd-panel-close"><i class="fa fa-times fa-3x cd-panel-close-icon"></i></a>
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    	<label>
    		<input type="lookup" class="search-field" placeholder="Search …" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search …'" value="" name="s" />
				<span class="glyphicon glyphicon-search search-icon" aria-hidden="true"></span>
    	</label>
    </form>
	</header>

	<div class="cd-panel-container">
		<div class="cd-panel-content">

      <?php if(!dynamic_sidebar('Sidebar-Mobile')): ?>
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

		</div> <!-- cd-panel-content -->
	</div> <!-- cd-panel-container -->
</div> <!-- cd-panel -->
