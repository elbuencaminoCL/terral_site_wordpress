<?php
/*
* Template Name: Spa
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="intro-spa col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<? the_content();?>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
					<div id="main-spa" class="cont-col col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php if( get_field('_subtitulo') ): ?>
			    			<h3 class="clearfix subtitle"><?php the_field('_subtitulo'); ?></h3>
			    		<?php endif; ?>
						<div class="clearfix">
							<?php
                                $connected = new WP_Query( array(
                                    'connected_type' => 'tours_to_page',
                                    'connected_items' => get_queried_object(),
                                    'nopaging' => true,
                                ) );
                                if ( $connected->have_posts() ) :
                            ?>
                                <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="box-shadow relative">
											<div class="relative">
												<?php if(has_post_thumbnail()) :?>
	                                                <?php the_post_thumbnail('int-valle', array('class' => 'img-responsive'));?>
	                                            <?php endif; ?>
											</div>
											<div class="bottom">
												<h4><? the_title();?></h4>
												<div class="absolute-box">
													<?
		                                                global $post;
		                                                if (has_excerpt( $post->ID )) {
		                                                    echo '<p>'.excerpt(40).'</p>';
		                                                }
		                                            ?>
		                                        </div>
												<div class="white-shadow"></div>
											</div>
										</div>
									</div>	
                                <?php $i++; endwhile; ?>
                            <?php wp_reset_postdata();
                                endif;
                            ?>
						</div>
					</div>
				</div>
			</div>
			<div id="gallery" class="block-image clearfix block">
				<? get_gallery_images(); ?>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>