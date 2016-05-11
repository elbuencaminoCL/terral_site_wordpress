<?php
/*
* Template Name: Restaurant
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container clearfix">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="main-rest">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-rest">
							<?php if( get_field('_subir_imagen_intro') ): ?>
				    			<img src="<?php the_field('_subir_imagen_intro'); ?>" class="img-responsive" />
				    		<?php endif; ?>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<? the_content();?>
						</div>
					</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
					<?php if( get_field('_subtitulo') ): ?>
		    			<h3 class="clearfix subtitle"><?php the_field('_subtitulo'); ?></h3>
		    		<?php endif; ?>
				</div>
			</div>
			<div class="cont-carta clearfix">
				<div class="carta-bar">
					<?php if( get_field('_subir_imagen_back') ): ?>
		    			<img src="<?php the_field('_subir_imagen_back'); ?>" class="img-responsive main-image" />
		    		<?php endif; ?>
		    		<div class="block-image clearfix block-carta block">
						<ul class="bxslider">
							<? include_once('carta.php');?>
						</ul>
					</div>
				</div>
			</div>
			<div class="intro-auxi">
				<?php if( get_field('_subir_imagen_auxi') ): ?>
					<div class="cont-auxi">
	    				<img src="<?php the_field('_subir_imagen_auxi'); ?>" class="img-responsive main-image" />
		    			<div class="intro-rest-auxi no-float">
		    				<div class="container">
		    					<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 no-float">
				    				<?php 
										$texto = get_post_meta($post->ID, '_ingresar_texto_auxiliar', true);
										echo $texto;
									?>
									<div class="cont-button clearfix">
                            			<a href="<? bloginfo('wpurl'); ?>/contacto/" class="button button-home conoce upper ajax">Contactar</a>';
                        			</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="cont-reserva clearfix">
				<div class="container">
					<div class="col-reserva col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php if( get_field('_titulo_reservas') ): ?>
							<h3><?php the_field('_titulo_reservas'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('_texto_reservas') ): ?>
							<?php the_field('_texto_reservas'); ?>
						<?php endif; ?>
					</div>
					<div id="reservar-rest" class="col-form col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<? echo do_shortcode('[redirestaurant]');?>
					</div>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>