<?php 
  add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 

  function enqueue_parent_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
  } 

  // Add "Add to Cart" buttons in Divi shop pages
  add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20 );

  add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
  function shorten_woo_product_title( $title, $id ) {
      if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' && strlen( $title ) > 40 ) {
          return mb_substr( $title, 0, 40) . '…';
      } else {
          return $title;
      }
  }
?>