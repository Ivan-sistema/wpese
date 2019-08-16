<?php /* template name: Contato */ ?>
<?php get_header(); ?>


<section id="slider">

	<div class="container-full-ese">

		<?php echo do_shortcode('[rev_slider alias="contato"]');?>

	</div>

</section>	
<section id="contato">
		<div class="container-ese display-flex ">
			<div class="col">
				<div class="cont-conteudo">
				<h2><?php the_field('titulo_da_pagina'); ?></h2>
			
				<?php the_field('endereco'); ?>
			
				<?php the_field('contato'); ?>

				    
<div class="form">


				<?php the_field('titulo_formulario'); ?>
				<?php the_field('formulario'); ?>

</div>

  </div>
		</div>
		<div class="col">
			
				<?php the_field('conteudo_do_mapa'); ?>
		</div>
		</div>
</section>
<?php get_footer(); ?>