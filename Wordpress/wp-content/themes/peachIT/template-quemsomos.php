<?php 
/**
 * Template Name: Modelo Página Quem Somos
 *
 **/
	get_header();
?>
	<?php if( have_rows('banner_paginas') ): ?>
		<div class="slider">
			<div class="swiper slider-geral">
				<div class="swiper-wrapper">
					<?php
						while( have_rows('banner_paginas') ) : the_row();

						$modelo_banner = get_sub_field('modelo_banner');
						$titulo_banner = get_sub_field('titulo_banner');
						$subtitulo_banner = get_sub_field('subtitulo_banner');
						$imagem_slider_desktop = get_sub_field('imagem_slider_desktop');
						$imagem_slider_mobile = get_sub_field('imagem_slider_mobile');
						$background = get_sub_field('background');

						?>
							<div class="swiper-slide">
								<div class="slider-general <?php echo $modelo_banner?>" style="background: url('<?php echo $background ?>') #172511 center no-repeat;">
									<div class="container">
										<?php if ($modelo_banner === 'slider-type-1') : ?>
											<div class="row row-slider">
												<div class="col-md-8 line-slider-text">
													<h1><?php echo $titulo_banner?></h1>
													<p><?php echo $subtitulo_banner?></p>
												</div>
												<div class="col-md-4 line-slider-image">
													<img src="<?php echo $imagem_slider_desktop; ?>" class="desktop" alt="Personagem 1">
													<img src="<?php echo $imagem_slider_mobile; ?>" class="mobile" alt="Personagem 1">
												</div>
											</div>
										<?php elseif ($modelo_banner === 'slider-type-2') : ?>
											<div class="row row-slider">
												<div class="col-md-4 line-slider-image">
													<img src="<?php echo $imagem_slider_desktop; ?>" class="desktop" alt="Personagem 2">
													<img src="<?php echo $imagem_slider_mobile; ?>" class="mobile" alt="Personagem 2">
												</div>
												<div class="col-md-8 line-slider-text">
													<h1><?php echo $titulo_banner?></h1>
													<p><?php echo $subtitulo_banner?></p>
												</div>
											</div>
										<?php elseif ($modelo_banner === 'slider-type-3') : ?>
											<div class="row row-slider">
												<div class="col-md-12 line-slider-text">
													<h1><?php echo $titulo_banner?></h1>
													<p><?php echo $subtitulo_banner?></p>
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
		</div>
	<?php endif; ?>


	<div class="section">
		<div class="section-we">
			<div class="container">
				<h1 class="title"><span>Quem</span> somos?</h1>
				
				<div class="box-border mt-50 mobile-mt-25 no-shadow">
					<div class="row">
						<div class="col-lg-12">
							<div class="box-border-text">
								<p>Na Peach IT, acreditamos que a inovação e a tecnologia podem transformar negócios e vidas. Contamos com uma equipe de profissionais altamente qualificados e experientes, dedicados a alcançar a excelência em tudo o que fazemos.</p>
								<p>Nosso foco é desenvolver soluções personalizadas, inovadoras e únicas que atendam às necessidades específicas de cada empresa e pessoa. Utilizamos uma abordagem centrada no cliente, ouvindo e atendendo suas expectativas com agilidade e eficiência.</p>
								<p>Comprometidos em oferecer um atendimento de qualidade, garantimos suporte constante e satisfação com nossos produtos e serviços. Oferecemos soluções de alta qualidade em sistemas e aplicativos inovadores, personalizados para atender as demandas de nossos clientes.</p></p>
								<p>Como Criadores de Soluções Tecnológicas, estamos na constante busca do aperfeiçoamento e da inovação, tornando assim os ambientes mais conectados e adequados à era da Indústria 4.0.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-we">
			<div class="container">
				<h1 class="second-title">Nosso valores</h1>

				<div class="valores desktop">
					<div class="row justify-content-md-between align-items-md-center">
						<div class="col-md-3">
							<div class="box-border-values box-border-full">
								<h2>Missão</h2>

								<p>A nossa missão é fornecer soluções de consultoria de TI inovadoras e de alta qualidade para ajudar os nossos clientes a alcançar seus objetivos de negócios.</p>
							</div>
							<div class="box-border-values box-border-full">
								<h2>Visão</h2>

								<p>A nossa visão é ser uma consultoria de TI líder, reconhecida pela excelência e pelo compromisso com a satisfação do cliente.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-border-values box-border-green">
								<h2>Excelência</h2>

								<p>Buscamos a excelência em tudo o que fazemos, desde a qualidade de nossos serviços até a satisfação do cliente.</p>
							</div>
							<div class="box-border-values box-border-green">
								<h2>Ética</h2>

								<p>Operamos com os mais altos padrões éticos e integridade, respeitando os clientes, funcionários e fornecedores.</p>
							</div>
							<div class="box-border-values box-border-green">
								<h2>Trabalho em equipe</h2>

								<p>Acreditamos que o trabalho em equipe é fundamental para o sucesso, e promovemos um ambiente colaborativo e inclusivo em todos os nossos projetos.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-border-values box-border-green">
								<h2>Inovação</h2>

								<p>Somos uma empresa inovadora, sempre procurando novas soluções e ideias para ajudar nossos clientes a alcançar seus objetivos.</p>
							</div>
							<div class="box-border-values box-border-green">
								<h2>Compromisso</h2>

								<p> Estamos comprometidos em fornecer serviços de alta qualidade e em fazer tudo o que estiver ao nosso alcance para atender às necessidades de nossos clientes.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="box-values mobile">
					<div class="swiper swiper-values">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="box-border-values box-border-full">
									<h2>Missão</h2>     
									<p>A nossa missão é fornecer soluções de consultoria de TI inovadoras e de alta qualidade para ajudar os nossos clientes a alcançar seus objetivos de negócios.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-full">
									<h2>Visão</h2>
				
									<p>A nossa visão é ser uma consultoria de TI líder, reconhecida pela excelência e pelo compromisso com a satisfação do cliente.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-green">
									<h2>Excelência</h2>
				
									<p>Buscamos a excelência em tudo o que fazemos, desde a qualidade de nossos serviços até a satisfação do cliente.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-green">
									<h2>Ética</h2>
				
									<p>Operamos com os mais altos padrões éticos e integridade, respeitando os clientes, funcionários e fornecedores.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-green">
									<h2>Trabalho em equipe</h2>
				
									<p>Acreditamos que o trabalho em equipe é fundamental para o sucesso, e promovemos um ambiente colaborativo e inclusivo em todos os nossos projetos.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-green">
									<h2>Inovação</h2>
				
									<p>Somos uma empresa inovadora, sempre procurando novas soluções e ideias para ajudar nossos clientes a alcançar seus objetivos.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-border-values box-border-green">
									<h2>Compromisso</h2>
				
									<p> Estamos comprometidos em fornecer serviços de alta qualidade e em fazer tudo o que estiver ao nosso alcance para atender às necessidades de nossos clientes.</p>
								</div>
							</div>
						</div>
					</div>
						
					<div class="swiper-pagination swiper-pagination-slider-values"></div>
				</div>
			</div>
		</div>

		<?php
			$args = array(
				'post_type' => 'historia',
				'status' => 'publish',
				'showposts' => -1,
				'order' => 'ASC'
			);

			$more = new WP_Query( $args );
			if (!empty($more->posts)): ?>
				<div class="page-timeline">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
									<h1>Nossa história</h1>
								</div>
								<ul class="timeline">
									<?php foreach ( $more->posts as $post ): ?>
										<li class="timeline-item">
											<div class="timeline-badge">
												<div class="timeline-badge-internal"></div>
											</div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h4 class="timeline-title"><?php echo get_the_title($post->ID); ?></h4>
													<?php if(has_post_thumbnail()){?>
														<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>">
													<?php }?>
												</div>
												<div class="timeline-body">
													<?php echo apply_filters('the_content', $post->post_content); ?>
												</div>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
			wp_reset_query();
		?>
		
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
														<div class="col-12 col-md-1">
															<div class="image">
																<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>">
															</div>
														</div>
														<div class="col-12 col-md-11">
															<h1><?php echo get_the_title($post->ID); ?></h1>
															<?php echo apply_filters('the_content', $post->post_content); ?>
														</div>
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