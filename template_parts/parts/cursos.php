<!-- TRAZ OS CURSOS DE GRADUAÇÃO CADASTRADOS -->
	<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'graduacoes'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
<?php while(have_rows('graduacao_home')){ 
				the_row(); ?>
	<div class="cursos-home" style="background: url('<?php echo get_sub_field('banner_de_fundo_home'); ?>') center center no-repeat;">
			<div class="container-ese">
			<h3><strong>Graduação:</strong> <?php echo get_sub_field('titulo_graduacao_home'); ?></h3>
			

			<div class="btn-ese-default"><a href="<?php the_permalink(); ?>">saiba mais</a></div>
		</div>
		</div>

	<?php } ?>
	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>


<!-- TRAZ OS CURSOS DE MBAs CADASTRADOS -->
<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'mba'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
<?php while(have_rows('mba_home')){ 
				the_row(); ?>
	<div class="cursos-home" style="background: url('<?php echo get_sub_field('banner_fundo_mba'); ?>') center center no-repeat;">
			<div class="container-ese">
			<h3><strong>MBA:</strong> <?php echo get_sub_field('titulo_mba_home'); ?></h3>
			

			<div class="btn-ese-default"><a href="<?php the_permalink(); ?>">saiba mais</a></div>
		</div>
		</div>

	<?php } ?>
	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	