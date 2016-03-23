<?php
/*
* Template Name: Valle
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="intro intro-valle col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float clearfix">
							<?php if( get_field('_subtitulo') ): ?>
				    			<h3 class="clearfix subtitle"><?php the_field('_subtitulo'); ?></h3>
				    		<?php endif; ?>
							<? the_content();?>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
				</div>
				<div class="container">
					<div class="cont-col cont-grid col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cont-title"><h3 class="clearfix">¿Qué hacer en el Valle del Elqui?</h3></div>
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
	                                        	echo '<div class="box-shadow relative">';
	                                        		echo '<div class="relative">';
	                                        			echo '<a href="'.get_the_permalink($post->ID).'">'.get_the_post_thumbnail($post->ID, 'int-valle', array('class' => 'img-responsive')).'</a>';
	                                        		echo '</div>';
	                                        		echo '<div class="bottom">';
	                                        			echo '<h4><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h4>';
	                                        			echo '<div class="absolute-box">';
			                                        		echo '<p>'.$excerpt.'</p>';
			                                        		echo '<div class="cont-buttons clearfix">';
	                                                            echo '<a href="'.get_the_permalink($inf).'" class="button info">Más Info</a>';
	                                                        echo '</div>';
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
				<div id="reserva" class="clearfix shadow">
					<div class="container">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>Para reservar una habitación completa este formulario y te informaremos de nuestra disponibilidad lo antes posible. También podrás llamar al +5651 2412217</p>
							<div class="booking-wrap">
								<div class="container">
									<? echo do_shortcode( '[hb_booking_form]' );?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>