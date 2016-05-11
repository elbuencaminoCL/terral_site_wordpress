<?php
/*
* Template Name: Tours y Actividades
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
					<div class="cont-col col-tours cont-grid col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php if(get_field('_agregar_titulo_bloque') ): ?>
							<div class="cont-title"><h3 class="clearfix"><?php the_field('_agregar_titulo_bloque'); ?></h3></div>
                        <?php endif; ?>
						<div class="cont-filter clearfix">
							<?php
	                            $args = array(
	                                'post_type'      => 'tours',
	                                'posts_per_page' => -1,
	                                'orderby' => 'rand'
	                            );
	                            $loop = new WP_Query( $args );
	                            if ( $loop->have_posts() ) {
	                                echo '<div class="nav-filter">';
	                                    get_custom_terms('tipos-de-tours', $args);
	                                echo '</div>';
	                                echo '<div id="Container">';
	                                while ( $loop->have_posts() ) : $loop->the_post();
	                                $excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post));              
	                                $terms = get_the_terms( $post->ID, 'tipos-de-tours' );
	                                    if (!empty( $terms )){
	                                        echo '<div class="mix diurnos col col-lg-4 col-md-4 col-sm-4 col-xs-12';
	                                        $i = 1; $terms_size = count($terms_size) - 1;
								                foreach($terms as $term){
								                    $term = array_shift( $terms );
								                    echo ' '.$term->slug;
								                    $i++; 
								                }
									        echo '" data-myorder="'.$i.'">';
									        	$cat = $term->slug;
	                                        	echo '<div class="box-shadow relative">';
	                                        		echo '<div class="relative">';
	                                        			echo '<a href="'.get_the_permalink($post->ID).'">'.get_the_post_thumbnail($post->ID, 'int-tours', array('class' => 'img-responsive')).'</a>';
	                                        		echo '</div>';
	                                        		echo '<div class="bottom">';
	                                        			echo '<h4><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h4>';
	                                        			echo '<div class="absolute-box">';
			                                        		echo '<p>'.excerpt(22).'...</p>';
			                                        		if(!($cat=='spa')){
			                                        			echo '<div class="cont-buttons clearfix">';
		                                                            echo '<a href="'.get_the_permalink($inf).'" class="button info">Más Info</a>';
		                                                        echo '</div>';
			                                        		}
			                                        		echo '<div class="white-shadow"></div>';
			                                        	echo '</div>';
		                                        	echo '</div>';
	                                        	echo '</div>';
	                                        echo '</div>';
	                                    }
	                                endwhile;
	                                echo '</div>';
	                            } else {
	                                echo __( 'No se han encontrado Tours' );
	                            }
	                            wp_reset_postdata();
	                        ?>
						</div>
					</div>
				</div>
				<div class="foot-ficha clearfix shadow">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/main/main_booking.png" class="back-foot img-responsive" />
					<h4>Quédate con nosotros</h4>
				</div>
				<? include_once('reserva.php');?>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>