<div class="title-carousel">
	<h3>Acontece no Ecossistema Empreendedor</h3>
</div>
<div class="owl-carousel owl-carousel-ecossistema">
<?php 

$posts = get_posts(array(
  'posts_per_page'  => -1,
  'post_type'     => 'blog_ecossistema'
));

if( $posts ): ?>

  <?php foreach( $posts as $post ): 
    
    setup_postdata( $post );
    
    ?>


<div class="carousel-post-ecossistema ">

		<div class="item">


			
		<!-- TITULO DO POST -->
		<div class="title-carousel-post">
			
		</div>

		<!-- CONTEUDO DO POST -->
		<div class="conteudo-post">
      <div class="conteudo-data-post">
<span style="font-size: 33px;"><?php the_time('j'); ?></span>
    <span style="font-weight: 500;">  <?php the_time('M'); ?></span>
      </div>
      <div class="conteudo-content-post">
        <h2>
        <a href="<?php the_field('link_da_materia'); ?>" target="_blank">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php the_field('sub_titulo') ?></div>
			
		</div>


</div>
</div>

  <?php endforeach; ?>

  
  <?php wp_reset_postdata(); ?>

<?php endif; ?> 

</div>



