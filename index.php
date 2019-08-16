<?php /* template name: home */ ?>
<?php get_header(); ?>
<section id="slider">

	<div class="container-full-ese">

		<?php echo do_shortcode('[rev_slider alias="slider"]');?>

	</div>

</section>





<section id="quemsomos-home" style="background-image: url('<?php the_field('imagem_de_fundo'); ?>');">
	<div class="container-ese">
		<div class="main-quemsomos display-flex column ">
			<p><span class="separador-p"></span></p>
			<h2><?php the_field('titulo_quem_somos'); ?></h2>
			<p><?php echo get_sub_field('conteudo_quem_somos'); ?></p>

			  <div class="btn-ese ativar-quemsomos-home-container"><a class="upper">ver mais</a></div>
	
		</div>

	</div>



	<div class="container-ese display-flex">
		<div class="quemsomos-home-container display-flex">
			

cvb


			<div class="quemsomos-box">
		<div class="quemsomos-box-content right">
			<div class="separador-p-small"></div>
			<div class="box100">
			<h3><?php echo get_sub_field('titulo_coluna_1'); ?></h3>
			</div>

			<div class="box100">

						<?php echo get_sub_field('conteudo_coluna_1'); ?>
				
			</div>
			<div class="box100">
				<div class="btn-ese  saiba-mais-3"><span class="upper">Diferenciais</span></div>
			</div>
		</div>
	</div>





	<div class="quemsomos-box" style="border-right: 2px solid #fff; border-left: 2px solid #fff;">
		<div class="quemsomos-box-content-center">
			<div class="separador-p-small"></div>
			<div class="box100">
				<h3><?php echo get_sub_field('titulo_coluna_2'); ?></h3>
			</div>

			<div class="box100">

						<?php echo get_sub_field('conteudo_coluna_2'); ?>
				
			</div>
			<div class="box100">
				<div class="btn-ese saiba-mais-2"><span class="upper">saiba mais</span></div>
			</div>

		</div>
	</div>

	




<div class="quemsomos-box">
				<div class="quemsomos-box-content">

					<div class="separador-p-small"></div>
					<div class="box100">
					<h3><?php echo get_sub_field('titulo_coluna_3'); ?></h3>
					</div>

					<div class="box100">
						<?php echo get_sub_field('conteudo_coluna_3'); ?>

					
					</div>
					<div class="box100">
						<div class="btn-ese saiba-mais-1"><span class="upper">saiba mais</span></div>
					</div>
				</div>
			</div>






</div>
 

</div>

</section>



<div class="modal" id="modal1">
	<div class="modal-container">
		<div class="sairmodal"></div>
		<div class="conteudo-modal">
		<?php get_template_part('template_parts/modal/modal1'); ?>
	</div>
	</div>
</div>

<div class="modal" id="modal2">
	<div class="modal-container">
		<div class="sairmodal"></div>
		<div class="conteudo-modal">
		<?php get_template_part('template_parts/modal/modal2'); ?>
	</div>
	</div>
</div>

<div class="modal" id="modal3">
	<div class="modal-container">
		<div class="sairmodal"></div>
		<div class="conteudo-modal">
		<?php get_template_part('template_parts/modal/modal3'); ?>
	</div>
	</div>
</div>


<section id="cursos">
	<div class="container-full-ese" style="background-color: #fff; display: none;">
		<div class="container-ese title-cursos display-flex column">
			<h2 class="color-azul">Nossos Cursos</h2>
		</div>
	</div>

<!-- TRAZ OS CURSOS DE GRADUAÇÃO CADASTRADOS -->
	<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'graduacao'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
<?php while(have_rows('graduacao_home')){ 
				the_row(); ?>
	<div class="cursos-home banner-cursos-home column" style="background: url('<?php echo get_sub_field('banner_de_fundo_home'); ?>') center center no-repeat;">
			<div class="container-ese" style="max-width: 319px;">
			<h3><strong>Graduação:</strong> <?php echo get_sub_field('titulo_graduacao_home'); ?></h3>
			

			<div class="btn-ese-default"><a href="<?php the_permalink(); ?>">saiba mais</a></div>
		</div>
		</div>

	<?php } ?>
	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>


<!-- TRAZ OS CURSOS DE MBAs CADASTRADOS -->
<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'mba'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
<?php while(have_rows('mba_home')){ 
				the_row(); ?>
	<div class="cursos-home banner-cursos-home column" style="background: url('<?php echo get_sub_field('banner_de_fundo_home'); ?>') center center no-repeat;">
			<div class="container-ese" style="max-width: 319px;">
			<h3><strong>MBA:</strong> <?php echo get_sub_field('titulo_mba_home'); ?></h3>
			

			<div class="btn-ese-default"><a href="<?php the_permalink(); ?>">saiba mais</a></div>
		</div>
		</div>

	<?php } ?>
	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	

</section>





<section id="carousel-post">
	<div class="container-ese">

		<div class="title-carousel">

			<h2>ESE na mídia</h2>
			<!-- <h3>O que estão falando de nós</h3> -->

		</div>

		<?php get_template_part('template_parts/carousel/ese-na-midia'); ?>
	</div>
</section>




<?php get_footer(); ?>
