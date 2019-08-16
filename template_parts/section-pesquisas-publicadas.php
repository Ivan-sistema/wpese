<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'aese'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<div class="col-pesquisa-left">
			<?php the_field('conteudo_pesquisas_publicadas'); ?>	
		</div>
		<div class="col-pesquisa-right">
			
			<img class="img-pesq" src="<?php the_field('imagem_pesquisas_publicadas'); ?>">
		</div>


								<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	