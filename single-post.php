<?php get_header(); ?>

<section id="single-post">
	<div class="container-ese">
		<div class="single-post-ese">

		<?php 
			if(have_posts()): 
				while (have_posts()): 
					the_post(); 
		?>

			<article>

					<div class="date-single-post">
						 <small><?php the_date(' j F Y'); ?></small>
					</div>

					<!-- TITULO DO POST -->

					<h2>
						<?php the_title(); ?>
					</h2>



					<!-- IMAGEM DO POST -->

					<?php if(has_post_thumbnail()): ?>

						<?php the_post_thumbnail('large', array('class' => 'post_thumb-single'));?>

					<?php endif; ?>



					<!-- AUTHOR, DATE , CATEGORY -->

					<!-- CONTEUDO DO POST -->

					<div class="content-post-single">

					<p>

						<?php the_content(); ?>

					</p>
</div>
					<!-- COMENTARIOS -->




					


				</article>

			<?php endwhile; ?>

		<?php endif;?>

		<div class="paginacao display-flex between">
            <div class="pagina_anterior"><?php previous_post_link('%link', '<i class="fas fa-arrow-left"></i> ANTERIOR', TRUE); ?></div>
            <div class="pagina_proximo"><?php next_post_link('%link','PROXIMO <i class="fas fa-arrow-right"></i>', TRUE); ?></div>
        </div>

			</div>


		

  

	
</div>
</section>

<section id="post-relacionados">
	<div class="container-full-ese">
		<div class="container-ese">
			
		</div>
	</div>
</section>



<?php get_footer(); ?>


