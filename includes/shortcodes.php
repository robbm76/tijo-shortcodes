<?php

/***************************************************************************************************
* shortcodes
******************************************************************************************************/

add_shortcode( 'accordion_section', 'accordion_shortcode_wrapper' );
function accordion_shortcode_wrapper( $atts, $content = 'null' ) {
  ob_start();
  // Load necessary scripts only when shortcode is used
  wp_enqueue_script( 'jquery-ui-accordion' );
  ?>

  <div class="gb-accordion">
    <?php echo do_shortcode($content); ?>
  </div>

  <?php
  $gb_accordion_wrapper = ob_get_clean();
  return $gb_accordion_wrapper;
}

add_shortcode( 'accordion', 'accordion_shortcode_section' );
function accordion_shortcode_section( $atts, $content = 'null' ) {
  extract( shortcode_atts( array(
    'title' => '',
    ),
  $atts, 'gb_accordion_section' ) );
  ob_start();
  ?>
    <p class="gb-accordion-trigger"><?php echo $title; ?></p>
    <div class="gb-accordion-content">
      <?php
        do_action( 'gb_before_accordion_content');
        echo do_shortcode($content);
        do_action( 'gb_after_accordion_content' );
      ?>
    </div>
  <?php
  $gb_accordion_section = ob_get_clean();
  return $gb_accordion_section;
}