<?php /* template name: MBA */ ?>
<?php get_header(); ?>
<?php while(have_rows('mba_pagina')){ 
				the_row(); ?>
<section id="slider">
	<?php echo get_sub_field('slider_page'); ?>
</section>



<section id="ocurso-mba" class="bg-azul">
		<div class="container-ese">
			<div class="col">
				<div class="separador-p"></div>
				<h2>O Curso</h2>
				<?php echo get_sub_field('conteudo_curso_1'); ?>
			</div>
			<div class="col">
				<?php echo get_sub_field('conteudo_curso_2'); ?>
			
			</div>
		</div>
</section>

<section id="informativo-mba">
	<div class="container-ese">
		<div class="informativo">
			<p>Turma Confirmada</p>
		</div>
	</div>
</section>

<section id="detalhes-mba">

	<div class="detalhe-curso-mba">
		<div class="container-ese">
			<h3>Detalhes do MBA:</h3>
			<div class="content-container-ese">
				<div class="col">
						<?php echo get_sub_field('icone_modalidade'); ?>
					<?php echo get_sub_field('conteudo_modalidade'); ?>
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
					<?php echo get_sub_field('icone_local'); ?>
					<?php echo get_sub_field('conteudo_local'); ?>
				
				</div>


			</div>
			<div class="content-container-ese">
				<div class="btn-increva-se-mba">
					<a href="#inscricao-mba">Inscreva-se</a>
				</div>
			</div>
		</div>
	</div>

	
</section>




<section id="inscricao-mba" style="background: url('<?php echo get_sub_field('imagem_de_fundo'); ?>') center no-repeat;">
	<div class="container-full-ese">
		<div class="container-ese">
			<div class="separador-p" style="margin-bottom: 36px;"></div>
			<?php echo get_sub_field('titulo_inscreva-se'); ?>
	
			<div class="col-vestibular-center">
				<div class="box-form" style="text-align: left;">
					<?php echo get_sub_field('formulario_vestibular'); ?>
				</div>
			</div>
		</div>
	</div>
<div class="container-ese">
	<div class="col-vestibular">
		<div class="separador-p" style="margin-bottom: 36px;"></div>
			<?php echo get_sub_field('titulo_descontos'); ?>
	</div>

	<div class="col-vestibular"  style="border:1px solid #cdcecf; padding: 28px 0 28px 28px; margin-top: 30px;">
		<ul>
			<?php echo get_sub_field('info_descontos'); ?>
		</ul>
	</div>
			
</div>
</section>

<section id="vestibular-curso-mba">
	<div class="container-ese">
		<div class="col">
			<div style="padding-left: 1.5%; color: #000;" >
				<h3>Ficou com dúvidas sobre o curso? Mande uma mensagem pra gente.</h3>
			</div>
			<div class="form-vestibular-curso-mba">
				<?php echo do_shortcode('[contact-form-7 id="315" title="Dúvidas sobre o curso"]'); ?>
			</div>
		</div>
	</div>
</section>

<?php } ?>

<?php get_footer(); ?>