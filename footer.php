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
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-11 no-float">
							<blockquote><span class="quote-init"></span>Muy buena la atención, las habitaciones son bastantes cómodas, grandes, con un escritorio, una kitchen. Calefacción en las habitaciones. Se encuentra bastante céntrico, a dos cuadras de la plaza de armas. Aseo e higiene impecable. Tiene una terraza en el último piso, con jacuzzi y bar.<br/>
								Consejo sobre las habitaciones: Suban en la noche a la terraza a disfrutar de música, unos tragos y el jacuzzi<span class="quote-finish"></span></blockquote>
						</div>
						<div class="testimonio">
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-11 no-float">
								<p>Opinión escrita por Ignacio G el 14 noviembre 2015 en <a href="#">TripAdvisor</a></p>
							</div>
						</div>
					</div>
					<div class="bottom-foot">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo/logo.png" class="img-responsive logo-img" />
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<ul class="foot-data">
								<li class="address">San Martín 387, Vicuña, Chile</li>
								<li class="phone">+56 51 241 2217</li>
								<li class="facebook">TerralHotelSpa</li>
							</ul>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						</div>
					</div>
				</div>
			</footer>
			<!--/FOOTER-->
		<? } ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>