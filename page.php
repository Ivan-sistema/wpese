<?php get_header(); ?>


<section id="page"> 
	<?php if( is_page( array( '/agradecimento' ) )) : ?>
		<div class="container-full-ese" style="background:url(<?php  echo get_template_directory_uri(); ?>/assets/images/bg/inscricao-concluida.png') center center no-repeat;">
    <?php else: ?>
		<div class="container-full-ese" style="background:url(<?php  echo get_template_directory_uri(); ?>/assets/images/bg/inscricao-concluida.png') center center no-repeat;">
    <?php endif; ?>
		<div class="container-ese display-flex ">
			<div class="col">
				<h2><?php echo the_title(); ?></h2>
				    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      

	  <?php the_content(); ?>

      

	  <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

      <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

      <?php endwhile; ?>
		</div>

		</div></div>
</section>


<?php get_footer(); ?>



