<?php

get_header();
?>

<?php if(is_user_logged_in()): ?>

<?php  get_template_part('template-parts/subheader'); ?>

<main class="rgc-main-packages-single">
    <!-- Info paquete -->
    <section class="rgc-package-info padding-section">
        <div class="container">
            <div class="rgc-box-title text-center mb-5">
                <h3>¡Tu viaje está casi listo!</h3>
                <hr class="rgc-box-title__divider">
            </div>

            <div class="row rgc-content-package shadow">
                <div class="col-12 col-md-7 p-0">
                    <div class="rgc-content-package__gallery slick-theme slick-custom-rgc">
                        <a href="https://picsum.photos/1920/1080" data-lightbox="roadtrip"><img src="https://picsum.photos/1920/1080" alt="" class="rgc-content-package__gallery-item"></a>
                        <a href="https://picsum.photos/1920/1080" data-lightbox="roadtrip"><img src="https://picsum.photos/1920/1080" alt="" class="rgc-content-package__gallery-item"></a>
                    </div>
                </div>
                <div class="col-12 col-md-5 p-5">
                    <div class="rgc-content-package__rating text-right mb-5 justify-content-end">
                        <span class="rgc-content-package__rating-number">4.5</span>
                        <div class="rgc-content-package__rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <h3 class="rgc-content-package__title text-center">Cartagena, Bol</h3>
                    <div class="rgc-content-package__days mb-3 text-center">
                        <span class="rgc-content-package__days-night"><i class="far fa-moon"></i> 4 noches</span>
                        <span class="rgc-content-package__days-day"><i class="far fa-sun"></i> 3 días</span>
                    </div>

                    <p class="rgc-content-package__desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error doloremque ad non nemo ipsam eaque natus accusamus minima, ut, explicabo assumenda adipisci? Nostrum vero tempora quasi harum! Ipsum, quam eos.</p>
                
                    <div class="rgc-content-package__price">
                        <span class="rgc-content-package__price-reduced">$530.000 <br><span class="rgc-content-package__price-reduced__condition">por persona</span></span>
                        <span class="rgc-content-package__price-normal">$530.000 <br><span class="rgc-content-package__price-normal__condition">por persona</span></span>
                    </div>

                    <div class="text-center">
                        <a href="#" class="button-master principal-button button-rounded my-3">RESERVAR AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluye -->
    <section class="padding-section rgc-include">
        <div class="container">
            <div class="rgc-box-title text-center mb-5">
                <h3>INCLUYE</h3>
                <hr class="rgc-box-title__divider">
            </div>
            
            <div class="row rgc-package-features text-center">
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
                <div class="col-6 col-md-4 rgc-package-features__box mb-3">
                    <i class="fas fa-bed"></i>
                    <span class="rgc-package-features__box-text">Feature 1</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Términos y condiciones -->
    <section class="padding-section rgc-package-conditions">
        <div class="container">
            <div class="rgc-package-conditions__box rgc-rounded-card p-5">
                <h3 class="rgc-package-conditions__box-title text-center">Términos y condiciones</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae tempore ea ipsa ipsum corrupti. Vitae obcaecati consequuntur labore. A eaque quae natus sequi veniam alias. Omnis esse delectus quia perspiciatis.</p>
            </div>
        </div>
    </section>

    <!-- Sección asesoría -->
    <section class="padding-section rgc-assesor bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-asesor.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="far fa-paper-plane"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="fas fa-headset"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="rgc-assesor__box">
                        <i class="fas fa-headset"></i>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paquetes recomendados -->
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
        <p>Si ya estás registrad@, debes <a href="#">Iniciar sesión</a> para ver este contenido</p>
    </section>
<?php endif; ?>
<?php
get_footer();