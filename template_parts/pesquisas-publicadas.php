<?php 

$posts = get_posts(array(
  'posts_per_page'  => -1,
  'post_type'     => 'pesquisas'
));

if( $posts ): ?>

  <?php foreach( $posts as $post ): 
    
    setup_postdata( $post );
    
    ?>

<div class="acordeon">
     <div class="title-acordeon"><h2> <?php the_field('titulo_da_pesquisa'); ?></h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-inativa.png"></div>
     <div class="conteudo-acordeon">
     <p>  <?php the_field('resumo_da_pesquisa'); ?></p>
      <div class="btn-acordeon"><a href="<?php the_field('link_da_pesquisa'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-leia-pesquisa.png"></a></div>
    </div>
	</div>

  <?php endforeach; ?>

  
  <?php wp_reset_postdata(); ?>

<?php endif; ?> 


