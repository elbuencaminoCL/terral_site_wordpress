<?php
/*
* Template Name: Hotel
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<div class="clearfix">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/auxi/shape.png" class="no-float" />
							</div>
							<? the_content();?>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div id="gallery" class="block-image clearfix block">
				<? get_gallery_images(); ?>
			</div>
			<div class="block-image back-grey clearfix block">
				<div class="container">
					<?php if( have_rows('_ingresar_servicio') ): ?>
						<h3>Servicios del Hotel</h3>
						<ul class="servicios">
							<?php while( have_rows('_ingresar_servicio') ): the_row(); 
								$serv = get_sub_field('_nombre_servicio');
								$icon = get_sub_field('_icono_servicio');
							?>
								<li>
									<?php echo '<img src="'.$icon.'" class="img-responsive">'; ?>
									<?php echo $serv; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>