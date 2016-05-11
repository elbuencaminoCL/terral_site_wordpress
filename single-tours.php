    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--main-->
            <div id="main" class="clearfix">
                <div class="container">
                    <div class="cont-servicios">
                        <div class="clearfix">
                            <div class="tour-title shadow">
                                <h4><? the_title();?></h4>
                            </div>
                            <div class="cont-data shadow clearfix">
                                <div class="white-col col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <ul class="clearfix">
                                        <? 
                                            if(get_post_meta($post->ID, '_duracion_tour', true)){
                                                echo '<li>';
                                                    echo '<span>Duración:</span> '.get_post_meta($post->ID, '_duracion_tour', true);
                                                echo '</li>';
                                            }
                                        ?>
                                        <? 
                                            if(get_post_meta($post->ID, '_cantidad_personas', true)){
                                                echo '<li>';
                                                    echo '<span>C. Personas:</span> '.get_post_meta($post->ID, '_cantidad_personas', true);
                                                echo '</li>';
                                            }
                                        ?>
                                        <? 
                                            if(get_post_meta($post->ID, '_esfuerzo', true)){
                                                echo '<li>';
                                                    echo '<span>Esfuerzo:</span> '.get_post_meta($post->ID, '_esfuerzo', true);
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="brown-col col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <ul class="clearfix">
                                        <? 
                                            if(get_post_meta($post->ID, '_precio_pesos', true)){
                                                echo '<li>';
                                                    echo '<span>Precio:</span> CLP '.get_post_meta($post->ID, '_precio_pesos', true);
                                                echo '</li>';
                                            }
                                        ?>
                                        <!--<li><a href="<? bloginfo('wpurl')?>/contacto/" class="button reserva ajax">Reservar</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="cont-cell col-lg-12 col-md-12 col-sm-12 col-xs-12 shadow clearfix">
                                <div class="white-col col-lg-7 col-md-7 col-sm-7 col-xs-12 col-flex">
                                    <div class="cont-description">
                                        <h5>Descripción:</h5>
                                        <? the_content();?>
                                    </div>
                                </div>
                                <div class="brown-col col-lg-5 col-md-5 col-sm-5 col-xs-12 col-flex">
                                    <div class="top-col">
                                        <?php if( get_field('_incluye') ): ?>
                                            <div class="cont-top-cell">
                                                <?php the_field('_incluye'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="cont-testimonios clearfix shadow">
                                <?php
                                    $connected = new WP_Query( array(
                                        'connected_type' => 'testimonial_to_tours',
                                        'connected_items' => get_queried_object_id(),
                                        'nopaging' => true,
                                    ) );
                                    if ( $connected->have_posts() ) :
                                ?>
                                    <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                                        <div class="test-col">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo/logo-tripadvisor.png" class="img-responsive" />
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 no-padding">
                                                <? echo '<p>"'.get_the_content($connected->ID).'"</p>';?>
                                                <div class="testimonio">
                                                    <p>Opinión escrita por <? if(get_field('_autor') ): ?><?php the_field('_autor'); ?><? endif; ?> <? if(get_field('_fecha_testimonio') ): ?>el <?php the_field('_fecha_testimonio'); ?><? endif; ?> <? if(get_field('_enlace_tripadvisor') ): ?>en <a href="<?php the_field('_enlace_tripadvisor'); ?>" target="_blank">TripAdvisor</a><? endif; ?></p>
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

                    <div class="cont-buttons foot-buttons">
                        <?
                            $postlist_args = array(
                               'posts_per_page'  => -1,
                               'orderby'         => 'menu_order title',
                               'order'           => 'ASC',
                               'post_type'       => 'tours',
                               'your_custom_taxonomy' => 'tipos-de-tours'
                            ); 
                            $postlist = get_posts( $postlist_args );

                            // get ids of posts retrieved from get_posts
                            $ids = array();
                            foreach ($postlist as $thepost) {
                               $ids[] = $thepost->ID;
                            }

                            // get and echo previous and next post in the same taxonomy        
                            $thisindex = array_search($post->ID, $ids);
                            $previd = $ids[$thisindex-1];
                            $nextid = $ids[$thisindex+1];
                            if ( !empty($previd) ) {
                               echo '<a rel="prev" href="'.get_permalink($previd).'" class="button left-button">Anterior</a>';
                            }
                            echo '<a href="'.get_bloginfo('wpurl').'/tours-y-actividades/" class="button center-button">Ver todos</a>';
                            if ( !empty($nextid) ) {
                               echo '<a rel="next" href="'.get_permalink($nextid).'" class="button right-button">Siguiente</a>';
                            }
                        ?>
                    </div>
                </div>
                <div id="main-reserva">
                    <div class="foot-ficha clearfix shadow">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/imag/main/main_booking.png" class="back-foot img-responsive" />
                        <h4>Quédate con nosotros</h4>
                    </div>
                    <? include_once('reserva.php');?>
                </div>
            </div>
            <!--/main-->
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>