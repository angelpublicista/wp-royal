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
    <section class="sub-heading-section <?php echo add_class_subheader('banner');?> mb-5"<?php if($geniorama['opt-bg-subheaders'] === '1'):?> style="background-image: url('<?php echo add_banner_subheader(); ?>')" <?php endif; ?>>
        <div class="container">
            <div class="position-relative content-box <?php echo add_class_subheader('alignment'); ?>">
                <h1><?php  
                    if (is_archive()) {
                        the_archive_title();
                    } else {
                        the_title();
                    }
                ?></h1>
                <?php if($geniorama['breadcrumbs-on-off']): ?>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php 
                            if (function_exists('bcn_display')) {
                                bcn_display();
                            }
                        ?>
                    </div>
                <?php endif; ?>

                <div class="rgc-search-bar shadow">
                     <?php echo do_shortcode('[searchandfilter fields="search,destinos" headings="Palabra clave, Destino" search_placeholder="Ingresa un término" post_types="tours" submit_label="BUSCAR" class="rgc-custom-filter-form"]'); ?>
                </div>
            </div>
        </div>
    </section>

