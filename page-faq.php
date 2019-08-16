<?php /* template name: Faq */ ?>
<?php get_header(); ?>


<section id="faq">
	<div class="container-full-ese">
		<div class="container-ese">
			<h3 style="color: #4b4f58;">Perguntas Frequentes</h3>
<div class="container-acordeon">
	<?php 

$posts = get_posts(array(
  'posts_per_page'  => -1,
  'post_type'     => 'faq'
));

if( $posts ): ?>

  <?php foreach( $posts as $post ): 
    
    setup_postdata( $post );
    
    ?>

<div class="acordeon"">
     <div class="title-acordeon"><h2 style="color: #4b4f58; font-weight: 600;font-style: normal;"> <?php the_field('titulo'); ?></h2><div class="imgseta"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-inativa.png"></div></div>
     <div class="conteudo-acordeon">
     <p>  <?php the_field('conteudo_faq'); ?></p>
      
    </div>
	</div>

  <?php endforeach; ?>

  
  <?php wp_reset_postdata(); ?>

<?php endif; ?> 
</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
