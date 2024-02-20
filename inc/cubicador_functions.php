<?php

function cubicador_scripts() {
    // wp_register_style( 'my-admin-style', , array(), '1.0', 'all' );
    // wp_enqueue_style( 'my-admin-style' );
    // echo 'hola';
    wp_enqueue_style( 'cubicadoer', get_template_directory_uri(  ).'/css/cubicador.css', 'all' );
    wp_enqueue_script( 'cubicador', get_template_directory_uri(  ).'/js/cubicador.js', 'all' );

    wp_localize_script( 'cubicador', 'template_dir', array(
      'dir' => get_template_directory_uri(  )));


  }
  add_action( 'wp_enqueue_scripts', 'cubicador_scripts' );
 ?>