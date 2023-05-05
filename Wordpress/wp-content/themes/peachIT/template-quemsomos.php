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
		<div class="section-team pt-md-0">
			<!-- DADOS DE POST TIPO DEPOIMENTO CATEGORIA DE COLABORADOR -->
			<?php
				$args = array(
					'post_type' => 'depoimento',
					'status' => 'publish',
					'showposts' => -1,
					'category_name'=> 'colaborador'
				);

				$more = new WP_Query( $args );

				if (!empty($more->posts)): ?>
					<div class="container">
						<h1>Como é trabalhar na <span class="primary-color">Peach</span> <span class="terc-color">IT</span>?</h1>

						<div class="slider">
							<div class="swiper slider-team">
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

							<div class="swiper-pagination swiper-pagination-slider-team"></div>
						</div>
					</div>
				<?php endif;
				wp_reset_query();
			?>
			
			<div class="section-text">
				<div class="container">
					<div class="box-border mt-50">
						<div class="row">
							<div class="col-lg-12">
								<div class="box-border-text">
									<h1>Você gosta de novos desafios?</h1>

									<p>Então é com você que nós queremos contar!</p>
									<p>Trabalhamos em parceria com empresas dos mais diversos ramos! Buscamos manter nosso ambiente descontraído, porém, com foco. Nossa parceria é com as empresas, mas principalmente com nossos colaboradores também. </p>
									<p>Formamos uma grande família e você poderá fazer parte dela junto conosco!</p>
								</div>
							</div>
						</div>
					</div>

					<div class="box-border mt-50">
						<div class="row">
							<div class="col-lg-12">
								<div class="box-border-text">
									<h1>Compromisso e Excelência.</h1>

									<p>Nosso compromisso é com o seu desenvolvimento e com a entrega de valor aos nossos clientes.</p>
									<p>Acreditamos que, ao oferecermos um ambiente propício para o seu crescimento pessoal e profissional, podemos alcançar resultados ainda mais expressivos e positivos. Sendo assim, constantemente promovemos um ambiente colaborativo, inovador e desafiador, que estimule o seu potencial e permita que você explore novas possibilidades e ideias.</p>
									<p>Aqui no nosso time, valorizamos características que consideramos fundamentais para o sucesso do nosso trabalho. Uma dessas características é a paixão pela construção de softwares. Acreditamos que a paixão é o que move o nosso time a buscar soluções inovadoras e a superar desafios. Outra característica que valorizamos é o compromisso com a qualidade do código e o uso das melhores práticas de programação. Sabemos que essa postura resulta em softwares mais eficientes e seguros.</p>											
									<p>Por fim, nos sentimos motivados por saber do grande impacto que podemos promover, juntos, na entrega de excelentes projetos. Junte-se a nós e faça parte de um time apaixonado por construir grandes soluções!</p>
								</div>
							</div>
						</div>
					</div>

					<div class="box-border mt-50">
						<div class="row mobile-invert">
							<div class="col-lg-4">
								<div class="box-border-image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-tecnologias.png" alt="Tecnologias utilizadas pela Peach IT">
								</div>
							</div>
							<div class="col-lg-8">
								<div class="box-border-text text-md-end">
									<h1>Tecnologia e Metodologia.</h1>

									<p>Nosso time é formado por profissionais especializados em diversas tecnologias e metodologias, o que nos permite trabalhar com flexibilidade e adaptabilidade para atender às necessidades específicas de cada projeto.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="box-border mt-50">
						<div class="row">
							<div class="col-lg-12">
								<div class="box-border-text">
									<h1>Focamos no seu desenvolvimento</h1>

									<p>Na nossa empresa, o desenvolvimento dos nossos colaboradores é uma prioridade. Por isso, auxiliamos cada indivíduo a traçar e alcançar suas metas pessoais e profissionais.</p>
									<p>Acreditamos que o acompanhamento individual e os planos de desenvolvimento são ferramentas essenciais para o crescimento contínuo e aprimoramento de nossos colaboradores, mantendo-os sempre atualizados e preparados para os desafios do mercado.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	get_footer('trabalhe');
?>