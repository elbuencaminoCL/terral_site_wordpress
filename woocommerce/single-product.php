<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	
	<div class="cont-cart">
		<div class="container">
			<p>No esperes más para vivir una experiencia inolvidable en Valle del Elqui</p>
		</div>
	</div>
	<div class="cont-tab clearfix">
		<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12 active"><span>PASO 1: Seleccione fecha de estadía</span></div>
		<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 2: Revise y confirme su reserva</span></div>
		<div class="tab col-lg-4 col-md-4 col-sm-4 col-xs-12"><span>PASO 3: Pague su reserva</span></div>
	</div>
	<div class="container cont-product">
		<?php do_action( 'woocommerce_before_main_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<?php endwhile; ?>
		<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>
	</div>

<?php get_footer( 'shop' ); ?>