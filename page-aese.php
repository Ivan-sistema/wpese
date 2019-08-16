<?php /* template name: a-ese */ ?>

<?php get_header(); ?>



<section id="slider">



		<?php echo do_shortcode('[rev_slider alias="a-ese"]');?>



	</section>



<section id="a-ese-secao"></section>

<section id="a-ese" class="secao">

		<div class="container-ese">

			<div class="col">

				<div class="separador-azul"></div>

				<?php the_field('coluna_esquerda'); ?>

				<div class="separador-azul"></div>

			</div>

			<div class="col">

				

				

				<?php the_field('coluna_direita'); ?>

			</div>

		</div>

</section>



<section id="conheca-a-ese-secao"></section>



<section id="conheca-a-ese" class="secao">

		<div class="title-conheca-a-ese">

			<div class="container-ese">

				<h2>Conheça a ESE</h2>

				<div class="main-tab ">

					<div class="tab tab-1">Estrutura</div>

					<div class="tab tab-2">Nossa História</div>

					<div class="tab tab-3">Missão, Visão e Principios</div>

					<div class="tab tab-4">Gestão Executiva</div>

				</div>

			</div>

		</div>



	<div class="container-full-ese">

		<div class="container-ese">

			<div class="main-tab-content">

				<div class="tab-index tab-index-1">

					<p>Nossa estrutura suporta e oferece todas as condições para desenvolver uma das instituições de ensino<br/>

					 superior mais inovadoras do país. Venha conhecer nosso espaço!</p>



					<?php get_template_part('template_parts/carousel/estrutura'); ?>

				</div>

				<div class="tab-index tab-index-2" id="aese-nossa-historia">

					<div class="centralizar">

						

					<?php get_template_part('template_parts/parts/aese-nossa-historia'); ?>



				</div>

				</div>

				<div class="tab-index tab-index-3">

					

					<?php get_template_part('template_parts/parts/missao-visao-principios'); ?>

				</div>

				<div class="tab-index tab-index-4" style="padding: 2% 0;">

					<p>A Escola Superior de Empreendedorismo SEBRAE-SP (ESE) está ligada diretamente à Superintendência do Sebrae-SP (mantenedora), tendo em sua gestão:</p>

					<div  style="border: 1px solid #e2e4e7;  padding: 5% 0; margin: 5% 0;">

						<?php get_template_part('template_parts/carousel/gestao-executiva'); ?>

					</div>

				</div>

			</div>

		</div>

	</div>

	</div>

</section>





<section id="comp-empreendedoras-secao"></section>

<section id="competencias-empreendedoras" class="secao">

	<?php get_template_part('template_parts/parts/competencias-empreendedoras'); ?>

</section>





<section id="pesquisa-publicada-secao"></section>

<section id="pesquisas-publicadas" class="secao">

	<div class="container-full-ese">

	<div class="container-ese">

		

			<?php get_template_part('template_parts/parts/section-pesquisas-publicadas'); ?>

	</div>

</div>

<div class="container-full-ese" id="publicadas">

	<div class="container-ese">

		<div class="col-pesquisa-main">

			<h3>Pesquisas desenvolvida pelo SEBRAE e pela ESE</h3>

			<?php get_template_part('template_parts/parts/pesquisas-publicadas'); ?>

		</div>

	</div>

</div>

</section>







<section id="cpa-secao"></section>

<section id="cpa" style="background: #fbfcfc; display: none;" class="secao">

	

			<?php get_template_part('template_parts/section-cpa'); ?>

</section>



<?php get_footer(); ?>