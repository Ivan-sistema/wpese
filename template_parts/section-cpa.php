<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'aese'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>

<div class="container-ese">
		<div class="col-cpa-left">
			<img class="img-cpa" src="<?php the_field('imagem_cpa'); ?>">
		</div>
		<div class="col-cpa-right">
			<h2><?php the_field('titulo_cpa'); ?></h2>
			<h3><strong><?php the_field('sub_titulo_cpa'); ?></strong></h3>

			<?php the_field('conteudo_cpa'); ?>

			<h3><strong>Data de Avaliação</strong> - <span><?php the_field('data_da_avaliacao'); ?></span></h3>

			<div class="btn-relatorios display-flex column">
				<a href="<?php the_field('link_parcial'); ?>" target="_blank"><img class="btn-resultado" src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-resultado-parcial.png"></a>
				<a href="<?php the_field('link_total'); ?>" target="_blank"><img class="btn-resultado" src="<?php echo get_template_directory_uri(); ?>/assets/images/resultado-total.png"></a>
				<div class="btn-rel"><a href="<?php the_field('link_prelatorio'); ?>" target="_blank">Relatório</a></div>
			</div>

		</div>
	</div>
		
	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	