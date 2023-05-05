			<div class="semi-footer">
				<div class="container">
					<div class="box-semi-footer">
						<div class="row">
							<div class="col-md-3 image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-holding-tablet.png" alt="img-holding-tablet">
							</div>
							<div class="col-md-6">
								<h4>Venha fazer parte do nosso time.</h4>
								<p>Caso prefira, encaminhe um e-mail para <a href="mailto:rh@peachit.com.br" target="_blank">rh@peachit.com.br</a></p>
							</div>
							<div class="col-md-3 vertical-align right mob-center">
								<button class="button primary shadow no-border" type="button" data-bs-toggle="modal" data-bs-target="#modalWork">Entre em contato</button>
							</div>
						</div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-hexagono.png" class="hexagono" alt="Hexagono">
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="sob-footer">
				<div class="container">
					<a class="logo-footer" href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-grande.png" alt="Logo Peach IT">
					</a>

					<div class="row">
						<div class="col-12 col-md-4 coluna-1 order-1 order-md-first">
							<h1 class="mobile-hidden">Utilizamos a tecnologia de forma a simplificar, potencializar e acelerar os resultados.</h1>

							<div class="redes-sociais">
								<p>Acesse nossas redes:</p>

								<ul>
									<li>
										<a href="https://www.instagram.com/peachit.br/" target="_blank">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/instagram.svg" alt="Instagram Peach IT" width="32" height="32"> <span>Instagram</span>
										</a>
									</li>
									<li>
										<a href="https://www.linkedin.com/company/peach-it-soluções-em-tecnologia-ltda/" target="_blank">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/linkedin.svg" alt="Linkedin Peach IT" width="32" height="32"> <span>Linkedin</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md-5 coluna-2 mobile-hidden">
							<h1>Navegue pelo site</h1>

							<div class="row">
								<div class="col">
									<ul class="lista-espacamento">
										<li>
											<strong><a href="<?php echo get_site_url() ?>/" target="_blank"> Início </a></strong>
										</li>
										<li>
											<strong><a href="<?php echo get_site_url() ?>/quem-somos" target="_blank"> Quem somos </a></strong>
										</li>
										<li>
											<strong><a href="<?php echo get_site_url() ?>/trabalhe-conosco" target="_blank"> Trabalhe conosco </a></strong>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="lista-sem-espacamento">
										<li>
											<strong>O que fazemos</strong>
										</li>
										<li>
											<a href="<?php echo get_site_url() ?>/solucoes-digitais" target="_blank"> Soluções digitais </a>
										</li>
										<li>
											<a href="<?php echo get_site_url() ?>/solucoes-promocionais" target="_blank"> Soluções Promocionais </a>
										</li>
										<li>
											<a href="<?php echo get_site_url() ?>/consultoria" target="_blank"> Consultoria & Estratégia </a>
										</li>
										<li>
											<a href="<?php echo get_site_url() ?>/outsourcing" target="_blank"> Outsourcing </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 coluna-3 order-0 order-md-last">
							<h1 class="mobile-hidden">Fale conosco:</h1>

							<div class="contato">
								<ul>
									<li>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/email.svg" alt="Email Peach IT"> <a href="mailto:rh@peachit.com.br?subject=Contato">rh@peachit.com.br</a>
									</li>
									<li>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Peach IT"> <a href="https://api.whatsapp.com/send?phone=+5511978794205&text=Olá">(11) 97879-4205</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-footer">
				<p>Copyright © 2023 PEACH IT. Todos os direitos reservados.</p>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="modalClient" tabindex="-1" aria-labelledby="modalClient" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-dialog-client">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

						<div class="row">
							<div class="col-md-4">
								<div class="left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dialog-client-desktop.png" class="desktop" alt="Peach IT">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dialog-client-mobile.png" class="mobile" alt="Peach IT">

									<p>Por favor, preencha este formulário se você deseja obter resultados através da tecnologia. Um de nossos consultores entrará em contato com você em breve.</p>
								</div>
							</div>
							<div class="col-md-8">
								<div class="right">
									<?php echo do_shortcode( '[contact-form-7 id="112" title="Seja Cliente"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="modalWork" tabindex="-1" aria-labelledby="modalWork" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-dialog-client">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						
						<div class="row">
							<div class="col-md-4">
								<div class="left">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dialog-work-desktop.png" class="desktop" alt="Peach IT">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dialog-work-mobile.png" class="mobile" alt="Peach IT">

									<p>Por favor, preencha este formulário se você deseja obter resultados através da tecnologia. Um de nossos consultores entrará em contato com você em breve.</p>
								</div>
							</div>
							<div class="col-md-8">
								<div class="right">
									<?php echo do_shortcode( '[contact-form-7 id="113" title="Trabalhe Conosco"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- JQuery -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.4.min.js"></script>
		<!-- Mascara -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mask.min.js"></script>
		<!-- Bootstrap Bundle JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

		<script type="text/javascript">
  			$("#whatsapp").mask('(00) 00000-0000');
			$("#cpf").mask("000.000.000-00");
			$("#cnpj").mask("00.000.000/0000-00");
		</script>
	</body>
</html>