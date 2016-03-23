<?php
/*
* Template Name: Home with Full Slider
*/
?>

	<?php get_header(); ?>

		<div class="desktop">
			<?php if(get_field('_ingrese_codigo_video') ): ?>
				<div class="main-video">
					<?php the_field('_ingrese_codigo_video'); ?>
				</div>
			<?php else: ?>
				<?php get_template_part('part', 'home-slider'); ?>
			<?php endif; ?>
		</div>

		<div class="mobile">
			<?php get_template_part('part', 'home-slider'); ?>
		</div>

		<div id="main" class="clearfix">
			<div id="reserva" class="clearfix shadow">
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Para reservar una habitación completa este formulario y te informaremos de nuestra disponibilidad lo antes posible. También podrás llamar al +5651 2412217</p>
						<div class="booking-wrap">
							<? echo do_shortcode( '[booking_form_fields]' );?>
							<? dynamic_sidebar( 'sidebar-general' );?>
						</div>
					</div>
				</div>
			</div>
			<?php if(function_exists('child_pages')) child_pages("id=".$post->ID."&class=cp&childs=true"); ?>
		</div>

	<?php get_footer(); ?>