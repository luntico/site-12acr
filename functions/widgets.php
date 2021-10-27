<?php

function adenium_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'adenium' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );
  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Form Ligamos', 'adenium' ),
    'id'              => 'formligamos',
    'description'     => __( 'Formulário Ligamos para Você', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  register_sidebar( array(
    'name'            => __( 'Form Home', 'adenium' ),
    'id'              => 'formhome',
    'description'     => __( 'Formulário de Fale Conosco da página principal', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  register_sidebar(array(
    'name' => __('Form Planos', 'adenium'),
    'id' => 'formplanos',
    'description' => __('Formulário de Fale Conosco da página principal', 'b4st'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));


  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'adenium' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'adenium_widgets_init' );
