<?php
/*
* Template Name: Bar
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<? if (function_exists('get_gallery_images')) { ?>
								<? the_content();?>
							<? } else { ?>
								<div class="auxi-intro">
									<? the_content();?>
								</div>
							<? } ?>
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
		</div>
		<!--/main-->

	<?php get_footer(); ?>