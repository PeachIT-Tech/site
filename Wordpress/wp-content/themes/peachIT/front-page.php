<?php 
/**
 * Template Name: Home / Front Page / Início
 *
 **/
	get_header();
?>
	<?php if( have_rows('slider_home') ): ?>
		<div class="slider">
			<div class="swiper slider-home">
				<div class="swiper-wrapper">
					<?php
						while( have_rows('slider_home') ) : the_row();

						$modelo_slider = get_sub_field('modelo_slider');
						$titulo_slider = get_sub_field('titulo_slider');
						$subtitulo_slider = get_sub_field('subtitulo_slider');
						$imagem_slider_desktop = get_sub_field('imagem_slider_desktop');
						$imagem_slider_mobile = get_sub_field('imagem_slider_mobile');
						$background = get_sub_field('background');

						?>
							<div class="swiper-slide">
								<div class="slider-general <?php echo $modelo_slider?>" style="background: url('<?php echo $background ?>') #172511 center no-repeat;">
									<div class="container">
										<?php if ($modelo_slider === 'slider-type-1') : ?>
											<div class="row row-slider">
												<div class="col-md-8 line-slider-text">
													<h1><?php echo $titulo_slider?></h1>
													<p><?php echo $subtitulo_slider?></p>
												</div>
												<div class="col-md-4 line-slider-image">
													<img src="<?php echo $imagem_slider_desktop; ?>" class="desktop" alt="Personagem 1">
													<img src="<?php echo $imagem_slider_mobile; ?>" class="mobile" alt="Personagem 1">
												</div>
											</div>
										<?php elseif ($modelo_slider === 'slider-type-2') : ?>
											<div class="row row-slider">
												<div class="col-md-4 line-slider-image">
													<img src="<?php echo $imagem_slider_desktop; ?>" class="desktop" alt="Personagem 2">
													<img src="<?php echo $imagem_slider_mobile; ?>" class="mobile" alt="Personagem 2">
												</div>
												<div class="col-md-8 line-slider-text">
													<h1><?php echo $titulo_slider?></h1>
													<p><?php echo $subtitulo_slider?></p>
												</div>
											</div>
										<?php elseif ($modelo_slider === 'slider-type-3') : ?>
											<div class="row row-slider">
												<div class="col-md-12 line-slider-text">
													<h1><?php echo $titulo_slider?></h1>
													<p><?php echo $subtitulo_slider?></p>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php 
						endwhile; 
					?>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination-slider-home"></div>
		</div>
	<?php endif; ?>

	<div class="section">
		
		<?php if( have_rows('o_que_fazemos') ): ?>
			<div class="section-doing">
				<div class="container">
					<h1 class="title"><span>O que</span> fazemos?</h1>
					<p>Usamos a tecnologia de maneira eficiente para simplificar, potencializar e acelerar os resultados.</p>

					<div class="box-what-doing">
						<div class="swiper swiper-doing">
							<div class="swiper-wrapper">
								<?php
									while( have_rows('o_que_fazemos') ) : the_row();

									$titulo = get_sub_field('titulo');
									$subtitulo = get_sub_field('subtitulo');
									$link_saiba_mais = get_sub_field('link_saiba_mais');

									?>
										<div class="swiper-slide">
											<div class="box-doing">
												<h5><?php echo $titulo ?></h5>

												<p><?php echo $subtitulo ?></p>

												<a href="<?php echo $link_saiba_mais ?>" class="button button-more">Saiba mais</a>
											</div>
										</div>
									<?php 
									endwhile; 
								?>
							</div>
						</div>

						<div class="swiper-pagination swiper-pagination-slider-doing mobile"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
			
		<div class="section-we">
			<div class="container">
				<h1 class="title"><span>Quem</span> somos?</h1>
				
				<div class="box-border mt-50">
					<div class="row mobile-invert">
						<div class="col-lg-4">
							<div class="box-border-image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/equipe.png" alt="Equipe Peach IT">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="box-border-text text-align">
								<h1>Somos uma empresa que preza pela entrega de soluções ágeis e inteligentes!</h1>

								<p>Nossa missão é utilizar a tecnologia como uma ferramenta para potencializar os negócios de nossos clientes. Por isso estamos sempre empenhados em ajudar nossos clientes a alcançarem o sucesso que desejam.</p>
								
								<a href="<?php echo get_site_url() ?>/quem-somos" class="button button-more primary">Saiba mais</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- DADOS DOS PROJETOS -->
		<?php
			$args = array(
				'post_type' => 'projeto',
				'status' => 'publish',
				'showposts' => -1
			);

			$more = new WP_Query( $args );

			if (!empty($more->posts)): ?>
				<div class="section-projects">
					<div class="projects">
						<!-- Swiper -->
						<div class="projects-bg">
							<div class="container">
								<h1 class="title"><span>Projetos</span> desenvolvidos com:</h1>
								<p>Acreditamos nas empresas que entendem que a combinação de pessoas e tecnologias é fundamental para promover a transformação e o sucesso.</p>

								<div class="swiper swiper-projects">
									<div class="swiper-wrapper">
										<?php foreach ( $more->posts as $post ): ?>
											<div class="swiper-slide">
												<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>">
											</div>
										<?php endforeach; ?>
									</div>
									<div class="swiper-button-next swiper-button-next-projects"></div>
									<div class="swiper-button-prev swiper-button-prev-projects"></div>
								</div>
							</div>
						</div>

						<div class="swiper-pagination swiper-pagination-slider-projects"></div>
					</div>
				</div>
			<?php endif;
			wp_reset_query();
		?>
		
		<!-- DADOS DE POST TIPO DEPOIMENTO CATEGORIA DE CLIENTES -->
		<?php
			$args = array(
				'post_type' => 'depoimento',
				'status' => 'publish',
				'showposts' => -1,
				'category_name'=> 'cliente'
			);

			$more = new WP_Query( $args );

			if (!empty($more->posts)): ?>
				<div class="section-clients">
					<div class="container">
						<h1>O que nossos clientes estão dizendo!</h1>

						<div class="slider">
							<div class="swiper slider-clients">
								<div class="swiper-wrapper">
									<?php foreach ( $more->posts as $post ): ?>
										<div class="swiper-slide">
											<div class="client-depoiment">
												<div class="row linha">
													<div class="row linha-1">
														<div class="col-3 col-md-1">
															<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>">
														</div>
														<div class="col-9 col-md-11 d-flex align-items-center">
															<p><?php echo get_the_title($post->ID); ?></p>
														</div>
													</div>
													<div class="col-md-11 offset-md-1 linha-2">
														<p><?php echo apply_filters('the_content', $post->post_content); ?></p>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>

							<div class="swiper-pagination swiper-pagination-slider-clients"></div>
						</div>
					</div>
				</div>
			<?php endif;
			wp_reset_query();
		?>
	</div>
<?php
	get_footer();
?>