<?php $wp_query = new WP_Query();

    query_posts( array( 'post_type' => 'post', 'showposts' => 8, 'paged'=>$paged, 'category_name'=>'destaque'));

                if(have_posts()):
		             while ($wp_query -> have_posts()) : $wp_query -> the_post();

                         if(has_post_thumbnail()): ?>
                            <div class="col-4">
                                <a href="<?php the_permalink(); ?>">
                                  <?php the_post_thumbnail('full', array('class' => 'post_miniatura'));?>
                                
                                </a>
                            </div>
                         <?php endif; ?>



 <?php   



endwhile; 

    endif;



  ?>