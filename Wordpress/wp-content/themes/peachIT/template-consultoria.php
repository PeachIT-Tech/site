<?php 
/**
 * Template Name: Modelo Página Consultoria
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
		<div class="section-general mobile-pb-0">
			<div class="container">
				<div class="box-border">
					<div class="row">
						<div class="col-md-12">
							<div class="box-border-text">
								<h1>Consultoria & Estratégia de TI:</h1>
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-border-text">
								<p class="bigger">Oferecemos consultoria completa de tecnologia para analisar e otimizar a (infraestrutura, softwares e processos).</p>

								<ul>
									<li class="bigger">Orientamos na seleção de plataformas, ferramentas e tecnologias.</li>
									<li class="bigger">Apoiamos no direcionamento de produtividade no que tange aos processos internos da organização.</li>
									<li class="bigger">Implementamos e acompanhamos as metodologias ágeis.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-5">
							<div class="box-border-image m-0">
								<img class="shadow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/consultoria/img-office.png" alt="Card Office">
							</div>
						</div>
					</div>
					
					<div class="row mobile-invert mt-50">
						<div class="col-md-5">
							<div class="box-border-image m-0 desktop">
								<img class="shadow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/consultoria/img-meeting.png" alt="Card Meeting">
							</div>
						</div>
						<div class="col-md-7">
							<div class="box-border-text">
								<ul>
									<li class="bigger">Com os negócios e a tecnologia sempre em evolução, as empresas enxergam que precisam se adequar e melhorar seus sistemas.</li>
									<li class="bigger">Se você e seu negócio buscam aumentar e apoiar a satisfação de seus clientes e parceiros, então é preciso ter um suporte que atenda suas necessidades.</li>
									<li class="bigger">Somos uma consultoria estratégica de TI que implementa as melhores metodologias de acordo com o perfil de cada empresa.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-hotsite mt-50 mobile-mt-25">
					<h1 class="m-0">Nossa Metódologia</h1>

					<div class="swiper swiper-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="marca-dagua primary-light h-100">
									<div class="box-text-image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/consultoria/analise.png" alt="Análise">

										<h5>Análise</h5>
									</div>
									
									<p>Identificamos os objetivos e metas da empresa, bem como a compreensão do seu modelo de negócio e do mercado em que atua. Com base nessas informações, avaliamos a estrutura organizacional da empresa, incluindo a hierarquia, a divisão de responsabilidades e as políticas de gestão, trazendo como sugestão soluções tecnológicas que aprimorem e otimizem o dia a dia.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="marca-dagua primary-light h-100">
									<div class="box-text-image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/consultoria/implentacao.png" alt="Implementação">

										<h5>Implementação</h5>
									</div>
									
									<p>Visamos auxiliar e otimizar os processos, sistemas e recursos, através de uma análise detalhada das necessidades da empresa. Propomos soluções personalizadas para melhorar o desempenho e segurança do negócio, garantindo os resultados com qualidade, prazo e dentro do orçamento estabelecido.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="marca-dagua primary-light h-100">
									<div class="box-text-image">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/consultoria/monitoramento.png" alt="Monitoramento">

										<h5>Monitoramento</h5>
									</div>
									
									<p>Nós coletamos, analisamos e acompanhamos os indicadores de desempenho, permitindo identificar problemas e oportunidades, além de melhorar a tomada de decisões e a elaboração no plano de ação. Nosso monitoramento contribui para o alinhamento entre os objetivos do negócio e as soluções de TI. Além disso, buscamos o aumento da competitividade e da inovação nas organizações.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination swiper-pagination-slider mobile"></div>
				</div>

				<div class="box-border mt-50">
					<div class="row">
						<div class="col-md-12">
							<h1>Benefícios</h1>

							<div class="swiper swiper-beneficios">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Eficiência operacional</h5>

											<p>A consultoria da Peach IT pode ajudar você e sua empresa a identificar e corrigir problemas nos processos de TI, tornando-os mais eficientes e eficazes. Isso pode incluir a eliminação de processos redundantes ou a implementação de tecnologia mais avançada para aumentar a eficiência.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Redução de custos</h5>

											<p>A otimização dos processos de uma empresa podem economizar dinheiro em infraestrutura, software e outros investimentos. A Peach IT vem com essa proposta de ajudar você e sua empresa a identificarem áreas em que pode haver desperdício de recursos e a encontrar soluções mais econômicas.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Expertise especializada</h5>

											<p>A Peach IT tem profissionais experientes e qualificados que podem oferecer soluções inovadoras e de alta qualidade para os desafios de TI da empresa. Isso pode incluir a implementação de novas tecnologias ou a resolução de problemas complexos de TI.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Segurança</h5>

											<p>A Peach IT pode ajudar a implementar medidas de segurança cibernética robustas para proteger seus dados e sistemas contra ameaças externas. Isso pode incluir a avaliação de riscos de segurança cibernética, a implementação de políticas de segurança ou a adoção de tecnologias de segurança mais avançadas.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Decisões estratégicas</h5>

											<p>A consultoria da Peach IT pode ajudar a empresa a tomar decisões mais informadas e estratégicas em relação à sua infraestrutura de TI e ao uso de tecnologia em geral. Isso pode incluir a avaliação de diferentes opções de tecnologia ou a definição de objetivos de longo prazo para a empresa.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="beneficio">
											<h5>Experiência do usuário</h5>

											<p>Com a ajuda da Peach IT, a empresa pode melhorar a experiência do usuário em seus sistemas e aplicativos, tornando-os mais intuitivos e fáceis de usar. Isso pode incluir a realização de pesquisas de usuário, o desenvolvimento de interfaces mais amigáveis ou a adoção de novas tecnologias para melhorar a experiência do usuário.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-pagination swiper-pagination-slider-beneficios mobile"></div>
			</div>
		</div>
	</div>

<?php
	get_footer('subpage');
?>