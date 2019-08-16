<div class="box-carousel-post">

<?php 
	if(get_post_format() == 'video'): 
	
	$content = apply_filters('the_content', get_the_content());
	$video = get_media_embedded_in_content($content, array('iframe', 'embed', 'object', 'video'));

		if($video): ?>
		<div class="post_thumb">
			<?php echo $video[0]; ?>
		</div>
	<?php endif;	?>

	<?php elseif(get_post_format() == 'audio'): 

	$content = apply_filters('the_content', get_the_content());
	$audio = get_media_embedded_in_content($content,array('iframe', 'audio'));

	if($audio): ?>
		<div class="post_thumb">
			<?php echo $audio[0]; ?>
		</div>
	<?php endif;	
	 elseif(has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>">

							<?php the_post_thumbnail('full', array('class' => 'post_thumb'));?>

								

						</a>

					<?php endif; ?>


						<!-- TITULO DO POST -->
						<div class="title-carousel-post">
					<h2>

						<a href="<?php the_permalink(); ?>">

							<?php the_title(); ?>

						</a>

					</h2>
				</div>



					<!-- AUTHOR, DATE , CATEGORY -->
					<div class="info-post">
					<p>

						<?php get_the_date(); ?> | 

						<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> |

						<?php the_category(', '); ?>

					</p>
				</div>

									<!-- CONTEUDO DO POST -->
					<div class="conteudo-post">
					<p>

						<?php the_excerpt(); ?>

					</p>
					</div>



					<!-- COMENTARIOS -->
					<div class="comment-post">
					<P>

						<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' ); ?>  | 

						<a href="<?php the_permalink(); ?>"> Saiba Mais</a>

					</P>
				</div>

</div>





