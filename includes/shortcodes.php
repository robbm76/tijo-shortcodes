<?php
/***********************************************************************************
* shortcodes
***********************************************************************************/

/* column classes
----------------------------------*/
function tijo_genesis_column_shortcode( $atts, $content = 'null' ) {
  extract( shortcode_atts( array(
    'size' => '',
    'position' => ''
    ),
  $atts, 'col' ) );

  $col_atts = $size;
  
  if ( $position == 'first' ) {
    $col_atts .= ' first'; 
  }

  $col = '<div class="'.$col_atts.'">'.do_shortcode($content).'</div>';
  
  return $col;
}

add_shortcode( 'col', 'tijo_genesis_column_shortcode' );
