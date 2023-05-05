<?php 
/**
 * Template Name: Modelo Página Soluções Digitais
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
			<div class="container">
				<div class="box-border">
					<div class="row">
						<div class="col-md-8">
							<div class="box-border-text">
								<h1>WebSites e Web Apps</h1>

								<p>Desenvolvemos e publicamos websites e web apps utilizando as melhores tecnologias disponíveis no mercado:</p>

								<ul>
									<li>Front-end: Flutter - Angular - React - Next.Js - JavaScript</li>
									<li>Back-end: C# .Net - NodeJs - Python - Ruby on Rails - GraphQL - TypeScript - PHP - Go</li>
									<li>Database: SQL Server - MySQL - PostgreSQL - MongoDB - CosmosDB - Redis</li>
									<li>QA: Jest - Cypress - Detox</li>
									<li>CI / CD: Gitlab - Circle CI - Azure Pipelines</li>
									<li>Cloud Services: Google Gloud - AWS - Microsfot Azure</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-border-image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/card-websites-webapps.png" alt="Card Websites Webapps">
							</div>
						</div>
					</div>
				</div>

				<div class="box-border mt-50">
					<div class="row mobile-invert">
						<div class="col-md-4">
							<div class="box-border-image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/card-mobile-apps.png" class="max-300" alt="Card mobile apps">
							</div>
						</div>
						<div class="col-md-8">
							<div class="box-border-text text-md-end">
								<h1>Mobile Apps</h1>

								<p>Desenvolvemos e publicamos Aplicativos Mobile Android e IOS, Ipad, Smart Tvs e Smart Watch.</p>

								<ul>
									<li>Linguagens Híbridas: Flutter - React Native - JavaScript</li>
									<li>Linguagens Nativas: Objective-C - Swift - Kotlin</li>
									<li>Cloud Services: Firebase</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="box-border mt-50">
					<div class="row">
						<div class="col-md-8">
							<div class="box-border-text">
								<h1>Sharepoint & Power Platform</h1>

								<p>Com a integração, é possível criar soluções empresariais personalizadas, escaláveis e eficientes.</p>

								<ul>
									<li>Integrações entre sistemas internos, clientes e fornecedores, além de integrações com ERP’s.</li>
									<li>Desenvolvimento de intranets corporativas, workflows, integrações, ferramentas Power Plataform e Office 365.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-border-image text-end">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/card-sharepoint.png" class="shadow" alt="Card sharepoint">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-metodologia mt-50">
			<div class="container">
				<h1>Metodologia de trabalho</h1>

				<div class="slider">
					<div class="swiper swiper-metodologia">
						<div class="swiper-wrapper">
							<div class="swiper-slide impar">
								<div class="box-conteudo">
									<div class="box-conteudo-imagem">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/metodologia/metodologia-1.png" alt="Metodologia">
									</div>
									<div class="box-conteudo-texto">
										<h5>Análise</h5>

										<p>Realizamos análises detalhadas para compreender as necessidades e expectativas de nossos clientes e encontrar soluções eficientes e inovadoras.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide par">
								<div class="box-conteudo">
									<div class="box-conteudo-imagem">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/metodologia/metodologia-2.png" alt="Metodologia">
									</div>
									<div class="box-conteudo-texto">
										<h5>Prototipação</h5>

										<p>Desenvolvemos protótipos para testar e validar as soluções propostas, garantindo a qualidade e a eficiência dos produtos entregues.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide impar">
								<div class="box-conteudo">
									<div class="box-conteudo-imagem">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/metodologia/metodologia-3.png" alt="Metodologia">
									</div>
									<div class="box-conteudo-texto">
										<h5>Desenvolvimento</h5>

										<p>Executamos o desenvolvimento de produtos de acordo com os padrões e especificações definidos, garantindo a qualidade e a satisfação dos nossos clientes.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide par">
								<div class="box-conteudo">
									<div class="box-conteudo-imagem">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/metodologia/metodologia-4.png" alt="Metodologia">
									</div>
									<div class="box-conteudo-texto">
										<h5>Publicação</h5>

										<p>Publicamos os produtos desenvolvidos com atenção aos detalhes e garantindo a disponibilidade e a estabilidade dos mesmos para os usuários finais.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide impar">
								<div class="box-conteudo">
									<div class="box-conteudo-imagem">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-digitais/metodologia/metodologia-5.png" alt="Metodologia">
									</div>
									<div class="box-conteudo-texto">
										<h5>Monitoramento</h5>

										<p>Monitoramos constantemente o desempenho e a utilização dos produtos publicados, realizando manutenção e atualizações de forma a garantir a sua qualidade.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination swiper-pagination-slider-metodologia"></div>
				</div>

				
				<div class="trabalho">
					<div class="row">
						<div class="col-md-4">
							<div class="box-trabalho">
								<h5>Suporte</h5>

								<p>A Peach IT oferece atendimento contínuo para questões técnicas, tais como manutenção do software e desenvolvimentos adicionais</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-trabalho">
								<h5>Garantia</h5>

								<p>Após o desenvolvimento ser finalizado, disponibilizaremos suporte por um período, sem cobranças extras, caso alguma manutenção seja necessária.</p>
							</div>
						</div>
						<div class="col-md-4 m-0">
							<div class="box-trabalho">
								<h5>Propriedade</h5>

								<p>O código fonte do software será de inteira propriedade da empresa que adquiriu o desenvolvimento.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section-personalizado">
			<div class="options">
				<div class="container">
					<h1>A <span class="primary-color">Peach</span> <span class="terc-color">IT</span> tem a opção de trabalho ideal para cada empresa</h1>

					<div class="swiper swiper-options">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="option">
									<h5>Escopo Fechado</h1>

									<p>Com a demanda bem definida, realizamos o desenvolvimento em etapas pré-determinadas, garantindo um cronograma assertivo para projetos de software e aplicativo. Além disso, o esforço é mensurado com precisão desde o início, de forma que o orçamento seja respeitado.</p>
									<p>Ideal para projetos de pequeno porte com escopo bem determinado.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="option">
									<h5>Quick Project</h1>

									<p>Apesar de ser bastante utilizada em projetos e o nome indicar, metodologia ágil não é sinônimo de velocidade. O QuickProject é um modelo de trabalho exclusivo da Peach It, que surgiu para atender projetos de desenvolvimento de software e aplicativo com prazos desafiadores.</p>
									<p>Ideal para projetos que precisam ser desenvolvidos em poucos dias.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="option">
									<h5>Body Shop</h1>

									<p>Possuímos uma ampla rede de profissionais qualificados para demandas variadas, o que possibilita uma alocação rápida e assertiva para o outsourcing. No modelo remoto, conseguimos elevar a régua na hora de encontrar o perfil correto para cada squad.</p>
									<p>Ideal para empresas que precisam expandir seu time de TI.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="option">
									<h5>Outsourcing Gerenciado</h1>

									<p>Além de alocarmos profissionais qualificados, formamos e gerenciamos equipes com nossa expertise em outsourcing. Implementamos processos que auxiliam na formação de uma área sólida para desenvolvimento de softwares e aplicativos.</p>
									<p>Ideal para empresas que precisam formar uma equipe autogerenciável.</p>
								</div>
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