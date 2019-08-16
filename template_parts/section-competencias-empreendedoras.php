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
	<div class="title-comp">
<h2>Competências Empreendedoras</h2>
<?php the_field('subtitulo'); ?>
</div>
</div>


<div class="container-ese" style="margin-top: 5%; margin-bottom: 5%;overflow: hidden;">
<div class="conteudo-comp-left">
	<img src="<?php the_field('imagem_competencias'); ?>">
</div>
<div class="conteudo-comp-right">
	<div class="separador-treecolor"></div>
	<?php the_field('blocos_de_formacao'); ?>
</div>
</div>	

								<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	