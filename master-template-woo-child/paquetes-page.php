<?php
/**
* Template Name: Paquetes página
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>

<?php get_template_part('template-parts/rgc-subheader'); ?>

<main class="rgc-main-packages bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-pattern.jpg')">
    <section class="padding-section">
        <div class="container">
            <div class="rgc-box-title text-center">
                <h3>PAQUETES RECOMENDADOS</h3>
                <hr class="rgc-box-title__divider">
            </div>
        </div>

        <?php echo do_shortcode( '[rgc_carousel_tours]' ); ?>
    </section>
</main>
<?php
get_footer();