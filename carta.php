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
							<?php 
								$posts10 = get_field('_seleccione_items_10');
								if( $posts10 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_10'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts10 as $p10 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p10->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p10->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p10->ID, '_descripcion', true);
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
								$posts11 = get_field('_seleccione_items_11');
								if( $posts11 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_11'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts11 as $p11 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p11->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p11->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p11->ID, '_descripcion', true);
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
								$posts12 = get_field('_seleccione_items_12');
								if( $posts12 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_12'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts12 as $p12 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p12->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p12->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p12->ID, '_descripcion', true);
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
								$posts13 = get_field('_seleccione_items_13');
								if( $posts13 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_13'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts13 as $p13 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p13->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p13->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p13->ID, '_descripcion', true);
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
								$posts14 = get_field('_seleccione_items_14');
								if( $posts14 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_14'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts14 as $p14 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p14->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p14->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p14->ID, '_descripcion', true);
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
								$posts15 = get_field('_seleccione_items_15');
								if( $posts15 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_15'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts15 as $p15 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p15->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p15->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p15->ID, '_descripcion', true);
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
								$posts16 = get_field('_seleccione_items_16');
								if( $posts16 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_16'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts16 as $p16 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p16->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p16->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p16->ID, '_descripcion', true);
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
								$posts17 = get_field('_seleccione_items_17');
								if( $posts17 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_17'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts17 as $p17 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p17->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p17->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p17->ID, '_descripcion', true);
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
								$posts18 = get_field('_seleccione_items_18');
								if( $posts18 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_18'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts18 as $p18 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p18->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p18->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p18->ID, '_descripcion', true);
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
								$posts19 = get_field('_seleccione_items_19');
								if( $posts19 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_19'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts19 as $p19 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p19->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p19->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p19->ID, '_descripcion', true);
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
								$posts20 = get_field('_seleccione_items_20');
								if( $posts20 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_20'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts20 as $p20 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p20->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p20->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p20->ID, '_descripcion', true);
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
								$posts21 = get_field('_seleccione_items_21');
								if( $posts21 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_21'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts21 as $p21 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p21->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p21->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p21->ID, '_descripcion', true);
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
								$posts22 = get_field('_seleccione_items_22');
								if( $posts22 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_22'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts22 as $p22 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p22->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p22->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p22->ID, '_descripcion', true);
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
								$posts23 = get_field('_seleccione_items_23');
								if( $posts23 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_23'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts23 as $p23 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p23->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p23->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p23->ID, '_descripcion', true);
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
								$posts24 = get_field('_seleccione_items_24');
								if( $posts24 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_24'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts24 as $p24 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p24->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p24->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p24->ID, '_descripcion', true);
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
								$posts25 = get_field('_seleccione_items_25');
								if( $posts25 ): ?>
							  	<li>
							  		<div class="container"><h3><?php the_field('_nombre_seccion_25'); ?></h3></div>
							  		<div class="container">
							  		<?php $i=1; foreach( $posts25 as $p25 ): ?>
							  			<div class="cont-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
									  		<div class="item-carta <? echo $i; ?>">
									  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
									  				<div class="clearfix">
											  			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding">
											  				<span class="name"><?php echo get_the_title( $p25->ID ); ?></span>
											  			</div>
											  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											  				<?php 
											  					$price = get_post_meta($p25->ID, '_precio', true);
											  					echo '<span class="price">'.$price.'</span>';
											  				?>
											  			</div>
											  		</div>
											  		<?php 
														$desc = get_post_meta($p25->ID, '_descripcion', true);
											  			echo '<span class="descripcion">'.$desc.'</span>';
											  		?>
										  		</div>
									  		</div>
								  		</div>
								  	<?php $i++; endforeach; ?>
								  	</div>
							  	</li>
							<?php endif; ?>