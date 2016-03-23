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

				<div class="cont-col cont-grid">
					<div class="cont-filter clearfix">
						<?php
	                        $args = array(
	                            'post_type'      => 'room',
	                            'posts_per_page' => -1,
	                            'orderby' => 'asc'
	                        );
	                        $loop = new WP_Query( $args );
	                        if ( $loop->have_posts() ) {
	                            echo '<div class="nav-filter shadow">';
	                                get_custom_terms('room_category', $args);
	                            echo '</div>';
	                            echo '<div class="cont-habs no-float cont-color-back">';
		                            echo '<div id="Container" class="container container-room">';
		                            while ( $loop->have_posts() ) : $loop->the_post();
		                            $terms = get_the_terms( $post->ID, 'room_category' );
		                            if (!empty( $terms )){
		                                echo '<div class="mix int-hab box-shadow cont-table clearfix ';
		                                    $i = 1; $terms_size = count($terms_size) - 1;
									        foreach($terms as $term){
									            $term = array_shift( $terms );
									            echo ' '.$term->slug;
									            $i++; 
									        }
										echo '" data-myorder="'.$i.'">';
										?>
		                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cont-image">
												<? echo get_the_post_thumbnail($post->ID, 'hab-detalle', array('class' => 'img-responsive')); ?>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail-hab">
												<h4><a href="<? the_permalink()?>"><? the_title()?></a></h4>
												<div class="row-title">
													<div class="title xl-title">Precio x día Temporada Alta</div>
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
													<? endwhile;
												    	wp_reset_postdata(); 
												    ?>
												</div>
											</div>
		                            	</div>
		                            <? } ?>
		                            <?
		                            endwhile;
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