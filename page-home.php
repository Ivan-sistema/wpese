<?php /* template name: home */ ?>
<?php get_header(); ?>
<section id="slider">

	<div class="container-full-ese">

		<?php echo do_shortcode('[rev_slider alias="slider"]');?>

	</div>

</section>





<section id="quemsomos-home" style="background-image: url('<?php the_field('imagem_de_fundo'); ?>');">
	
<?php get_template_part('template_parts/parts/quem-somos'); ?>

</section>




<section id="cursos">
	
	<?php get_template_part('template_parts/parts/cursos'); ?>

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



<!-- MODAIS -->

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
<?php get_footer(); ?>
