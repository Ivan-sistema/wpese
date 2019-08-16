<div class=" owl-carousel owl-carousel-home">



<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'ese_na_midia'
));

if( $posts ): 

	foreach( $posts as $post ): 
		setup_postdata( $post );
?>



		<div class="box-carousel-post">
			<div class="item">

				<?php 

					if(get_post_format() == 'video'): 
					$content = apply_filters('the_content', get_the_content());
					$video = get_media_embedded_in_content($content, array('iframe', 'embed', 'object', 'video'));
		
					if($video):
				?>

					<div class="post_thumb">
						<?php echo $video[0]; ?>
					</div>	

					<?php 
					endif;
					elseif(get_post_format() == 'audio'): 

	$content = apply_filters('the_content', get_the_content());

	$audio = get_media_embedded_in_content($content,array('iframe', 'audio'));



	if($audio): ?>

		<div class="post_thumb">

			<?php echo $audio[0]; ?>

		</div>

	<?php endif;	

	 elseif(has_post_thumbnail()): ?>

		<a href="<?php the_permalink(); ?>">

			<?php the_post_thumbnail('thumbnail', array('class' => 'post_thumb'));?>

		</a>



		<?php endif; ?>

			

		<!-- TITULO DO POST -->

		<div class="title-carousel-post">

			<h2>

				<a href="<?php the_permalink(); ?>">

					<?php the_field('fonte_da_materia'); ?>

				</a>

			</h2>

		</div>



		<!-- CONTEUDO DO POST -->

		<div class="conteudo-post">



			<p><?php the_title(); ?></p>

			<div class="btn-leia-mais"><a href="<?php the_field('link_da_materia') ?>" rel="bookmark" title="<?php the_field('fonte_da_materia'); ?>" target="_blank">Leia Mais</a></div>



		</div>





</div>

</div>



	<?php endforeach; ?>



	

	<?php wp_reset_postdata(); ?>



<?php endif; ?>	



</div>









        </div>

  </div>