<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'aese'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
<img src="<?php the_field('nossa_historia'); ?>">
			<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	