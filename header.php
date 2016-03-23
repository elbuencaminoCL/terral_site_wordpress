<!doctype html>
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if(!is_page('contacto')) { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.2.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
		<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
		<?php if(is_page('tarifas') || is_page('reservar')) { ?>
			<script type="text/javascript">
				$(function(){
					$('#Container').mixItUp({
					    load: {
					      	filter: '.temporada-alta',
					    }
					});
				});
			</script>
		<? } else { ?>
			<script type="text/javascript">
				$(function(){
					$('#Container').mixItUp({
					    load: {
					     	filter: '.destacados',
					    }
					});
				});
			</script>
		<? } ?>
		<script type="text/javascript">
		  	$(document).ready(function(){
				$('.bxslider').bxSlider({
				  pagerCustom: '#bx-pager'
				});
		  	});
		</script>
		<script>
		  	$(document).ready(function() {
				$(".item-tour h4 a, .row-int h5").lettering('words');
			});
		</script>
		<?php if(is_singular('tours')) { ?>
			<link href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" rel="stylesheet" media="screen">
			<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js" type="text/javascript"></script>
			<script>
				$(document).ready(function(){
					$(".ajax").colorbox();
				});
			</script>
		<? } ?>
	<? } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('after_open_body_tag'); ?>

	<div id="mobile-bar">
		<a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
		<h1 class="mob-title"><?php bloginfo('name'); ?></h1>
	</div>

	<div class="wrapper">
		<div id="page">
			<? if(is_page('contacto')) { ?>
				<header id="header-contacto"></header>
			<? } else { ?>
				<?php if(!is_front_page() || !is_page('inicio')) { ?>
					<header id="header" class="header header-int<?php if(is_page('el-valle-de-elqui')) { ?> header-gal<? } ?> clearfix">
				<? } else { ?>
					<header id="header" class="header clearfix">
				<? } ?>
					<div class="cont-header container">
						<div class="auxi-data clearfix">
							<address>San Martín 387, Vicu&ntilde;a, Chile. +56 51 241 2217</address>
						</div>
						<div class="clearfix">
							<nav class="main-nav clearfix nav row">
								<div class="cont-logo col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<a href="<? bloginfo('wpurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo/logo.png" class="back-foot" alt="Terral Hotel &amp; Spa" /></a>
								</div>
								<div class="col-md-5 col-sm-4 int-nav left">
									<?php
										wp_nav_menu( array(
											'theme_location' 	=> 'ci_main_menu_left',
											'fallback_cb' 		=> '',
											'container' 		=> '',
											'menu_id' 			=> '',
											'menu_class' 		=> 'navigation left-nav'
										));
									?>
								</div>

								<div class="col-md-2 col-sm-4 int-nav"></div>

								<div class="col-md-5 col-sm-4 int-nav">
									<?php
										wp_nav_menu( array(
											'theme_location' 	=> 'ci_main_menu_right',
											'fallback_cb' 		=> '',
											'container' 		=> '',
											'menu_id' 			=> '',
											'menu_class' 		=> 'navigation right-nav'
										));
									?>
								</div>
							</nav>
							<div id="mobilemenu">
								<ul></ul>
							</div>
						</div> <!-- main container -->
					</div>
				</header>
			<? } ?>
			<?php if(!is_front_page() || !is_page('inicio') || !is_page('el-valle-de-elqui')) { ?>
				<?php if( get_field('_subir_imagen') ): ?>
					<div class="cont-top">
	    				<img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive main-image" />
		    			<div class="intro-int-site no-float">
		    				<div class="container">
			    				<?php 
									$cabecera = get_post_meta($post->ID, '_ingresar_titulo_cabecera', true);
									echo '<h2>'.$cabecera.'</h2>';
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<? } ?>
			<?php wp_reset_query(); ?>
			<?php if(is_page('el-valle-de-elqui') || is_singular(array('room','tours'))) { ?>
		    	<div id="gallery" class="gallery-head block-image clearfix block">
					<? get_gallery_images(); ?>
				</div>
		    <? } ?>
		    <?php wp_reset_query(); ?>
			<?php if(is_singular('product') || is_page('carro') || is_page('finalizar-reserva')) { ?>
		    	<? 
					$reservar = get_page_by_path('reservar');
					$imgres = get_field('_subir_imagen', $reservar);
					echo '<div class="cont-top">';
						if($imgres) {
							echo '<img src="'.$imgres.'" class="img-responsive main-image" />';
							echo '<div class="intro-int-site no-float">';
			    				echo '<div class="container">';
				    				$cabecera = get_post_meta($reservar->ID, '_ingresar_titulo_cabecera', true);
									echo '<h2>'.$cabecera.'</h2>';
								echo '</div>';
							echo '</div>';
						}
					echo '</div>';
				?>
			<? } ?>
			<?php wp_reset_query(); ?>