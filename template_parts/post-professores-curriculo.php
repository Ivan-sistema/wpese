lçkjhklhkjhkjlhlkjh
<div class="owl-carousel">
<?php $wp_query = new WP_Query();

    query_posts( array( 'post_type' => 'post', 'showposts' => 8, 'paged'=>$paged, 'category_name'=>'professores-curriculo'));


                if(have_posts()):
		             while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
<div class="box-curriculo-slider ">

		<div class="item">

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

		<!-- CONTEUDO DO POST -->
		<div class="conteudo-post">

			<?php the_excerpt() ?>
			<div class="btn-leia-mais"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Leia Mais</a></div>

		</div>


</div>
</div>
<?php   

endwhile; 
endif;

?>
</div>



    
      
          <script src="<?php echo get_template_directory_uri();?>/assets/plugins/owl/assets/vendors/jquery.mousewheel.min.js"></script>
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                loop: true,
                nav: true,
                margin: 7,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 4
                  },
                  1200: {
                    items: 4
                  }
                }
              });
              owl.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owl.trigger('next.owl');
                } else {
                  owl.trigger('prev.owl');
                }
                e.preventDefault();
              });
            })
          </script>
        </div>
  </div>