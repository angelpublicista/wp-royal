<?php

if(!function_exists('rgc_search_advanced_func')){
    function rgc_search_advanced_func(){
        ob_start();
        ?>
        <form action="<?php echo home_url( '/' ); ?>" role="search" method="get" >
            <div class="form-row rgc-search-box shadow align-items-end">
                <div class="form-group col text-left">
                    <label for="palabra" class="label-search">Palabra clave</label>
                    <input type="text" class="form-control" placeholder="Ingresa un término" value="<?php echo get_search_query() ?>" name="s">
                </div>
                <div class="form-group col text-left">
                    <label for="destino" class="label-search">Destino</label>
                    <select class="form-control custom-select">
                    <option selected disabled>Seleccione una opción</option>
                    <option value="Cartagena">Cartagena</option>
                    </select>
                </div>
                <div class="form-group col text-left">
                    <label for="fechas" class="label-search">Fechas</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="form-group col text-left">
                    <label for="fechas" class="fecha-none ">fecha</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col">
                    <input type="hidden" name="post_type" value="tours" />
                    <button type="submit" class="w-100 button-master rounded secondary-button mt-4 rgc-button-search search-submit"><i class="fas fa-search"></i> BUSCAR</button>
                </div>
            </div>
        </form>
        <?php
        return ob_get_clean();
    }

    add_shortcode( 'rgc_search_advanced', 'rgc_search_advanced_func' );
}