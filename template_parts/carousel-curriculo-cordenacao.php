<div class="owl-carousel">
<?php $wp_query = new WP_Query();

    query_posts( array( 'post_type' => 'post', 'showposts' => 8, 'paged'=>$paged, 'category_name'=>'cordenacao'));


                if(have_posts()):
		             while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
<div class="box-curriculo-slider ">

		<div class="item">
<div class="col-box-curriculo-slider left">
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
	</div>
			<div class="col-box-curriculo-slider-right display-flex column">
		<!-- TITULO DO POST -->
		<div class="title-carousel-curriculo-slider">
			<h3>
				<?php the_title(); ?>
			</h3>
		</div>

		<!-- CONTEUDO DO POST -->
		<div class="box-conteudo-curriculo">
			<div class="content-curriculo"><p>Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
			Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
		Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
	Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor </p></div>

		</div>
		<div class="box-conteudo-curriculo">
			<div class="content-curriculo"><p>Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
			Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
		Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
	Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor </p></div>

		</div>
		<div class="box-conteudo-curriculo">
			<div class="content-curriculo"><p>Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
			Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
		Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor 
	Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor Lorem ipsum sum dollor </p></div>

		</div>
</div>

</div>
</div>
<?php   

endwhile; 
endif;

?>
</div>



       <script>
        
          </script>