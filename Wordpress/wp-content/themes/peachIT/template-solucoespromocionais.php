<?php 
/**
 * Template Name: Modelo Página Soluções Promocionais
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
				<div class="row">
					<div class="col-md-9 d-flex flex-column justify-content-between">
						<div>
							<h1>Transforme seu negócio com as campanhas promocionais da Peach IT e o impulsione de maneira estratégica e eficiente!</h1>

							<p>Com a nossa tecnologia, possibilitamos a criação de regras de fidelização que engajam e atraem um público amplo e diversificado.</p>
						</div>

						<div>
							<button class="button primary no-border fw-bold text-uppercase" type="button" data-bs-toggle="modal" data-bs-target="#modalClient">Solicite um orçamento</button>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-border-image desktop">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/img-sol-promo-desktop.png" alt="Card Soluções Promocionais">
						</div>
					</div>
				</div>
				
				<div class="row row-margin-adjust">
					<div class="col-md-4 mt-50">
						<div class="box-green-gradient">
							<h1>Qual é o tipo de campanha ideal para o seu negócio?</h1>

							<p>Na Peach IT, estamos prontos para atender a todos os tipos de campanhas promocionais e de sorteios. Nossa plataforma de parametrização é simples e amigável, permitindo que você lance sua promoção em poucos minutos em um ambiente seguro e escalonável.</p>
						</div>
					</div>
					<div class="col-md-8 p-0">
						<div class="swiper swiper-options padding-options">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="marca-dagua primary-light">
										<div class="box-text-image">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/tipo-negocio/fidelizacao.png" alt="Fidelizacao">

											<h5>fidelização</h5>
										</div>
										
										<p>Marketing de relacionamento com personalização diferenciada é uma das melhores estratégias para manter a fidelidade do cliente e fortalecer a marca.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="marca-dagua primary-light">
										<div class="box-text-image">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/tipo-negocio/fez-ganhou.png" alt="Fez ganhou">

											<h5>Fez ganhou</h5>
										</div>

										<p>Uma campanha promocional "fez ganhou" é uma estratégia muito comum em marketing. Aumente o envolvimento de seus clientes e impulsione o seu negócio contando com a nossa expertise e tecnologia.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="marca-dagua primary-light">
										<div class="box-text-image">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/tipo-negocio/sorteio.png" alt="Sorteio">

											<h5>Sorteio</h5>
										</div>

										<p>Campanhas incorporando sorteios promocionais poderão ser realizadas com base nas extrações da Loteria Federal e precisarão seguir um regulamento específico.</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="marca-dagua primary-light">
										<div class="box-text-image">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/tipo-negocio/quiz.png" alt="Quiz">

											<h5>Quiz</h5>
										</div>

										<p>Seus clientes poderão testar conhecimentos e se divertir enquanto participam de campanhas promocionais emocionantes respondendo à quizzes incríveis!</p>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-pagination swiper-pagination-slider-options-sol"></div>
					</div>
				</div>
				
				<div class="box-border marca-dagua">
					<div class="row">
						<div class="col-lg-8">
							<div class="box-border-text">
								<h1 class="small">O que é a plataforma </h1>

								<p class="small">A Peach IT é uma empresa que além de oferecer soluções tecnológicas para otimizar processos empresariais e melhorar a eficiência das operações, tem a solução perfeita para impulsionar suas campanhas de promoção. Em nossa plataforma, você encontrará ferramentas que otimizam toda a cadeia de promoção, tornando sua operação mais rápida e segura.</p>
								<p class="small">As empresas podem criar campanhas personalizadas e estratégias de marketing para atrair e fidelizar clientes, oferecendo uma série de funcionalidades que permitem acompanhar o desempenho de suas campanhas em tempo real.</p>
								<p class="small">Além de oferecer uma interface intuitiva e amigável que simplifica todo o processo de criação e gerenciamento de promoções, assim é possível focar em outras atividades importantes do negócio, enquanto a plataforma cuida das campanhas de promoção.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="box-border-image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/card-plataforma-desktop.png" class="desktop" alt="O que é plataforma?">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/card-plataforma-mobile.png" class="mobile" alt="O que é plataforma?">
							</div>
						</div>

						<div class="col-lg-12 swiper-ajuste-width">
							<div class="swiper swiper-plataform">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/cms.png" alt="CMS">
											
											<div>
												<h5>CMS</h5>
												<p>Para facilitar a criação e gerenciamento de conteúdo dentro da plataforma, tornando todo o processo mais eficiente e organizado.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/hotsite-integrado.png" alt="hotsite integrado">
											
											<div>
												<h5>Hotsite integrado</h5>
												<p>Com nosso hotsite integrado, descubra como a sua empresa pode se destacar no mercado digital! Potencialize a sua presença online.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/notificacoes.png" alt="Notificações">
											
											<div>
												<h5>NOTIFICAÇÕES</h5>
												<p>Disponibilize notificações para seus clientes por meio de push, e-mail, SMS, WhatsApp e dentro do próprio aplicativo.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/entrega-de-premios.png" alt="Entrega de prêmios">
											
											<div>
												<h5>Entrega de prêmios</h5>
												<p>Nós garantimos uma entrega rápida e segura dos prêmios para que os seus clientes sejam recompensados da melhor maneira possível.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/api-de-integracao.png" alt="API de Integração">
											
											<div>
												<h5>API de Integração</h5>
												<p>A nossa plataforma está integrada com sistemas de PDVs, eCommerces, ERPs e sistemas da sua empresa, permitindo a criação de estratégias online de visual merchandising.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/kpi.png" alt="KPI">
											
											<div>
												<h5>KPI</h5>
												<p>Os KPIs são fundamentais para medir o desempenho da sua empresa. Conheça os indicadores chave de sucesso e tome decisões estratégicas com mais assertividade.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/seguranca-escababilidade.png" alt="Segurança e escalabilidade">
											
											<div>
												<h5>Segurança e escalabilidade</h5>
												<p>Proteja e escalone sua empresa com a nossa solução. Oferecemos medidas de segurança avançadas e tecnologias escaláveis para garantir a confiabilidade e o desempenho do seu sistema. </p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/whitelabel.png" alt="Whitelabel">
											
											<div>
												<h5>Whitelabel</h5>
												<p>Transforme sua ideia em realidade economizando tempo, recursos e elevando sua marca para um novo nível.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/atendimento.png" alt="Atendimento ao Participante">
											
											<div>
												<h5>Atendimento ao Participante</h5>
												<p>Oferecemos atendimento com SAC para melhor atender você e seu cliente.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/base-de-lead.png" alt="Base de Lead">
											
											<div>
												<h5>Base de Lead</h5>
												<p>Com uma captação de leads qualificada, você poderá alcançar seu público-alvo de forma eficaz e obter ótimos resultados para o seu negócio.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/saas.png" alt="SAAS">
											
											<div>
												<h5>SAAS</h5>
												<p>O modelo SAAS (Software como Serviço) permite o acesso a softwares por meio da internet, facilitando a vida do usuário. Conheça essa solução inovadora e melhore a produtividade do seu negócio.</p>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="box">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/o-que-fazemos/solucoes-promocionais/plataforma/interface-amigavel.png" alt="Interface amigável">
											
											<div>
												<h5>Interface amigável</h5>
												<p>Uma interface amigável é essencial para garantir uma experiência positiva do usuário com o seu produto ou serviço. Ao projetar uma interface fácil de usar, você aumenta as chances de envolvimento e engajamento.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-pagination swiper-pagination-plataform"></div>
							</div>

							<div class="swiper-pagination swiper-pagination-plataform mobile"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section-hotsite">
			<div class="container">
				<h1>Hotsite promocional</h1>
				<p>Potencialize suas promoções online com as nossas ferramentas personalizadas e escolha como quer fechar o seu projeto. Você poderá decidir se deseja incluir um hotsite integrado, personalizado ou até mesmo seguir sem um hotsite elaborado pela nossa equipe.</p>

				<div class="box-hotsite">
					<div class="swiper swiper-doing">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="box-hotsite">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/img-sol-promo-hotsite-integrado.png" alt="Hotsite Integrado">

									<h5>Hotsite Integrado</h5>

									<p>O nosso hotsite integrado é um site que une diversas funcionalidades e recursos, previamente determinados, para oferecer uma experiência, customizável, para o seu négocio.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-hotsite">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/img-sol-promo-hotsite-personalizado.png" alt="Hotsite Personalizado">

									<h5>Hotsite Personalizado</h5>

									<p>Nosso hotsite personalizado é um site desenvolvido especificamente para atender às suas necessidades e expectativas. Ele será criado a partir de um briefing detalhado para tornar a sua campanha ainda mais única.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="box-hotsite">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/img-sol-promo-simples.png" alt="Hotsite Simples">

									<h5>Hotsite Simples</h5>

									<p>Você poderá escolher utilizar a nossa ferramenta e acompanhá-la de um hotsite desenvolvido pelo time de tecnologia da sua empresa. Mas atenção, sem um hotsite adequado, você poderá enfrentar algumas dificuldades para atrair e engajar o seu público-alvo de forma efetiva.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-pagination swiper-pagination-slider-doing"></div>
				</div>
			</div>
		</div>

		<div class="section-general">
			<div class="banner">
				<div class="container">
					<div class="banner-mobile">
						<div class="row">
							<div class="col-md-8">
								<div class="banner-text">
									<h1>Performance e Usabilidade</h1>
									<h3>Garanta a máxima performance para sua campanha promocional.</h3>
									<p>Nós entendemos que uma campanha promocional é muito mais do que um simples anúncio. É uma oportunidade única de se conectar com seus clientes e promover uma experiência memorável. E é por isso que estamos aqui para ajudá-lo!</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="h-100 desktop banner-image">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/ganhadora.png" alt="Ganhadora">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="box-border mt-50">
					<div class="row">
						<div class="col-lg-8">
							<div class="box-border-text">
								<h1 class="small">Porque fechar com a gente?</h1>

								<p class="small m-0 pb-2">A escolha de uma plataforma para gerenciar campanhas e promoções pode ser uma tarefa desafiadora, mas a Peach IT é a escolha certa para qualquer negócio que deseja destacar-se da concorrência. Nossa equipe de profissionais altamente capacitados está sempre pronta para entender as necessidades específicas do seu negócio e criar estratégias personalizadas para alcançar seus objetivos.</p>
								<p class="small m-0 pb-2">Ao trabalhar com a Peach IT, você terá acesso às melhores ferramentas e tecnologias disponíveis no mercado, o que garantirá que suas campanhas sejam executadas de maneira eficiente e com resultados tangíveis. Temos tecnologia de ponta para ajudar a impulsionar seu negócio e alcançar novos patamares de sucesso.</p>
								<p class="small mb-4">Acreditamos que cada cliente é único e, por isso, desenvolvemos estratégias personalizadas para garantir que suas campanhas atinjam o público-alvo certo. A Peach IT se destaca por oferecer um serviço diferenciado e personalizado para cada cliente.</p>
								<p class="small">Estamos ansiosos para trabalhar com você e seu negócio.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="box-border-image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/card-fazer-negocio-desktop.png" class="desktop shadow" alt="Fazer negócio?">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o-que-fazemos/solucoes-promocionais/card-fazer-negocio-mobile.png" class="mobile shadow" alt="Fazer negócio?">
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