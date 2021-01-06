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
                <div class="col-12 col-md-4">
                    <div class="rgc-card-archive shadow rgc-rounded-card mb-2">
                        <?php 
                            $destinos = get_the_terms( $post->ID, 'destinos' );
                        ?>
                        <figure>
                            <?php the_post_thumbnail( "medium", array("class" => "rgc-card-archive__img") ); ?>

                            <?php if($destinos): ?>
                                <figcaption class="rgc-card-archive__caption">
                                    <span class="rgc-card-archive__caption__city <?php if(count($destinos) > 1): ?>multiple-cities<?php endif; ?>">
                                        <?php
                                            foreach ($destinos as $destino) {
                                                if(count($destinos) > 1){
                                                    echo $destino->name . ", ";
                                                } else {
                                                    echo $destino->name;
                                                }
                                            }
                                        ?>
                                    </span>
                                </figcaption>
                            <?php endif; ?>
                        </figure>

                        <div class="rgc-card-archive__info p-4">
                            <a href="<?php the_permalink(); ?>"><h4 class="rgc-card-archive__title text-center"><?php the_title(); ?></h4></a>
                            <hr>
                            <div class="rgc-content-package__price mb-4">
                            <?php 
                                // Info afiliados
                                $afiliados = get_field('afiliados');
                                $precio_afiliados = $afiliados['precio_afiliados'];
                                $condicion_afiliados = $afiliados['condicion_precio'];

                                // Info no afiliados
                                $no_afiliados = get_field('no_afiliados');
                                $precio_no_afiliados = $no_afiliados['precio_no_afiliados'];
                                $condicion_no_afiliados = $no_afiliados['condiciones_no_afiliado'];
                            ?> 
                                
                                <span class="rgc-content-package__price-reduced d-block"><span class="rgc-content-package__text-afiliados d-block">Tarifa Afiliado</span>$<?php echo $precio_afiliados; ?> <br><span class="rgc-content-package__price-reduced__condition d-block"> <?php echo $condicion_afiliados; ?></span></span>
                                <span class="rgc-content-package__price-normal d-block"><span class="rgc-content-package__text-noafiliados d-block">Tarifa No afiliado</span> $<?php echo $precio_no_afiliados; ?> <br><span class="rgc-content-package__price-normal__condition d-block"> <?php echo   $condicion_no_afiliados; ?></span></span>
                            </div>

                            <div class="text-center mt-3">
                                <a href="<?php the_permalink(); ?>" class="button-master principal-button button-rounded">VER PAQUETE</a>
                            </div>
                            
                        </div>
                        

                    </div> 
                </div>
            <?php endwhile; ?>  
        </div>
    </div>
</section>

<?php
get_footer();
