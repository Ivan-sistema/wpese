<?php wp_footer(); ?>
<!-- <script>
  AOS.init();
</script>	
 -->
<section id="footer">
	<div class="container-full-ese">
		<div class="container-ese display-flex" style="height: 63px; align-items: center;">
			<div class="col-footer-logotipo">
				<a href="<?php echo bloginfo('url'); ?>"><img src="http://helptask.com.br/job/ese/wp-content/uploads/2019/01/logotipo-rodape.png"></a>
			</div>
			<div class="col-footer-menu1">
				
				<div class="menu-footer1">

						<nav>

						
							<div class="menu-footer1">

								<?php wp_nav_menu(array('container_class' => '', 'theme_location' => 'secondary')); ?>

							</div>

						</nav>

					</div>

			</div>
		</div>
		<div class="container-ese">
			<div class="col-footer-menu2">
							<div class="col-footer-menu2">
				
				<div class="menu-footer2">

						<nav>


							<div class="menu-footer2">

								<?php wp_nav_menu(array('container_class' => '', 'theme_location' => 'footer-2')); ?>

							</div>

						</nav>

					</div>

			</div>
			</div>
			<div class="menu-footer2-contato">
				<h4>Entre em contato</h4>
				<span>atendimento@ese.edu.br</span><br/>
				<span>Tel: (11) 3224-1250</span><br/>
				<span>Whatsapp: (11) 98282-1942</span>

			</div>
		</div>
		<div class="container-ese">
			<div class="col-footer-redes">
				
				<?php if(get_theme_mod('ese_instagram')): ?>

				<a href="<?php echo get_theme_mod('ese_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>

			<?php endif; ?>



			<?php if(get_theme_mod('ese_youtube')): ?>

				<a href="<?php echo get_theme_mod('ese_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_facebook')): ?>

				<a href="<?php echo get_theme_mod('ese_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_twitter')): ?>

				<a href="<?php echo get_theme_mod('ese_twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>

				

			<?php endif; ?>

			<?php if(get_theme_mod('ese_linkedin')): ?>

				<a href="<?php echo get_theme_mod('ese_linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>

				

			<?php endif; ?>

			</div>
			<div class="col-copy"><p>Alameda Nothmann, 598 - Campos Elíseos, São Paulo/ SP - Brasil | Tel: (11) 3224-1250 Whatsapp: (11) 98282-1942</p></div>
		</div>
	</div>
</section>