<?php

// function my_custom_search_query( $query ) {
//     if ( !is_admin() && $query->is_search ) {
//         var_dump($query);
//       $query->set('meta_query', array(
//         array(
//           'key' => 'fecha',
//           'value' => '2020-12-15',
//           'compare' => 'LIKE'
//         )
//       ));
//     };
//   }
// add_filter( 'pre_get_posts', 'my_custom_search_query' );