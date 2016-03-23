<?php
/*
* Template Name: Restaurant
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container clearfix">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="main-rest">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro-rest">
							<?php if( get_field('_subir_imagen_intro') ): ?>
				    			<img src="<?php the_field('_subir_imagen_intro'); ?>" class="img-responsive" />
				    		<?php endif; ?>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<? the_content();?>
						</div>
					</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
					<?php if( get_field('_subtitulo') ): ?>
		    			<h3 class="clearfix subtitle"><?php the_field('_subtitulo'); ?></h3>
		    		<?php endif; ?>
				</div>
			</div>
			<div class="cont-carta clearfix">
				<div class="carta-bar">
					<?php if( get_field('_subir_imagen_back') ): ?>
		    			<img src="<?php the_field('_subir_imagen_back'); ?>" class="img-responsive main-image" />
		    		<?php endif; ?>
		    		<div class="block-image clearfix block-carta block">
						<ul class="bxslider">
							<?php 
								$posts = get_field('_seleccione_items');
								if( $posts ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts as $p ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo 'item'.$i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
										  				$desc = get_post_meta($p->ID, '_descripcion', true);
										  				echo '<span class="descripcion">'.$desc.'</span>';
										  			?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts2 = get_field('_seleccione_items_2');
								if( $posts2 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_2'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts2 as $p2 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p2->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p2->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
											  			$desc = get_post_meta($p2->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts3 = get_field('_seleccione_items_3');
								if( $posts3 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_3'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts3 as $p3 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p3->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p3->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p3->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  </div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts4 = get_field('_seleccione_items_4');
								if( $posts4 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_4'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts4 as $p4 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p4->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p4->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p4->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts5 = get_field('_seleccione_items_5');
								if( $posts5 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_5'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts5 as $p5 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p5->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p5->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p5->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts6 = get_field('_seleccione_items_6');
								if( $posts6 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_6'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts6 as $p6 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p6->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p6->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p6->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts7 = get_field('_seleccione_items_7');
								if( $posts7 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_7'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts7 as $p7 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p7->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p7->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p7->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts8 = get_field('_seleccione_items_8');
								if( $posts8 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_8'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts8 as $p8 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p8->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p8->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p8->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
							<?php 
								$posts9 = get_field('_seleccione_items_9');
								if( $posts9 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_9'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts9 as $p9 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p9->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p9->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p9->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="intro-auxi">
				<?php if( get_field('_subir_imagen_auxi') ): ?>
					<div class="cont-auxi">
	    				<img src="<?php the_field('_subir_imagen_auxi'); ?>" class="img-responsive main-image" />
		    			<div class="intro-int-site no-float">
		    				<div class="container">
		    					<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 no-float">
				    				<?php 
										$texto = get_post_meta($post->ID, '_ingresar_texto_auxiliar', true);
										echo $texto;
									?>
									<div class="cont-button clearfix">
                            			<a href="#reservar-rest" class="button button-home conoce upper">Reservar</a>';
                        			</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="cont-reserva clearfix">
				<div class="container">
					<div class="col-reserva col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php if( get_field('_titulo_reservas') ): ?>
							<h3><?php the_field('_titulo_reservas'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('_texto_reservas') ): ?>
							<?php the_field('_texto_reservas'); ?>
						<?php endif; ?>
					</div>
					<div id="reservar-rest" class="col-form col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<? echo do_shortcode('[redirestaurant]');?>
					</div>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>