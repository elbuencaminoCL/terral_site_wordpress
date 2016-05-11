<?php
/*
* Template Name: Habitaciones
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix shadow block">
				<div class="container clearfix">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<? the_content();?>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
				</div>

				<?php
					$selected = get_field('_temporada_vigente', 'option');
					if( in_array('temporada_alta', $selected) ) {
				?>
					<div class="container clearfix">
						<?php
							$rooms = new WP_Query( array(
								'post_type'=>'room',
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'room_category',
										'field'    => 'slug',
										'terms'    => 'temporada-alta',
									),
								),
							));
						?>
						<?php if ( $rooms->have_posts() ) : ?>
							<div class="cont-habs no-float">
								<?php $j = 1; while ( $rooms->have_posts() ) : $rooms->the_post(); ?>
									<div class="int-hab box-shadow cont-table clearfix box<? echo $j ;?>">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cont-image hover">
											<figure><a href="<? the_permalink();?>"><? echo get_the_post_thumbnail($post->ID, 'hab-detalle', array('class' => 'img-responsive')); ?></a></figure>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-hab">
											<h4 class="title-table maxi-title"><a href="<? the_permalink();?>"><? the_title();?></a></h4>
											<div class="row-title">
												<div class="title xl-title table-title">Precio por día Temporada Alta</div>
												<div></div>
											</div>
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
								<?php $j++; endwhile; ?>
							</div>
						<?php endif; wp_reset_postdata(); ?>
					</div>
				<? } else { ?>
					<div class="container clearfix">
						<?php
							$rooms = new WP_Query( array(
								'post_type'=>'room',
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'room_category',
										'field'    => 'slug',
										'terms'    => 'temporada-media',
									),
								),
							));
						?>
						<?php if ( $rooms->have_posts() ) : ?>
							<div class="cont-habs no-float">
								<?php $j = 1; while ( $rooms->have_posts() ) : $rooms->the_post(); ?>
									<div class="int-hab box-shadow cont-table clearfix box<? echo $j ;?>">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cont-image hover">
											<figure><a href="<? the_permalink();?>"><? echo get_the_post_thumbnail($post->ID, 'hab-detalle', array('class' => 'img-responsive')); ?></a></figure>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-hab">
											<h4 class="title-table maxi-title"><a href="<? the_permalink();?>"><? the_title();?></a></h4>
											<div class="row-title">
												<div class="title xl-title table-title">Precio por día Temporada Media</div>
												<div></div>
											</div>
											<div class="row-content">
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
									</div>
								<?php $j++; endwhile; ?>
							</div>
						<?php endif; wp_reset_postdata(); ?>
					</div>
				<? } ?>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>