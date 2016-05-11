<?php
/*
* Template Name: Tarifas
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix shadow block">
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
				</div>

				<div class="cont-col cont-grid no-margin-bottom">
					<div class="cont-filter clearfix">
						<?php
	                        $args = array(
	                            'post_type'      => 'room',
	                            'posts_per_page' => -1
	                        );
	                        $loop = new WP_Query( $args );
	                        if ( $loop->have_posts() ) {
	                            echo '<div class="nav-filter shadow">';
	                                get_custom_terms('room_category', $args);
	                            echo '</div>';
	                            echo '<div class="cont-habs no-float cont-color-back">';
		                            echo '<div id="Container" class="container container-room">';
		                            $j = 1; while ( $loop->have_posts() ) : $loop->the_post();
		                            $terms = get_the_terms( $post->ID, 'room_category' );
		                            if (!empty( $terms )){
		                                echo '<div class="mix int-hab box'.$j.' box-shadow cont-table clearfix ';
		                                    $i = 1; $terms_size = count($terms_size) - 1;
									        foreach($terms as $term){
									            $term = array_shift( $terms );
									            echo ' '.$term->slug;
									            $i++; 
									        }
										echo '" data-myorder="'.$i.'">';
										?>
		                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cont-image hover">
												<figure><a href="<? the_permalink()?>"><? echo get_the_post_thumbnail($post->ID, 'hab-detalle', array('class' => 'img-responsive')); ?></a></figure>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-hab cont-tarifas">
												<h4><a href="<? the_permalink()?>"><? the_title()?></a></h4>
												<? $slug=$term->slug; ?>
												<? if($slug=='temporada-alta') { ?>
													<div class="row-title">
														<div class="title xl-title">Precio por día Temporada Alta</div>
														<div></div>
													</div>
												<? } else { ?>
													<div class="row-title">
														<div class="title xl-title">Precio por día Temporada Media</div>
														<div></div>
													</div>
												<? } ?>
												<div class="row-content">
													<?php
													    $connected = new WP_Query( array(
													        'connected_type' => 'product_to_room',
													        'connected_items' => $post,
													        'nopaging' => true
													    ) );
													    while ( $connected->have_posts() ) : $connected->the_post();?>
	        											<article class="row-int">
									                        <div class="title">
										                    	<?php if( get_field('_tipo_habitacion') ): ?>
														    		<h5><span><?php the_field('_tipo_habitacion'); ?></span><span class="tooltipster-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/icon/icon-tooltip.jpg" class="tooltip" title="<?php the_field('_ingresar_texto_para_tooltip'); ?>" alt="Info" /></span></h5>
														   		<?php endif; ?>
										                    </div>
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
			                                                <div class="currency">
			                                                	<?php if( get_field('_ingrese_precio_en_dolares') ): ?>
													    			<?php the_field('_ingrese_precio_en_dolares'); ?>
													    		<?php endif; ?>
			                                                </div>
			                                                <?
				                                                echo '<div class="cont-button">';
							                                        echo '<a href="'.get_the_permalink().'">'.$product->single_add_to_cart_text().'</a>';
							                                    echo '</div>';
							                                ?>
										               	</article>
													<? endwhile;
												    	wp_reset_postdata(); 
												    ?>
												</div>
											</div>
		                            	</div>
		                            <? } ?>
		                            <?
		                            $j++; endwhile;
		                            echo '</div>';
	                            echo '</div>';
	                            } else {
	                                echo __( 'No se han encontrado Tours' );
	                            }
	                        wp_reset_postdata();
	                    ?>
					</div>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>