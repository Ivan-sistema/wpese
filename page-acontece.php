<?php /* template name: acontece */ ?>
<?php get_header(); ?>


<section id="acontece-na-ese">
			<div class="container-carousel-acontece">	
			<h2>Fique por dentro</h2>
			<h3>do que está acontecendo na faculdade e no mundo do empreendedorismo</h3>
			<?php get_template_part('template_parts/carousel/acontece'); ?>
			</div>
</section>

<section id="acontece-ecossistema">
		<div class="container-ese">
			<?php get_template_part('template_parts/carousel/ecosistema'); ?>
		</div>
</section>

<section id="carousel-post">
	<div class="container-ese">
		
		<div class="title-carousel">

			<h2>ESE na midia</h2>
		</div>
		<?php get_template_part('template_parts/carousel/ese-na-midia'); ?>
	</div>
</section>


<?php get_footer(); ?>