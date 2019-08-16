<div class="title-carousel">

<h3>Acontece na ESE</h3>
</div>
<div class="owl-carousel owl-carousel-acontece">



<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'blog_acontece'
));

if( $posts ): 
	foreach( $posts as $post ): 
		setup_postdata( $post );
		
?>


<div class="carousel-post-acontece ">
	<div class="item">
		<?php if(has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail', array('class' => 'post_thumb'));?>
		</a>

		<?php endif; ?>
		

		<div class="date-post column">
			<span><?php the_time('j'); ?><br/>
			<?php the_time('M'); ?></span>
		</div>	

		<!-- TITULO DO POST -->
		<div class="title-carousel-post">
			<div class="col">
				<i class="fas fa-star"></i>
			</div>
		<div class="col">
			<h2>
				<a href="<?php the_permalink(); ?>">
					 <?php the_title(); ?>
				</a>
			</h2>
		</div>
		</div>

		<!-- CONTEUDO DO POST -->
		<div class="conteudo-post">

			<?php the_field('resumo_post'); ?>

		</div>


</div>
</div>

	<?php endforeach; ?>

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>	

</div>


 
       
        </div>
  </div>

    

