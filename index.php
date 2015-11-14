<?php 

	include "php/config.php";		
	if(isset($_GET['cor']) == "s"){
		$arquivo = 'http://thiagois.esy.es/downlads/CV_Thiago.jpg';
		header("Content-Type: image/jpg"); // informa o tipo do arquivo ao navegador
		header("Content-Length: 231834"); // informa o tamanho do arquivo ao navegador
		header("Content-Disposition: attachment; filename=CV_Thiago.jpg"); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
		readfile($arquivo); // lê o arquivo	

		mysql_query("INSERT INTO curriculo (contador,data) values ('1','".date('d/m/Y-H:m:s')."')") or die(mysql_error());
	}

 ?>

<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br"/>
<html>
	<head>
		<meta charset="UTF-8"/> 
		<title>Thiago Gonçalves</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/meuJs.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Inicio</a></li>
					<li><a href="#cv">Curriculum</a></li>
					<li><a href="#conhecimentos">Conhecimentos</a></li>
					<li><a href="#work">Experiências</a></li>
					<li><a href="#portfolio">Portfolios</a></li>
					<li><a href="#contact">Contato</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="image fit"><img src="images/eu2.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1><strong> Thiago de G. Gonçalves</strong>.</h1>
							</header>
							<p>&nbsp;&nbsp;&nbsp;Nascido dia 22 de maio de 1993, moro na cidade de Sobradinho – DF, atualmente curso Análise e Desenvolvimento de Sistemas na Universidade Paulista UNIP. Iniciei na área de informática com 11 anos de idade, onde comecei formatando e montando computadores, instalando redes e configurando sistemas operacionais.</p>
<p>	&nbsp;&nbsp;&nbsp;Com 18 anos tive a oportunidade de fazer um curso de Técnico de Informática, onde me apaixonei mais ainda pela tecnologia e pela programação.</p>
	<p>&nbsp;&nbsp;&nbsp;Busco aprimorar meus conhecimentos e ajudar a quem precisa, quero ter sucesso na carreira e ser reconhecido tanto pelo meu trabalho como pelo meu esforço.</p>
	<p>&nbsp;&nbsp;&nbsp;Se eu pudesse falar de algumas qualidades minhas falaria da minha honestidade, pontualidade, e pro atividade. Muitos amigos reclamam que não ficam um minuto parado no trabalho, no meu caso eu gosto de estar sempre fazendo algo, adiantando a minha parte e quando sobra um pouco de tempo gosto de ajudar os meus colegas a terminar suas tarefas.</p>
	<p>&nbsp;&nbsp;&nbsp;Estou sempre disposto a aprender e a ensinar, vontade de aprender e adquirir conhecimentos não me falta, como todos que iniciaram sua carreira em alguma empresa, eu busco uma empresa que me de oportunidade de contribuir com meus atuais conhecimentos e me permita aprender cada dia mais para que possa evoluir e ser um profissional reconhecido.</p>
	<p>&nbsp;&nbsp;&nbsp;Acredito que com nosso esforço podemos vencer qualquer barreira na vida, o que determina o tempo que levará para vencer é a sua força de vontade de lutar e continuar seguindo em frente, independente de qualquer problema.</p>
<p>Sejam bem vindos ao meu site!</p>

					
							<a href="#cv" class="button big scrolly">Acesse o meu Curriculum</a>
						</div>
					</div>
				</article>
			</div>


<!-- Curriculum -->
			<div class="wrapper style2">
				<article id="cv">

					<header>
						<h2>Curriculum</h2>
						<p>Curriculum e Conhecimentos Técnicos</p>
					</header>
					
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="image fit"></span>
						</div>
						<div class="8u">
							
							<h1><strong>Dados Pessoais</strong></h1>
							
							<p><b>Nome:</b> Thiago de G. Gonçalves</p>
							<p><b>Residência: </b>Sobradinho - DF</p>
							<p><b>Telefones: </b>(61)3485-0462 / 8204-4869</p>
							<p><b>Email:</b> thiago_fenix@hotmail.com</p>
							<p><b>CNH:</b> B</p>
							<h1><strong>Formação</strong></h1>
							<p>- Graduando em Análise e Desenvolvimento de Sistemas 3º Semestre.</p>
							<p>- Curso Técnico em Informática - Desenvolvimento de Sistemas(Concluído 1360h).</p>
							<p>*Lógica de Programação.</p>
							<p>*Programação JAVA básico.</p>
							<p>*Programação PHP básico.</p>
							<p>*Programação C# básico.</p>
							<p>*Programação C básico.</p>
							<p>*Banco de dados MySql.</p>
							<p>- Curso Montagem e Configuração de Computadores(Concluído 90h).</p>
							<p>- Curso Técnologia da Informação(Concluído 40h).</p>



							<a href="#conhecimentos" class="button big scrolly">Veja meus conhecimentos</a>
						</div>
					</div>
				</article>
			</div>

				<!--Parte de conhecimentos!-->
				<div class="wrapper style2">
				<article id="conhecimentos">
					<header>
						<h2>Conhecimentos Técnicos</h2>
						<p>Um pouco dos meus conhecimentos que possuo mesmo sem formação</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span ><img src="images/htmlcss.jpg" id="imgPerfil" align="center"></span>
									<h3>HTML 5 e CSS 3</h3>
									<p> - Conhecimentos básicos e intermediarios</p>
									<p> - Utilização de novas tags</p>
									<p> - Utilização dos novos recursos para edição e interface do site </p>									
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span > <img src="images/boostrap.jpg" id="imgPerfil" align="center"></span>
									<h3>Bootstrap 3</h3>
									<p> - Conhecimentos básicos e intermediarios</p>
									<p> - Utilização de classes responsivas</p>
									<p> - Utilização do Design padrão</p>
									<p> - Criação de interfaces com Bootstrap</p>
									
								</section>
							</div>

							<div class="4u">
								<section class="box style1">
									<span>  <img src="images/java.png" id="imgPerfil" align="center"></span>
									<h3>JAVA</h3>
									<p>- Conhecimentos básicos de Desenvolvimento</p>
									
									<p>- Utilização de Banco de Dados Mysql</p>
									<p>- Conhecimentos IDE's NetBeans, Eclipse, entre outros...</p>
								</section>
							</div>
								<div class="4u">
								<section class="box style1">
									<span>  <img src="images/phonegap.png" id="imgPerfil" align="center"></span>
									<h3>Phonegap</h3>
									<p>- Conhecimentos básicos de Desenvolvimento</p>
									<p>- Instalação phoneGap</p>
									<p>- Criação de aplicativos</p>
									<p>- Aplicativos Responsivos e testes de aplicação</p>
								</section>
							</div>

							<div class="4u">
								<section class="box style1">
									<span>  <img src="images/word.jpg" id="imgPerfil" align="center"></span>
									<h3>Pacote Word</h3>
									<p>- Criação e edição de arquivos com padrões ABNT</p>								
									<p>- Criação de Slides, planilhas</p>
									<p>- Formatações</p>
									<p>- Uso de diferentes Versões</p>
									
								</section>
							</div>


							<div class="4u">
								<section class="box style1">
									<span>  <img src="images/adobe.gif" id="imgPerfil" align="center"></span>
									
									<p>- Conhecimentos básicos</p>								
									<p>- Edição de imagens Fireworks e PhotoShop</p>
									<p>- Criação básica de Icones</p>
									<br>
									<br>
									<br>
									<br>									
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span>  <img src="images/js.jpg" id="imgPerfil" align="center"></span>
									
									<p>- Conhecimentos básicos</p>								
									<p>- Utilização de comandos básicos</p>
									
									
								</section>
							</div>			

						</div>
						
					</div>
					
				</article>
			</div>

				<!--Fim conhecimentos!-->
				<div class="wrapper style1 first">
					<footer>
						<p>
							<strong>Baixe o meu Curriculum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
							<div class="quantas_baixadas">
								<?php 
									$cont = mysql_query("SELECT * FROM curriculo") or die(mysql_error());
									$quatidade = mysql_num_rows($cont);
									$qt = $quatidade+1;
									echo "Esse curriculo foi baixado ".$qt." vezes."; 
								?>
							</div>
						</p>
						<a href="index.php?cor=s" class="button big scrolly curri">Download Curriculum </a><br>
						
					</footer>
				
					<footer>
						<p>Conheça um pouco dos sistemas que criei e alguns projetos que trabalhei</p>
						<a href="#portfolio" class="button big scrolly">Clique e veja meus trabalhos!</a>
						</div>
					</footer>
				</article>
			</div>

		<!-- experiencias -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Experiências Profissionais</h2>
						<p>Empresas em que trabalhei...</p>
					</header>

					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span > <img src="images/m42.jpg" id="imgPerfil" align="center"></span>
									<h3>M-42</h3>
									<p>M-42 é meu atual investimento profissional.</p>
									<p>A M-42 é uma startup criada por amigos, para
									desenvolver aplicativos e compartilhar conhecimentos.</p>

									Acesse nosso site!
									<a href="http://web-m42.com/site/" target="_blank">Clique Aqui</a>
								</section>
							</div>
							
							<div class="4u">
								<section class="box style1">
									<span > <img src="images/sasw.jpg" id="imgPerfil" align="center"></span>
									<h3>Grupo SASw</h3>
									<p> - Estágio Desenvolvimento JAVA</p>
									<p> - Suporte do Sistema ao Usuário</p>
									Acesse o site da Empresa:
									<a href="http://gruposas.com.br/" target="_blank">Clique aqui</a>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span ><img src="images/secCultura.jpg" id="imgPerfil" align="center"></span>
									<h3>Secretaria de Cultura</h3>
									<p> - Suporte técnico ao usuário</p>
									<p> - Manutenção de computadores</p>
									<p> - Suporte por acesso Remoto e Presencial</p>
									<p> - Desenvolvimento de pequenos Sistemas</p>
									Acesse o site da Empresa:
									<a href="http://www.cultura.df.gov.br/" target="_blank">Clique aqui</a>

								</section>
							</div>

						
						</div>
					</div>
					<footer>
						<p>Conheça um pouco dos sistemas que criei e alguns projetos que trabalhei</p>
						<a href="#portfolio" class="button big scrolly">Clique e veja meus trabalhos!</a>
					</footer>
				</article>
			</div>


		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Aqui estão alguns dos meus trabalhos</h2>
						<p>Clique nas imagens para acessar os links...</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<article class=" box style2">
									<a href="http://web-m42.com/site/?p=72" target="_blank" class="image featured"><img src="slide/sgv4.png" class="box2" alt="" />
								</a>
									<h3><a  href="http://web-m42.com/site/?p=72" target="_blank">SGV</a></h3>
									<p>Sistema de Gerenciamento de vendas, feito na conlcusão do meu curso técnico
									utilizando linguagem JAVA</p>
								</article>
							</div>
							<div class="4u">
								<article class=" box style2">
									<a href="http://web-m42.com/site/?p=78" target="_blank" class="image featured"><img src="images/configuracao.jpeg" class="box2" alt="" /></a>
									<h3><a  href="http://web-m42.com/site/?p=78" target="_blank">Montagem e Configuração de Computadores</a></h3>
									<p>Meu trabalho como Técnico de Manutenção e Suporte</p>
								</article>
							</div>
							<div class="4u">
								<article class=" box style2">
									<a href="#porti" class="image featured"><img src="slide/doc.png" class="box2" alt="" /></a>
									<h3><a href="#">Documentação de Sistemas</a></h3>
									<p>Algumas das documentações em que crirei e trabalhei</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<a href="http://web-m42.com/site/?p=56" target="_blank" class="image featured"><img src="images/confeitaria.jpg"  class="box2"  alt="" /></a>
									<h3><a href="http://web-m42.com/site/?p=56" target="_blank">Minha Confeitaria</a></h3>
									<p>Com o intuito de ser um gerenciador de vendas simples o app Minha Confeitaria te ajuda a gerenciar seus produtos, fornecedores, clientes e encomendas.
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="http://web-m42.com/site/" class="image featured" target="_blak" ><img src="images/cobre.jpg" class="box2"  alt="" /></a>
									<h3> <a href="http://web-m42.com/site/" target="_blak" >Cobre seu Amigo</a></h3>
									
									<p> Aplicativo que lembra você de cobrar o dinheiro que emprestou para o seus amigos</p>
								</article>
							</div>
							
						</div>
					</div>
					<footer>
						<p>Gostou do meu trabalho?</p>
						<a href="#contact" class="button big scrolly">Entre em contato comigo!</a>
					</footer>
				</article>
			</div>

		<!-- Contato -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Contato</h2>
						<p>Entre em contato comigo utilizando os dados a seguir</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="php/email.php">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Nome" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Assunto" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Mensagem"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Enviar" /></li>
													<li><input type="reset" value="Limpar" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Me encontre em...</h3>
								<ul class="social">
									
									<li><a href="https://www.facebook.com/thiagosama1" target="_blank"  class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									
									<li><a href="https://www.linkedin.com/profile/view?id=302360888&trk=nav_responsive_tab_profile" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									
									<li><a href="https://plus.google.com/u/0/108005551476939013790" target="_blank" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; M-42  Thiago G. Gonçalves. Todos os direitos Reservados.</li><li>Design: <a target="_blank"href="http://web-m42.com/site/">M-42</a></li>
						</ul>
					</footer>
				</article>
			</div>
			<div style="height:1px; width:1px; overflow:hidden;">
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
				<script type="text/javascript">
					bb_bid = "217632";
					bb_lang = "pt-BR";
					bb_name = "custom";
					bb_limit = "8";
					bb_format = "bbb";
				</script>
				<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
			</div>
	</body>
</html>