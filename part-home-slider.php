<?php
	$slideshow = new WP_Query( array(
		'post_type'=>'slider',
		'posts_per_page' => -1
	));
?>

<?php if ( $slideshow->have_posts() ) : ?>
	<div id="slider" class="flexslider loading shadow">
		<ul class="slides">
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
				<li style="background: url('<?php echo $img; ?>') no-repeat center center">
					<div class="slide-info intro-site">
						<h2><?php the_title(); ?></h2>
						<?php if ( !empty($subtitle) ) : ?>
							<h3><?php echo $subtitle; ?></h3>
						<?php endif; ?>

						<?php if ( !empty($button_text) ) : ?>
							<div class="cont-button">
								<a href="<?php echo $url; ?>" class="button button-home conoce upper"><?php echo $button_text; ?></a>
							</div>
						<?php endif; ?>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div> <!-- #slider -->
<?php endif; wp_reset_postdata(); ?>