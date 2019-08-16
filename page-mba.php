<?php /* template name: MBA */ ?>
<?php get_header(); ?>

<section id="slider">

	<div class="container-full-ese">

		<?php 
		if( is_page( array( 'mba/empreendedorismo-de-alto-impacto/' ) )) {
    	 echo do_shortcode('[rev_slider alias="mba-ai"]');
	} else {
     echo do_shortcode('[rev_slider alias="mba-pn"]');
} ?>
		
	


	</div>

</section>

<section id="breadcrumbs" class="display-flex centralizado-height">

	<div class="container-full-ese">

		<div class="container-ese display-flex centralizado-height">

			<i class="fas fa-home"></i> Home / <?php breadcrumb_simple(); ?> 

		</div>		

	</div>

</section>

<section id="ocurso" class="mba bg-azul">
	<div class="container-full-ese">
		<div class="container-ese display-flex between">
			<div class="col">
				<div class="separador-p"></div>
			<h2>O Curso</h2>
			<p>Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
			Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
		Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
	Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor </p>
		</div>
			<div class="col">
			<h3>Você vai se preparar para:</h3>
			<p>Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
			Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
		Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
	Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor </p>
		</div>
		</div>
	</div>
	
</section>


<div class="container-full-ese bg-cinza">
	<div class="container-ese">
		<div class="informativo-mba bg-azul">
			<p>Turma Confirmada</p>
		</div>
	</div>
</div>

<div class="container-full-ese detalhe-curso-mba">
		<div class="container-ese">
			<h3>Detalhes do MBA:</h3>
			<div class="content-container-ese">
				<div class="col"><i class="fas fa-map-marked-alt"></i>
					<p><strong>Modalidade:</strong><br/>
					presencial</p>
				</div>
				<div class="col">
					<i class="fas fa-credit-card"></i>
					<p><strong>Investimento:</strong><br />
				R$ 29.000,00<br/>
			ou 24x de R$1.316,00</p>
				</div>

				<div class="col">
					<i class="fas fa-clock"></i>
					<p><strong>Carga Horária:</strong><br />
					600 horas/aula</p>
				</div>

				<div class="col">
					<i class="fas fa-calendar-alt"></i>
					<p><strong>Duração:</strong><br />
					18 semestres</p>
				</div>
				<div class="col">
					<i class="fas fa-map-marker-alt"></i>
					<p><strong>Local:</strong> Al. Nothmann, 598 -<br />
					Campo Elíseos, SP</p>
				</div>


			</div>
			<div class="content-container-ese">
				<div class="btn-increva-se-mba">
					<a href="#">inscreva-se</a>
				</div>
			</div>
		</div>
	</div>


<section id="vestibular-curso-mba" class="bg-cinza">
	<div class="container-full-ese ">
	<div class="container-ese display-flex between">
		<div class="col display-flex column">
			<div style="padding-left: 1.5%; color: #000;" >
			<h3>Ficou com dúvidas sobre o curso? Mande uma mensagem pra gente.</h3>
		</div>
			<div class="form-vestibular-curso-mba">
				<?php echo do_shortcode('[contact-form-7 id="75" title="Dúvidas sobre o curso"]'); ?>
			</div>
		</div>
	</div>
</div>
</section>

<section id="matriz-curso-mba" style="background: url('<?php  echo get_template_directory_uri(); ?>/assets/images/bg/banner-ai-matriz.png') center center no-repeat;">
	<div class="container-full-ese">
	<div class="container-ese">
		<div class="col">
		<div class="separador-p" style="margin-bottom: 42px;"></div>
			<h2>Matriz Curricular</h2>
	</div>
</div>
</div>
</section>




<section id="inscricao-mba">
	<div class="container-full-ese">
		<div class="container-ese">
			<div class="separador-p" style="margin-bottom: 36px;"></div>


	<h2>Inscreva-se no processo seletivo<br/>
			<span>MBA <?php echo the_title(); ?></span></h2>

			


			<div class="col-vestibular-center">

				<div class="box-form display-flex column" style="text-align: left;">
					

					<?php echo do_shortcode('[contact-form-7 id="121" title="inscricao-mba-ai"]'); ?>
				</div>
			</div>
		</div>
	</div>
<div class="container-ese">
			<div class="col-vestibular">
			<div class="separador-p" style="margin-bottom: 36px;"></div>
			<h3>Descontos e planos de pagamento</h3>
			</div>

			<div class="col-vestibular"  style="border:1px solid #cdcecf; padding: 28px 0 28px 28px; margin-top: 30px;">
				<ul><div class="separador-ul"></div>
					<li><span style="color: #127bdc;">10 de desconto</span> Para contratação que tenha como fonte pagadora: Empresa parceira da ESE (instituições que formalizam o interesse de comunicar e ofertar para os seus funcionários os cursos da ESE); Instituição integrante do Conselho Deliberativo do SEBRAE-SP;</li>
					<div class="separador-ul"></div>
					<li><span style="color: #127bdc;">15% de desconto</span> Para contratação que tenha como fonte pagadora: Empresa parceira da ESE (instituições que formalizam o interesse de comunicar e ofertar para os seus funcionários os cursos da ESE); Instituição integrante do Conselho Deliberativo do SEBRAE-SP;</li>
				</ul>
			
					
			</div>
			
		</div>
</section>

<?php get_footer(); ?>