<?php

get_header();
?>

<?php  get_template_part('template-parts/subheader'); ?>

<main class="rgc-main-packages-single">
    <div class="container">
        <div class="rgc-box-title text-center">
            <h3>¡Tu viaje está casi listo!</h3>
            <hr class="rgc-box-title__divider">
        </div>

        <div class="row rgc-content-package shadow">
            <div class="col-12 col-md-7 p-0">
                <div class="rgc-content-package__gallery slick-theme">
                    <div class="item">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                    <div class="item">
                        <img src="https://picsum.photos/1920/1080" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 p-5">
                <div class="rgc-content-package__rating">
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
            </div>
        </div>
    </div>
</main>

<?php
get_footer();