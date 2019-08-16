<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'aese'
));

if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
					<div class="display-flex between">
						<div class="col">
							<div class="separador-azul"></div>

							<?php the_field('missao'); ?>
						
						</div>
						<div class="col">
							<div class="separador-azul"></div>
							<?php the_field('visao'); ?>
							
						</div>
						
					</div>
					<div style="margin: 2% 0;">
						<div class="col-100">
							<div class="separador-azul"></div>
							<h3>Principios da ESE</h3>
						</div>
						<div class="col-mvp column display-flex">
						<div class="content-mvp">
							<?php the_field('colaboracao'); ?>
							
						</div>
						<div class="content-mvp">
							

							<?php the_field('ousadia'); ?>
							
						</div>

					</div>

					<div class="col-mvp column display-flex">
						<div class="content-mvp">
							<?php the_field('entusiasmo'); ?>
							
						</div>
						
						<div class="content-mvp">
							<?php the_field('respeito'); ?>
							
						</div>
					</div>
						<div class="content-mvp center">
							<?php the_field('criatividade'); ?>
						</div>
					</div>


								<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	