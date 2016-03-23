<?php get_header(); ?>

	<main id="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="cont-room">
				<div class="container">
					<h3><?php the_title(); ?></h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 intro-room no-float">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="table-room clearfix">
					<div class="container">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="cont-table no-padding clearfix">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 picture-hab no-padding">
									<? echo get_the_post_thumbnail($post->ID, 'hab-detalle', array('class' => 'img-responsive')); ?>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 detail-hab">
									<div class="row-title">
										<div class="title"><?php the_title(); ?></div>
										<div class="currency">CLP</div>
										<div class="currency">USD</div>
										<div class="currency"></div>
									</div>
									<div class="row-content">
										<div class="cont-table-room clearfix">
											<?php
							                    $connected = new WP_Query( array(
							                      'connected_type' => 'product_to_room',
							                      'connected_items' => get_queried_object(),
							                      'nopaging' => true,
							                    ) );
							                    if ( $connected->have_posts() ) :
							                ?>
											<?php while ( $connected->have_posts() ) : $connected->the_post(); $product = get_product( $connected->post->ID ); ?>
							                    <article class="row-int">
							                        <div class="title"><h5><? the_title();?></h5></div>
							                        <div class="currency">
							                        	<?
								                        	echo $product->get_price_html();
				                                            if ($product->is_on_sale()) {
				                                                $sale = get_post_meta( get_the_ID(), '_sale_price', true);
				                                                $oferta= $product->get_sale_price() ? wc_format_decimal( $product->get_sale_price(), $prices_precision ) : null;
				                                                echo '<div class="onsale">'.woocommerce_price($oferta).'</div>';
				                                            }
	                                                	?>
	                                                </div>
	                                                <div class="currency"></div>
	                                                <?
		                                                echo '<div class="cont-button">';
					                                        echo '<a href="'.get_the_permalink().'">'.$product->single_add_to_cart_text().'</a>';
					                                    echo '</div>';
					                                ?>
								               	</article>
							                <?php endwhile; ?>
							                <?php 
							                    wp_reset_postdata();
							                    endif;
							                ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix room-desc">
					<article class="entry amenities shadow">
						<div class="entry-content group">
							<div class="container">
								<?php
									$amenities = get_post_meta($post->ID, 'ci_cpt_room_amenities', true);
									$amenities_title = get_post_meta($post->ID, 'ci_cpt_room_amenities_title', true);
								?>
								<?php if(!empty($amenities) and count($amenities) > 0): ?>
									<?php if(!empty($amenities)): ?><h3><?php echo $amenities_title; ?></h3><?php endif; ?>
									<ul>
										<?php
											foreach($amenities as $am){
												echo '<li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">'.$am.'</li>';
											}
										?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</article>
				</div>

				<div class="other-rooms clearfix">
					<div class="container">
						<h4><? echo __('Otras Habitaciones')?></h4>
						<div class="relatedposts">
							<?php
							    $orig_post = $post;
							    global $post;
							    $tags = wp_get_post_tags($post->ID);
							    $tag_ids = array();
							    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							    $args=array(
									'post_type' => 'room',
									'post__not_in' => array($post->ID),
									'posts_per_page'=> 3,
									'caller_get_posts'=>1
								);
							     
							    $my_query = new wp_query( $args );
							    while( $my_query->have_posts() ) {
							    $my_query->the_post();
							?>   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="block box-shadow relative">
									<?php 
										$selected = get_field('_seleccionar_habitacion_destacada');
										if(!empty($selected) && in_array('habitacion_destacada', $selected)){
											echo '<div class="sello col-lg-4 col-md-4 col-sm-4 col-xs-6"><img src="'.get_bloginfo('stylesheet_directory').'/imag/auxi/sello.png" class="img-responsive" /></div>';
										}
									?>
                                    <?php if(has_post_thumbnail()) :?>
                                        <a href="<? the_permalink();?>"><?php the_post_thumbnail('hab', array('class' => 'img-responsive'));?></a>
                                    <?php endif; ?>
                                   
                                    <div class="item-tour">
                                        <h4><a href="<? the_permalink();?>"><? the_title();?></a></h4>
                                        <div class="description">
                                            <div class="top-description">
                                                <?
                                                    global $post;
                                                    echo '<p>'.content(25).'</p>';
                                                ?>
                                            </div>
                                            <div class="price-description">
                                                <? 
                                                    if(get_post_meta($post->ID, '_precio_pesos', true)){
                                                        echo '<div class="price">';
                                                            echo 'Desde: <span>CLP '.get_post_meta($post->ID, '_precio_pesos', true).' / USD '.get_post_meta($post->ID, '_precio_dolares', true).'</span>';
                                                        echo '</div>';
                                                    }
                                                ?>
                                                <div class="cont-buttons clearfix">
                                                    <a href="<? the_permalink();?>" class="button info">Ver Habitación</a>
                                                </div>
                                            </div>
                                            <div class="white-shadow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<? }
							    $post = $orig_post;
							    wp_reset_query();
							?>
						</div>
					</div>
				</diV>
			</div>
		<?php endwhile; endif; ?>
	</main>

<?php get_footer(); ?>