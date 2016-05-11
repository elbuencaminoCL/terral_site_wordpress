			<div id="reserva" class="clearfix shadow">
				<div class="container">
					<? 
						$quedate = get_page_by_path('quedate');
						$content = apply_filters('the_content', $quedate->post_content);
						$enlace = get_field('_enlace_boton', $quedate);
						echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
							echo '<p>'.$content.'</p>';
							echo '<div class="booking-wrap">';
							if($enlace) {
								echo '<div class="cont-button">';
									echo '<a href="'.$enlace.'" class="button button-home conoce upper">Reserva tu habitación</a>';
								echo '</div>';
							}
							echo '</div>';
						echo '</div>';
					?>
				</div>
				<!-- <div class="booking-search hb-booking-search-form clearfix">
					<div class="container">
						<?php get_template_part('part', 'booking-form'); ?>
					</div>
				</div>-->
			</div>