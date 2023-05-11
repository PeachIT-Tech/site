			<div class="semi-footer">
				<div class="container">
					<div class="box-semi-footer">
						<div class="row">
							<div class="col-md-3 image">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-holding-tablet.png" alt="img-holding-tablet">
							</div>
							<div class="col-md-6">
								<h4>Converse com um especialista</h4>
								<p>Caso prefira, encaminhe um e-mail para <a href="mailto:comercial@peachit.com.br" target="_blank">comercial@peachit.com.br</a></p>
							</div>
							<div class="col-md-3 vertical-align right mob-center">
								<a href="#" class="button primary shadow"  data-bs-toggle="modal" data-bs-target="#modalClient">Entre em contato</a>
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
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/email.svg" alt="Email Peach IT"> <a href="mailto:comercial@peachit.com.br?subject=Contato" target="_blank">comercial@peachit.com.br</a>
									</li>
									<li>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Peach IT"> <a href="https://wa.me/5511978794205?text=Olá" target="_blank">(11) 97879-4205</a>
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
									<?php echo do_shortcode( '[contact-form-7 id="117" title="Seja Cliente"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="chat single-channel">
			<div class="chat-channel">
				<a href="https://wa.me/5511978794205?text=" target="_blank" class="chat-tooltip">
					<span class="chat-icon">
						<span class="chat-svg">
							<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#7cd854"></circle>
								<path d="M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z" transform="translate(12.9597 12.9597)" fill="#FAFAFA"></path>
								<path d="M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z" transform="translate(7.7758 7.77582)" fill="white" stroke="white" stroke-width="0.2"></path>
							</svg>
						</span>
					</span>
					<span class="on-hover-text">Precisa de ajuda?</span>
				</a>
			</div>
		</div>
		
		<?php wp_footer(); ?>
		<!-- JQuery -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.4.min.js"></script>
		<!-- Mascara -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mask.min.js"></script>
		<!-- Bootstrap Bundle JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js?v=1.2"></script>

		<script>
			$("#menu-item-77 > ul").addClass("show");
			$("#menu-item-99 > ul").addClass("show");
			
			$("#header").addClass("show");
			$("#DropdownItem").addClass("show");
			
  			$("#whatsapp").mask('(00) 00000-0000');
			$("#cpf").mask("000.000.000-00");
			$("#cnpj").mask("00.000.000/0000-00");
		</script>
	</body>
</html>