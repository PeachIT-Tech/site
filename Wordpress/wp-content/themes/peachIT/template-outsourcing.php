<?php 
/**
 * Template Name: Modelo Página Outsourcing
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
		<div class="section-general">
			<div class="white-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-arrow.png" alt="left-arrow" class="image-absolute">

				<div class="container">
					<div class="white-box-marca-dagua">
						<h1>A Peach IT tem a opção de trabalho ideal para cada empresa.</h1>

						<p>Oferecemos alocação de profissionais altamente qualificados em diversas áreas de conhecimento técnico.</p>
						
						<div class="swiper swiper-options-2">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="option">
										<h5>Outsourcing Gerenciado</h1>

										<p>Além de alocarmos profissionais qualificados, formamos e gerenciamos equipes com nossa expertise em outsourcing. Implementamos processos que auxiliam na formação de uma área sólida para desenvolvimento de softwares e aplicativos.</p>
										<p>Ideal para empresas que precisam formar uma equipe autogerenciável.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="option">
										<h5>Body Shop</h1>

										<p>Possuímos uma ampla rede de profissionais qualificados para demandas variadas, o que possibilita uma alocação rápida e assertiva para o outsourcing. No modelo remoto, conseguimos elevar a régua na hora de encontrar o perfil correto para cada squad.</p>
										<p>Ideal para empresas que precisam expandir seu time de TI.</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="swiper-pagination swiper-pagination-slider-options-2"></div>

						<h1 class="bigger">Nosso time</h1>

						<p>Contamos com uma equipe altamente especializada para garantir o sucesso do seu projeto de aplicativo ou software. Nossos profissionais possuem vasta experiência em todas as fases do desenvolvimento, desde a análise da demanda até a execução final.</p>
						
						<div>
							<div class="swiper swiper-team">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/arquitetos.png" alt="Arquitetos">
														<h1>Arquitetos</h1>
													</div>
													<div class="flip-card-back">
														<h1>Arquitetos</h1>
														
														<p>É responsável por definir a estrutura e a organização de um sistema de software, garantindo que ele atenda aos requisitos de negócios e tecnológicos.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/product owner.png" alt="Product Owers">
														<h1>Product Owers</h1>
													</div>
													<div class="flip-card-back">
														<h1>Product Owers</h1>
														
														<p>É responsável por liderar e gerenciar o desenvolvimento de produtos de software. O Product Owner é responsável por definir e priorizar as funcionalidades e requisitos do produto, garantindo que ele atenda às necessidades dos usuários e do negócio.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/desenvolvedores.png" alt="">
														<h1>Desenvolvedores</h1>
													</div>
													<div class="flip-card-back">
														<h1>Desenvolvedores</h1>
														
														<p>A função de Desenvolvedores em TI é responsável por criar, projetar e implementar softwares e sistemas de tecnologia da informação para atender às necessidades dos usuários finais e dos negócios.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/designer.png" alt="Designer">
														<h1>Designer</h1>
													</div>
													<div class="flip-card-back">
														<h1>Designer</h1>
														
														<p>É responsável por criar interfaces e experiências de usuário intuitivas e atraentes para softwares, aplicativos e sites.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/gerente.png" alt="Gerente de Projeto">
														<h1>Gerente de Projeto</h1>
													</div>
													<div class="flip-card-back">
														<h1>Gerente de Projeto</h1>
														
														<p>O Gerente de Projeto é responsável por garantir que o projeto seja concluído dentro do prazo, orçamento e escopo definidos, além de atender aos requisitos do cliente e do negócio. Além disso, é ele(a) quem lidera e gerencia projetos de tecnologia da informação.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/agilista.png">
														<h1>Analista de Sistemas</h1>
													</div>
													<div class="flip-card-back">
														<h1>Analista de Sistemas</h1>
														
														<p>A função de um Analista de Sistemas em TI visa analisar os requisitos de negócios e as necessidades dos usuários finais para projetar soluções de tecnologia da informação que atendam a essas necessidades.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/devops.png" alt="Devops">
														<h1>Devops</h1>
													</div>
													<div class="flip-card-back">
														<h1>Devops</h1>
														
														<p>É responsável por definir a estrutura e a organização de um sistema de software, garantindo que ele atenda aos requisitos de negócios e tecnológicos.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/quality.png" alt="Quality Assurance">
														<h1>Quality Assurance</h1>
													</div>
													<div class="flip-card-back">
														<h1>Quality Assurance</h1>
														
														<p>O objetivo principal do Quality Assurance é garantir que o software ou sistema seja seguro, confiável, funcione corretamente e atenda às expectativas do cliente.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box-team">
											<div class="flip-card" tabIndex="0">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/outsourcing/arquitetos.png">
														<h1>Agilista</h1>
													</div>
													<div class="flip-card-back">
														<h1>Agilista</h1>
														
														<p>O Agilista em TI é responsável por liderar a implementação de metodologias ágeis na equipe de desenvolvimento de software para permitir que sejam entregue produtos de alta qualidade de forma rápida e eficiente.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="swiper-pagination"></div> -->
							</div>
							
							<div class="swiper-pagination swiper-pagination-slider-team mobile"></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="box-border mt-50">
					<div class="row">
						<div class="col-md-6">
							<div class="box-border-text">
								<h3>Análise de</h3>
								<h1 class="small primary-color mb-8">Demanda</h1>
								<p class="small">Para a análise, levamos em consideração o modo de trabalho da empresa, estrutura da equipe, projetos ativos, tecnologias utilizadas e critérios de seleção.</p>
								
								<h1 class="small primary-color mb-8">Estrutura de equipe</h1>
								<p class="small">Analisamos a estrutura de equipe que melhor se encaixa ao seu projeto, com base em estrutura atual, cultura da empresa e especificações do desenvolvimento.</p>
								
								<h1 class="small primary-color mb-8">Tecnologias utilizadas</h1>
								<p class="small">Baseados no entendimento detalhado do projeto e da empresa, propomos a utilização de tecnologias que levem em consideração os requisitos e as tendência para o negócio.</p>
								
								<h1 class="small primary-color mb-8">Critérios de seleção</h1>
								<p class="small">O vínculo de trabalho vai além da execução e passa a ser parte integrante da empresa contratante, o que otimiza e engaja profissionais junto ao seu projeto.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-border-image m-md-0">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/outsourcing/img-analise.png" alt="Análise Peach IT">
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-border mt-50">
					<div class="row">
						<div class="col-md-6">
							<div class="box-border-text">
								<h1 class="small">Disponibilização de profissionais para seu projeto.</h1>
								<p class="small">A Peach IT possui frentes estruturadas para tornar a disponibilização do profissional um processo claro, assertivo e ágil.</p>
								<p class="small">Com anos de experiência acumulados no mercado de tecnologia, construímos uma rede de profissionais para facilitar a busca por perfis que se adequem a necessidade apresentada.</p>
								<p class="small">Em constante busca por profissionais, possuímos uma área de contratação dedicada para encontrar os melhores profissionais disponíveis no mercado.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-border-image m-md-0">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/outsourcing/img-time.png" alt="Time Peach IT">
							</div>
						</div>
					</div>
				</div>
				
				<div class="box">
					<div class="swiper swiper-report">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
							<div class="box-passos">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/outsourcing/img-tasks.png" alt="Report de tarefas">
								<p>Nós, da Peach IT, frequentemente elaboramos relatórios para manter nossos clientes informados sobre os avanços dos projetos.</p>
							</div>
							</div>
							<div class="swiper-slide">
							<div class="box-passos">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/outsourcing/img-profissionais.png" alt="Acompanhamento de profissionais">
								<p>Mantemos contato frequente com o profissional terceirizado. O incluímos dentro de dinâmicas promovidas pela Peach IT e o mantemos integrado durante todo contrato.</p>
							</div>
							</div>
							<div class="swiper-slide">
							<div class="box-passos">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/outsourcing/img-clientes.png" alt="Satisfação do cliente">
								<p>É fundamental que o projeto seja tocado conforme o planejado e, para isso, acompanhamos de perto o nível de qualidade das entregas realizadas.</p>
							</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination swiper-pagination-slider-report"></div>
				</div>

				<div class="box mt-50">
					<div class="marca-dagua center primary-middle">
						<div class="row">
							<div class="col-md-4">
								<h5 class="border-dotted d-flex align-items-end">Retenção de profissionais</h5>
								
								<p>A Peach IT estimula a relação com os colaboradores através de reuniões de rotina, integrações em atividades coletivas e acompanhamento próximo. </p>
							</div>
							<div class="col-md-4">
								<h5 class="border-dotted d-flex align-items-end">Expansão de time</h5>
								
								<p>O time é escalável, podendo aumentar ou diminuir a quantidade de recursos conforme a demanda.</p>
							</div>
							<div class="col-md-4">
								<h5 class="border-dotted d-flex align-items-end">Expertise Peach IT</h5>
								
								<p>Os profissionais possuem acesso a toda base de conhecimento da Peach IT e assim podem trocar experiências sobre projetos de forma integrada e colaborativa.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	get_footer('subpage');
?>