<?php
/*
* Template Name: Home with Full Slider
*/
?>

	<?php get_header(); ?>
		<div class="desktop">
			<?php if(get_field('_ingrese_codigo_video') ): ?>
				<section id="section1">
                    <div id="video_container">
						<?
		                    $principal = get_field('_ingrese_codigo_video');
		                  	$opcion01 = get_field('_ingrese_codigo_video_(opcion_1)');
		                    $opcion02 = get_field('_ingrese_codigo_video_(opcion_2)');
		                    $opcion03 = get_field('_ingrese_codigo_video_(opcion_3)');
		                    if($principal){
		                        echo '<video preload autoplay loop id="bgvid" poster="img/load.jpg">';
		                            echo '<source src="'.$principal.'" type="video/mp4">';
		                            if($opcion01){
		                                echo '<source src="'.$opcion01.'" type="video/webm">';
		                            }
		                            if($opcion02){
		                                echo '<source src="'.$opcion02.'" type="video/m4v">';
		                            }
		                            if($opcion03){
		                                echo '<source src="'.$opcion03.'" type="video/mov">';
		                            } 
		                            echo 'Tu navegador no soporta el tag de video';
		                        echo '</video>';
		                    }
		                ?>
					</div>
				</section>
				<?php
					$slideshow = new WP_Query( array(
						'post_type'=>'slider',
						'posts_per_page' => 1
					));
				?>
							<?php if ( $slideshow->have_posts() ) : ?>
								<?php while ( $slideshow->have_posts() ) : $slideshow->the_post(); ?>
								<?php
								if ( is_page_template('template-homepage-1.php') ) {
									$img = ci_get_featured_image_src('ci_slider_full');
								} else {
									$img = ci_get_featured_image_src('ci_slider_fixed');
								}

								$url = get_post_meta( $post->ID, 'ci_cpt_slider_url', true );
								$subtitle = get_post_meta( $post->ID, 'ci_cpt_slider_subtitle', true );
								$button_text = get_post_meta( $post->ID, 'ci_cpt_button_text', true );
								$url = !empty($url) ? $url : get_permalink();
							?>
		                    <div class="slide-info intro-site cont-video">
								<h2><?php the_title(); ?></h2>
								<?php if ( !empty($subtitle) ) : ?>
									<h3><?php echo $subtitle; ?></h3>
								<?php endif; ?>
							</div>
							<?php if ( !empty($button_text) ) : ?>
									<div class="cont-button button-out">
										<a href="<?php echo $url; ?>" class="button button-home conoce upper"><?php echo $button_text; ?></a>
									</div>
								<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
			<?php else: ?>
				<?php get_template_part('part', 'home-slider'); ?>
			<?php endif; ?>
		</div>

		<div class="mobile">
			<?php get_template_part('part', 'home-slider'); ?>
		</div>

		<div id="main" class="clearfix">
			<? include_once('reserva.php');?>
			<?php if(function_exists('child_pages')) child_pages("id=".$post->ID."&class=cp&childs=true"); ?>
		</div>

	<?php get_footer(); ?>