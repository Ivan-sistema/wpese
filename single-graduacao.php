<?php get_header(); ?>

<section id="slider">
		<?php echo do_shortcode('[rev_slider alias="graduacao-slider"]');?>
</section>


<?php while(have_rows('graduacoes_pagina')){ 
				the_row(); ?>

<section id="ocurso">
		<div class="container-ese">
			<div class="col">
				<div class="separador-azul"></div>
				<h2>O Curso</h2>
				<?php echo get_sub_field('conteudo_curso_1'); ?>
			</div>
			<div class="col">
			
				<?php echo get_sub_field('conteudo_curso_2'); ?>
			</div>
		</div>

	<div class="detalhe-curso">
		<div class="container-ese">
			<h3>Detalhes do Curso</h3>
			<div class="content-container-ese">
				<div class="col">
					<?php echo get_sub_field('icone_vagas'); ?>
					<?php echo get_sub_field('conteudo_vagas'); ?>
					
				</div>
				<div class="col">

					<?php echo get_sub_field('icone_mensalidade'); ?>
					<?php echo get_sub_field('conteudo_mensalidade'); ?>
					
				</div>
				<div class="col">

					<?php echo get_sub_field('icone_carga_horaria'); ?>
					<?php echo get_sub_field('conteudo_carga_horaria'); ?>
					
				</div>
				<div class="col">

					<?php echo get_sub_field('icone_duracao'); ?>
					<?php echo get_sub_field('conteudo_duracao'); ?>
					
				</div>
				<div class="col">

					<?php echo get_sub_field('icone_periodo'); ?>
					<?php echo get_sub_field('conteudo_periodo'); ?>

				</div>
				<div class="col">

					<?php echo get_sub_field('icone_local'); ?>
					<?php echo get_sub_field('conteudo_local'); ?>
					
				</div>


			</div>
		</div>
	</div>
</section>






<section id="matriz-curso">
	<div class="container-ese">
		<div class="col">
			<div class="separador-p" style="margin-bottom: 42px;"></div>
			<h2>Matriz Curricular</h2>
			<?php get_template_part('template_parts/parts/matriz-curricular'); ?>
		</div>
	</div>
</section>


<section id="professores-curso">
		<div class="container-ese">
		<div class="separador-azul" style=""></div>
		<div class="title-professores">
			<h2>Professores</h2>
		</div>
		</div>
		<div class="container-ese-professores">
			<?php get_template_part('template_parts/carousel/graduacao'); ?>
		</div>
</section>

<section id="vestibular-datas" style="background: #061727 url('<?php echo get_sub_field('imagem_de_fundo'); ?>') no-repeat;">
		<div class="container-ese">
			<div class="col-vestibular-100">
				<div class="left-col-vestibular">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/vestibular-title.png">
				</div>	


				<?php if(get_sub_field('botao_de_escolha') == 'Sim'){ ?>
				<div class="box-vestibular-aberto">
					<div class="right-col-vestibular">
					
								<?php echo get_sub_field('vestibular_aberto');?>
						
					</div> 
					<div class="col-vestibular-100" style="margin: 5% 0;">
						<div class="btn-vestibular-aberto acesse-edital">
							<a href="">Acesse o edital</a>
						</div>
						<div class="btn-vestibular-aberto inscreva-se-vestibular">
							<a href="">Quero me Inscrever</a>
						</div>
					</div>
				</div>
			<?php 	} else { ?>
						<div class="right-col-vestibular">
							<div class="box-form">
							
								<?php echo get_sub_field('formulario_vestibular');?> 
								
							</div> 
						</div>
				<?php	} ?>



			</div>



			
		</div>
	
	<div class="container-full-ese" style="margin: 250px 0 0;">
		<div class="container-ese">
			<div class="col-vestibular">
			<div class="separador-p" style="margin-bottom: 36px;"></div>
			
			<?php echo get_sub_field('transferencia'); ?>
			</div>

			<div class="col-vestibular" style="border:1px solid #cdcecf; padding: 28px 0 28px 28px;">
				<ul>
					<?php echo get_sub_field('info_central'); ?>
				</ul>
			
					
			</div>
			<div class="col-vestibular">
				<?php echo get_sub_field('observacoes'); ?>
			</div>
		</div>
	</div>
</section>

<section id="segunda-graduacao">
	<div class="container-full-ese">
		<div class="container-ese">
			<div class="col-vestibular">

			<div class="separador-p" style="margin-bottom: 36px;"></div>
			<?php echo get_sub_field('portador_de_diploma'); ?>
			</div>

<!-- 			<div class="col-vestibular" style="border:1px solid #cdcecf; padding: 28px 0 28px 28px;">
				
			
					
			</div> -->
			
		</div>
	</div>
	
</section>

<section id="bolsas-curso">
	<div class="container-full-ese">
		<div class="container-ese">
			<div class="col-vestibular">
				
			<div class="separador-p" style="margin-bottom: 36px;"></div>
			<?php echo get_sub_field('info_bolsas_1'); ?>
			</div>

			<div class="col-vestibular" style="border:1px solid #cdcecf; padding: 28px 0 28px 28px;">
				<ul><?php echo get_sub_field('info_bolsas_central'); ?>	</ul>
			
					
			</div>
			<div class="col-vestibular">
			<?php echo get_sub_field('info_bolsas_2'); ?>
			</div>
		</div>
	</div>
	
</section>
<section id="vestibular-curso">
	<div class="container-ese">
		<div class="col">
			<img src="<?php echo get_sub_field('imagem_esquerda'); ?>">
		</div>
		<div class="col">
			
					<?php echo get_sub_field('formulario_novidades'); ?>

		</div>
	</div>
</section>
<?php } ?>
<?php get_footer(); ?>