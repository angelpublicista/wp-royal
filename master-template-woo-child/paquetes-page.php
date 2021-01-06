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

<?php if(is_user_logged_in()): ?>
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
<?php else: ?>
  <section class="padding-section text-center rgc-user-block d-flex align-items-center justify-content-center flex-column">
    <i class="fas fa-user-lock mb-4"></i>
    <h2>Contenido restringido</h2>
    <p>Si ya estás registrad@, debes <a href="<?php echo wp_login_url(); ?>">Iniciar sesión</a> para ver este contenido</p>
  </section>  
<?php endif; ?>
<?php
get_footer();