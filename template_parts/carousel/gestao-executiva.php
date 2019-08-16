<div class="owl-carousel owl-carousel-gestao-executiva">



<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'gestao_executiva'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>

		<div class="item">
		<div class="carousel-box-left">

<?php 
	
if(has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail', array('class' => 'post_thumb'));?>
		</a>

		<?php endif; ?>
		</div>

<div class="carousel-box-right">
		<!-- TITULO DO POST -->
		<div class="carousel-box-title">
			<h3>
				<?php the_title(); ?>
			</h3>
			<p>
				<strong><?php echo the_field('subtitulo'); ?></strong></p>
		</div>

		<!-- CONTEUDO DO POST -->
		<div class="carousel-box-content">
				
				<?php echo the_field('curriculo_do_gestor'); ?>

		</div>
		<div class="carousel-box-btn">
			<a href="<?php echo the_field('link_curriculo'); ?>" target="_blank">Ver Lates</a>
		</div>
	
	
	
</div>


</div>
</div>

	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	

</div>
