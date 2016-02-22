<?php
 //------------------------------ Register Menu Location-----------------------------------------//
if( !function_exists('mars_register_my_menus') ){
	function mars_register_my_menus() {
	  register_nav_menus(
	    array(
	    	'header_main_navigation' => __('Home Page Navigation','mars'), 
	    )
	  );
	} 
	add_action( 'init', 'mars_register_my_menus' );	
}
//------------------------------ End Menu Location-----------------------------------------//

?>


	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<!-- menu -->
			  	<?php 
			  		if( has_nav_menu('header_main_navigation') ){
				  		wp_nav_menu(array(
				  			'theme_location'=>'header_main_navigation',
				  			'menu_class'=>'nav navbar-nav list-inline menu',
				  			'walker' => new Mars_Walker_Nav_Menu(),
				  			'container'	=>	null
				  		));
			  		}
			  		else{
						?>
			  				<ul class="nav navbar-nav list-inline menu"><li class="active"><a href="<?php print home_url();?>"><?php _e('Home','mars')?></a></li></ul>						
						<?php 			  			
			  		}
			  	?>
			</nav>