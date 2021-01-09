<?php

get_header();
get_template_part('template-parts/rgc-subheader'); 
?>
<section class="mt-5 pt-5 text-center">
    <h2><?php the_archive_title(); ?></h2>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php while(have_posts()): the_post();?>
                <div class="col-12 col-md-4 rgc-item-search">
                    <?php echo do_shortcode( "[rgc_card_packages]" ); ?>
                </div>
            <?php endwhile; ?>  
        </div>
    </div>
</section>

<?php
get_footer();