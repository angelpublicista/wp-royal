<?php
/**
 * Template part for displaying subheaders
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama;
?>
    <section class="rgc-sub-heading-section sub-heading-section <?php echo add_class_subheader('banner');?> mb-5"<?php if($geniorama['opt-bg-subheaders'] === '1'):?> style="background-image: url('<?php echo add_banner_subheader(); ?>')" <?php endif; ?>>
        <div class="container">
            <div class="position-relative content-box <?php echo add_class_subheader('alignment'); ?>">
                <div class="row align-items-center mb-3">
                    <div class="col-12 col-md-5 text-right rgc-intro__left">
                        <h2>ELIGE TU <span class="text-color-primary">PAQUETE</span></h2>
                    </div>
                    <div class="col-12 col-md-7 text-left rgc-intro__right">
                        <h3><span class="text-color-primary">Disfruta al máximo tu destino con</span> Royal Golden Club</h3>
                    </div>
                </div>

                <?php echo do_shortcode('[searchandfilter fields="search,destinos" post_types="tours"]'); ?>

                <div class="rgc-search-bar">
                    <?php echo do_shortcode('[rgc_search_advanced]'); ?>
                </div>
            </div>
        </div>
    </section>
