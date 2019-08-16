<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php  echo get_template_directory_uri(); ?>/assets/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



		<title>	</title>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ6LQ42');</script>
<!-- End Google Tag Manager -->
</head>



<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ6LQ42"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section id="topo">
		<div class="container-ese display-flex between">

		   <div class="col">

			<?php if(get_theme_mod('ese_instagram')): ?>

				<a href="<?php echo get_theme_mod('ese_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>

			<?php endif; ?>



			<?php if(get_theme_mod('ese_youtube')): ?>

				<a href="<?php echo get_theme_mod('ese_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_facebook')): ?>

				<a href="<?php echo get_theme_mod('ese_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_twitter')): ?>

				<a href="<?php echo get_theme_mod('ese_twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_linkedin')): ?>

				<a href="<?php echo get_theme_mod('ese_linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>

				

			<?php endif; ?>

		</div>



		<div class="col portal-topo">

		<a href="http://sgolite.sebraesp.com.br:8080/WEB/APP/EDU/PORTALEDUCACIONAL/login/" target="_blank" title="Portal do Aluno">Portal do Aluno</a>

		<a href="https://ensebraesp.micropower.com.br" target="_blank" title="Portal do Conhecimento">Portal do Conhecimento</a>

	</div>

	</div>

</section>



<section id="header">

	<div class="container-full-ese">

		<div class="container-ese">

			<div class="col-logotipo">
				<?php if(has_custom_logo()){
					the_custom_logo();
				} else { ?>
					<a href="<?php echo bloginfo('url'); ?>" title="ESE - Escola Superior de Empreendedorismo"><img src="http://helptask.com.br/job/ese/wp-content/uploads/2019/01/logotipo-menu-250x72.png" class="custom_logo"></a>
			<?php	} ?>
				

			</div>

			<div class="col-menu">
<div class="abrir-nav">
            	<span class="mm_line"></span>
            </div>

<?php 

if(has_nav_menu('primary')){

	wp_nav_menu(array(

		'theme_location' => 'primary',

		'container' => 'nav',

		'container_class' => 'menu-header',

		//'container_class' => 'COLOCAR CLASSE SEPARADO POR VIRGULA'

		'fallback_cb' => false

	));

}

?>

			</div>

		</div>

		</div>

	</div>

</section>




<section id="scroll-header" class="scroll-header">

	<div class="container-full-ese">

		<div class="container-ese">

			<div class="col-logotipo">
				<?php if(has_custom_logo()){
					the_custom_logo();
				} else { ?>
					<a href="<?php echo bloginfo('url'); ?>"><img src="http://helptask.com.br/job/ese/wp-content/uploads/2019/01/logotipo-menu-250x72.png" class="custom_logo"></a>
			<?php	} ?>
				

			</div>

			<div class="col-menu">
<div class="abrir-nav">
            	<span class="mm_line"></span>
            </div>

<?php 

if(has_nav_menu('primary')){

	wp_nav_menu(array(

		'theme_location' => 'primary',

		'container' => 'nav',

		'container_class' => 'menu-header',

		//'container_class' => 'COLOCAR CLASSE SEPARADO POR VIRGULA'

		'fallback_cb' => false

	));

}

?>

			</div>

		</div>

		</div>

	</div>

</section>
