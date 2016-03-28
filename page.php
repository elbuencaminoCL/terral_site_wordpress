<?php get_header(); ?>
		
		<?php if(is_page('contacto')) { ?>
			<div id="main-contacto" class="clearfix">
				<div class="block clearfix">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 no-float">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="cont-form">
								<? the_content();?>
							</div>
						<?php endwhile; else: ?>
							<div class="col-xs-12">
								<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<? } else { ?>
			<!--main-->
			<div id="main" class="clearfix">
				<div class="clearfix block">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php if(is_page('carro')) { ?>
							<div class="cont-cart">
								<div class="container">
									<p>No esperes más para vivir una experiencia inolvidable en Valle del Elqui</p>
								</div>
							</div>
							<div class="cont-tab clearfix">
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 1: Seleccione fecha de estadía</span></div>
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12 active"><span>PASO 2: Revise y confirme su reserva</span></div>
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 3: Pague su reserva</span></div>
							</div>
						<? } ?>
						<?php if(is_page('finalizar-reserva')) { ?>
							<div class="cont-cart">
								<div class="container">
									<p>No esperes más para vivir una experiencia inolvidable en Valle del Elqui</p>
								</div>
							</div>
							<div class="cont-tab clearfix">
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 1: Seleccione fecha de estadía</span></div>
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 2: Revise y confirme su reserva</span></div>
								<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12 active"><span>PASO 3: Pague su reserva</span></div>
							</div>
						<? } ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<div class="container cont-product">
								<? the_content();?>
							</div>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<!--/main-->
		<? } ?>

<?php get_footer(); ?>