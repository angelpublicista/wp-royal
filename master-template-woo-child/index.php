<?php 

get_header();
get_template_part('template-parts/rgc-subheader'); 

$post_type = $_GET['post_types'];

$args = array(
    "post_type" => $post_type
);

$post_query = new WP_Query($args);

?>

<section class="mt-5 pt-5 text-center">
    <h2>Todos los destinos</h2>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php while($post_query->have_posts()): $post_query->the_post();?>
                <div class="col-12 col-md-4 rgc-item-search">
                    <?php echo do_shortcode( "[rgc_card_packages]" ); ?> 
                </div>
            <?php endwhile; ?>  
        </div>
    </div>
</section>

<?php
get_footer();
