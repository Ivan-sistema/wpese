<?php



require get_template_directory()."/include/setup.php";



require get_template_directory()."/include/customizer/theme-customizer.php";







//hooks







//--Adiciona Css,Style etc.



add_action("wp_enqueue_scripts", "ese_theme_styles");

add_action("after_setup_theme", "ese_after_setup");

add_action("widgets_init", "ese_widgets");

add_action("customize_register", "ese_customize_register");





function create_post_type() {



  register_post_type( 'graduacao',

    array(
      'labels' => array(
      'name' => __( 'Graduações' ),
      'singular_name' => __( 'Graduação' )
      ),

      'public' => true,
    	'show_ui' => true,
    	'show_in_menu' => true,
  		'rewrite' => array('slug' => 'graduacao'),
  		'capability_type' => 'page',
      'has_archive' => true,
      'menu_position' => 20,
  		'supports' => array('title', 'editor', 'author', 'thumbnail')
    )
  );



 register_post_type( 'mba',
    array(
      'labels' => array(
      'name' => __( 'Mbas' ),
      'singular_name' => __( 'Mbas' )
      ),
      'public' => true,
    	'show_ui' => true,
  		'show_in_menu' => true,
    	'rewrite' => array('slug' => 'mba'),
  		'capability_type' => 'page',
      'has_archive' => true,
      'menu_position' => 21,
  		'supports' => array('title', 'editor', 'author', 'thumbnail')
    )
  );


 register_post_type( 'ese_na_midia',
    array(
      'labels' => array(
      'name' => __( 'Ese na Midia' ),
      'singular_name' => __( 'Ese na Midia' )
      ),

      'public' => true,
    	'show_ui' => true,
  		'show_in_menu' => true,
  		'rewrite' => array('slug' => 'ese_na_midia'),
  		'capability_type' => 'page',
      'has_archive' => true,
      'menu_position' => 21,
  		'supports' => array('title', 'editor', 'author', 'thumbnail')
    )
  );


 register_post_type( 'blog_acontece',
    array(
      'labels' => array(
      'name' => __( 'Blog acontece' ),
      'singular_name' => __( 'Blogs acontece' )
     ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => array('slug' => 'blog_acontece'),
    'capability_type' => 'page',
    'has_archive' => true,
    'menu_position' => 22,
    'supports' => array('title', 'editor', 'author', 'thumbnail')
    )
  );



 register_post_type( 'blog_ecossistema',

    array(

      'labels' => array(

        'name' => __( 'Blog ecossistema' ),

        'singular_name' => __( 'Blog ecossistema' )

     ),



    'public' => true,

    'show_ui' => true,

    'show_in_menu' => true,

    'rewrite' => array('slug' => 'blog_ecossistema'),

    'capability_type' => 'page',

    'has_archive' => true,

    'menu_position' => 23,

    'supports' => array('title', 'editor', 'author', 'thumbnail')

    )

  );



 register_post_type( 'ese_estrutura',

    array(

      'labels' => array(

        'name' => __( 'Ese Estrutura' ),

        'singular_name' => __( 'Ese Estrutura' )

     ),



    'public' => true,

    'show_ui' => true,

    'show_in_menu' => true,

    'rewrite' => array('slug' => 'ese_estrutura'),

    'capability_type' => 'post',

    'has_archive' => true,

    'menu_position' => 24,

    'supports' => array('title', 'editor', 'author', 'thumbnail')

    )

  );



 register_post_type( 'gestao_executiva',

    array(

      'labels' => array(

        'name' => __( 'Gestao Executiva' ),

        'singular_name' => __( 'Gestões Executivas' )

     ),



    'public' => true,

    'show_ui' => true,

    'show_in_menu' => true,

    'rewrite' => array('slug' => 'gestao_executiva'),

    'capability_type' => 'post',

    'has_archive' => true,

    'menu_position' => 24,

    'supports' => array('title', 'editor', 'author', 'thumbnail')

    )

  );



 register_post_type( 'pesquisa',

    array(

      'labels' => array(

        'name' => __( 'Pesquisa' ),

        'singular_name' => __( 'Pesquisa' )

     ),



    'public' => true,

    'show_ui' => true,

    'show_in_menu' => true,

    'rewrite' => array('slug' => 'pesquisa'),

    'capability_type' => 'post',

    'has_archive' => true,

    'menu_position' => 25,

    'supports' => array('title', 'editor', 'author', 'thumbnail')

    )

  );



 register_post_type( 'professores',

    array(

      'labels' => array(

        'name' => __( 'Professor Graduação' ),

        'singular_name' => __( 'Professores da Graduação' )

     ),



    'public' => true,

    'show_ui' => true,

    'show_in_menu' => true,

    'rewrite' => array('slug' => 'professores'),

    'capability_type' => 'post',

    'has_archive' => true,

    'menu_position' => 26,

    'supports' => array('title', 'editor', 'author', 'thumbnail')

    )

  );



 register_post_type( 'faq',
    array(
      'labels' => array(
      'name' => __( 'Faq' ),
      'singular_name' => __( 'Faqs' )
     ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => array('slug' => 'faq'),
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_position' => 27,
    'supports' => array('title', 'editor', 'author', 'thumbnail')
    )

  );


}

add_action( 'init', 'create_post_type' );