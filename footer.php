		<?php if(is_page('contacto')) { ?>
			<footer id="footer-contact"></div>
		<? } else { ?>
			<!--FOOTER-->
			<footer id="footer" class="clearfix">
				<div class="shadow-foot">
					<?php if(is_page('bar') || is_page('restaurant')) { ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/footer/foot_rest.png" class="back-foot" />
					<? } elseif(is_page('spa')) { ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/footer/foot_spa.png" class="back-foot" />
					<? } elseif(is_page('tours-y-actividades') || is_singular('tours') || is_page('el-valle-de-elqui')) { ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/footer/foot_hotel.png" class="back-foot" />
					<? } else { ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/footer/foot_home.png" class="back-foot" />
					<? } ?>
					<div class="deg"></div>
				</div>
				<div class="container">
					<div class="top-foot">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/footer/tripadvisor.png" class="img-responive no-float" />
						<?php
                            $connected = new WP_Query( array(
                                'post_type'      => 'testimonial',
	                            'posts_per_page' => 1,
	                            'orderby' => 'rand'
                            ) );
                            if ( $connected->have_posts() ) :
                        ?>
                        <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-11 no-float">
								<blockquote><span class="quote-init"></span><? the_content(); ?><span class="quote-finish"></span></blockquote>
							</div>
							<div class="testimonio">
								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-11 no-float">
									<p>Opinión escrita por <? if(get_field('_autor') ): ?><?php the_field('_autor'); ?><? endif; ?> <? if(get_field('_fecha_testimonio') ): ?>el <?php the_field('_fecha_testimonio'); ?><? endif; ?> <? if(get_field('_enlace_tripadvisor') ): ?>en <a href="<?php the_field('_enlace_tripadvisor'); ?>" target="_blank">TripAdvisor</a><? endif; ?></p>
								</div>
							</div>
                        <?php $i++; endwhile; ?>
                        <?php wp_reset_postdata();
                            endif;
                        ?>
					</div>
					<div class="bottom-foot">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<a href="#club" class="inline"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo/club.png" class="img-responsive logo-img" /></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<ul class="foot-data">
								<?php
									$address = get_field('_direccion_hotel', 'option');
									$map = get_field('_enlace_a_google_maps', 'option');
									$telefono = get_field('_telefono_footer', 'option');
									$facebook = get_field('_enlace_facebook', 'option');
								?>
								<li class="address"><a href="<? echo $map ;?>" target="_blank"><? echo $address ;?></a></li>
								<li class="phone"><? echo $telefono ;?></li>
								<li class="facebook"><a href="<? echo $facebook ;?>" target="_blank">TerralHotelSpa</a></li>
							</ul>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<? dynamic_sidebar('sidebar-general') ;?>
						</div>
					</div>
				</div>
			</footer>
			<!--/FOOTER-->
			<div style='display:none'>
				<div id="club" class="cont-img">
					<a href="http://www.clublaserena.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/main/club.jpg" class="img-responsive" /></a>
				</div>
			</div>
		<? } ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>