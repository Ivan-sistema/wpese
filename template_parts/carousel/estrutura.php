<div class="owl-carousel owl-carousel-estrutura" style="margin:5% 0;">


<?php 

$posts = get_posts(array(
  'posts_per_page'  => -1,
  'post_type'     => 'ese_estrutura'
));

if( $posts ): ?>

  <?php foreach( $posts as $post ): 
    
    setup_postdata( $post );
    
    ?>

<div class="carousel-post-estrutura ">

		<div class="item">
      <div class="post_thumb">
        <img src="<?php the_field('imagem_estrutura'); ?>">
      </div>
	

</div>
</div>
  <?php endforeach; ?>

  
  <?php wp_reset_postdata(); ?>

<?php endif; ?> 


</div>
