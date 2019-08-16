<div class="owl-carousel owl-carousel-graduacao">



<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'professores'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>

<div class="curriculo-slider">

		<div class="item">
			<div class="curriculo-slider-left">
				<?php 
					if(has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'post_thumb'));?>
						</a>

				<?php endif; ?>
				</div>
			
			<div class="curriculo-slider-right">
				<!-- TITULO DO POST -->
				<div class="title-curriculo-slider">
					<h3>
						<?php the_field('nome_do_professor'); ?>
					</h3>
				</div>

				<!-- CONTEUDO DO POST -->
				<div class="conteudo-curriculo-slider">
					<div class="icone"><i class="fas fa-graduation-cap"></i></div>
					<div class="content-curriculo">
						
						<?php the_field('formacao_academica'); ?>
					</div>

				</div>
				<div class="conteudo-curriculo-slider">
					<div class="icone"><i class="fas fa-hotel"></i></div>
					<div class="content-curriculo">
					<?php the_field('experiencia_profissional'); ?>
						
					</div>

				</div>

			
				<div class="conteudo-curriculo-slider">
					<div class="icone"><i class="fas fa-quote-left"></i></div>
					<div class="content-curriculo">
						
					<?php echo the_field('citacoes_professores'); ?>
					</div>

				</div>
		</div>

	</div>
</div>
<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	

</div>

