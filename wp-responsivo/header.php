<!DOCTYPE html>
<html lang="en">
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>
<body>
<header>
	<nav class="navbar navbar-default navbar-custom container-fluid" role="navigation">
			
			<!-- Brand and toggle get grouped for better mobile display -->
			
			<div class="navbar-header container-fluid">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- ADICIONANDO LOGO OU TITULO DO SITE -->
				<?php	
				
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
				
				?>
				
				<?php	if ( has_custom_logo() ): echo '<img src="'. esc_url( $logo[0] ) .'">';?>
				
				<?php else : 
					echo '<a class="navbar-brand" href="#">Davi<span>WP</span></a>';
			 	// PARA colocar nome do site como logo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				
				?>
				
				<?php endif ?> 
					<!-- <a class="navbar-brand" href="#">Davi<span>WP</span></a> -->
					
			
			</div>

			<?php require_once ('assets/includes/wp_bootstrap_navwalker.php');?><!-- ****  importando arquivos do plugin, menu personalizado com bootstrap **** -->
			
			<!-- ****************************************************************
			 Codigo para colocar o menu do bootstrap Fonte: 
			https://github.com/wp-bootstrap/wp-bootstrap-navwalker/tree/v3-branch 
			********************************************************************* -->
			<?php
				wp_nav_menu( array(
						'menu'							=> 'Menu',
						'theme_location'    => 'menu-header',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse navbar-collapse-custom container',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) ); 
			?>
	
</nav>
</header>



	
