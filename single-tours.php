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
                                        <li><a href="<? bloginfo('wpurl')?>/contacto/" class="button reserva ajax">Reservar</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cont-cell col-lg-12 col-md-12 col-sm-12 col-xs-12 shadow clearfix">
                                <div class="white-col col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <div class="cont-description">
                                        <h5>Descripción:</h5>
                                        <? the_content();?>
                                    </div>
                                </div>
                                <div class="brown-col col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <div class="top-col">
                                        <?php if( get_field('_incluye') ): ?>
                                            <div class="cont-top-cell">
                                                <?php the_field('_incluye'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                        $connected = new WP_Query( array(
                                            'connected_type' => 'testimonial_to_tours',
                                            'connected_items' => get_queried_object_id(),
                                            'nopaging' => true,
                                        ) );
                                        if ( $connected->have_posts() ) :
                                    ?>
                                    <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                                        <div class="foot-col">
                                            <div class="price">
                                                <? 
                                                    if(get_post_meta($post->ID, '_precio_pesos', true)){
                                                        echo '<div class="cont-main-price">';
                                                            echo '<span>Precio:</span> CLP '.get_post_meta($post->ID, '_precio_pesos', true).' / USD '.get_post_meta($post->ID, '_precio_dolares', true);
                                                        echo '</div>';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
                                    <?php wp_reset_postdata();
                                        endif;
                                    ?>
                                </div>
                            </diV>
                        </div>
                    </div>
                </div>
            </div>
            <!--/main-->
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>