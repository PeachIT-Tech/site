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
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/email.svg" alt="Email Peach IT"> <a href="mailto:comercial@peachit.com.br?subject=Contato">comercial@peachit.com.br</a>
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
									<form action="">
										<div class="row">
											<div class="col-md-6">
												<div class="form-floating mb-3">
													<input type="text" class="form-control" id="nome" placeholder="Nome">
													<label for="nome">Nome</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-floating mb-3">
													<input type="email" class="form-control" id="email" placeholder="name@example.com">
													<label for="email">Email</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-floating mb-3">
													<input type="whatsapp" class="form-control" id="whatsapp" placeholder="Whatsapp">
													<label for="whatsapp">Whatsapp</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-floating mb-3">
													<input type="empresa" class="form-control" id="empresa" placeholder="Empresa">
													<label for="empresa">Empresa</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-floating">
													<textarea class="form-control" placeholder="Mensagem" id="mensagem" style="height: 150px"></textarea>
													<label for="mensagem">Mensagem</label>
												</div>
											</div>
										</div>
										<div>
											<button type="submit" class="button invert">Enviar mensagem</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
		<!-- Bootstrap Bundle JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
	</body>
</html>