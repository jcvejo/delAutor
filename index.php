<?php
session_start();
if ( isset($_POST["idioma"]) ) {

	$_SESSION["idioma"] = $_POST["idioma"];
	$idioma = $_SESSION["idioma"];
	include("idiomas/$idioma.php");

} elseif ( isset($_SESSION["idioma"]) ) {

	$idioma = $_SESSION["idioma"];
	include("idiomas/$idioma.php");

} else {

	include("idiomas/espanol.php"); // Un idioma por defecto.
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Del Autor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link href="http://www.delautor.com/images/japon.png" rel="image_src" />
		<link rel="canonical" href="http://www.delautor.com/" />
	<!-- Favicon-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
<!--metadatos -->
<meta name='description' content='Traducciones de japonés a español'/>
<meta name='keywords' content='traduccion, japonés, español, traduccion literaria, traduccion cientifico-tecnica,
traduccion comercial, manga, anime, videojuegos, libros, literatura, ensayos, tesis, articulos periodisticos, nihongo, supeingo, 翻訳, 日本語, スペイン語' />
<meta name='language' content='es-AR' />
<meta name='revisit-after' content='30 days' />
<meta name='rating' content='general' />
<meta name='author' content='Juan Carlos Vejo' />
<meta name='owner' content='Del Autor' />
<meta name='robot' content='index, follow' />
<meta name='distribution' content='global' />
<meta name='copyright' content='Del Autor' />
<meta property="og:title" content="Del Autor" />
<meta property="og:description" content="Traducciones japonés - español" />
<meta property="og:image" content="http://www.delautor.com/images/japon.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:url" content="http://www.delautor.com/" />
<meta property="og:type" content="website" />
<noscript>Su navegador no soporta JavaScript, o se encuentra desactivado. Por favor, verifique la configuración de su navegador.</noscript>
	</head>
	<body>
<?php include_once("analyticstracking.php") ?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong><?php echo TITLE; ?>&nbsp </strong><?php echo SUBTITULO; ?> </a>
									<ul class="icons">
										<li><a href="https://www.linkedin.com/company/delautor" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
										<li><a href="https://www.facebook.com/Del-Autor-248377882236571/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="mailto:info@delautor.com" target="_blank" class="icon fa-envelope-o"><span class="label">E-mail</span></a></li>
										<!--<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li> -->
									</ul>
								</header>

							<!-- Banner -->
								<a name='qs'>	<section id="banner"></a>
									<div class="content">
										<header>
										<h1>Del Autor<br />
											</h1>
											<p><?php echo QS; ?></p><p>
												<?php echo QS2; ?></p>
											<p>	<?php echo QS3; ?></p>
										</header>
										<p></p>
									<!--	<ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul> -->
									</div>
									<span class="image object">
										<img src="images/reunion.jpg" alt="Bienvenidos a Del Autor, centro de traducción de japonés a español" />
									</span>
								</section>

							<!-- Section -->
							<a name='como'>	<section></a>
									<header class="major">
										<h2><?php echo SUBTITULO2; ?></h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa fa-graduation-cap" aria-hidden="true"></span>
											<div class="content">
												<h3><?php echo TAREA1; ?></h3>
												<p><?php echo DETALLE1; ?></p>
											</div>
										</article>
										<article>
											<span class="icon fa fa-map-marker" aria-hidden="true"></span>
											<div class="content">
												<h3><?php echo TAREA2; ?></h3>
												<p><?php echo DETALLE2; ?></p>
											</div>
										</article>
										<article>
											<span class="icon fa-pencil"></span>
											<div class="content">
												<h3><?php echo TAREA3; ?></h3>
												<p><?php echo DETALLE3; ?></p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3><?php echo TAREA4; ?></h3>
												<p><?php echo DETALLE4; ?></p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
								<a name='que'>	<header class="major"></a>
										<h2><?php echo SUBTITULO3; ?></h2>
									</header>
									<div class="posts">

										<article>
											<a  class="image"><img src="images/libro.jpg" alt="Traducciones literarias" /></a>
											<h3><?php echo TRADUCCIONES1; ?></h3>
											<p><?php echo ACLARACION1; ?></p>

										</article>
										<article>
											<a  class="image"><img src="images/comercial.jpg" alt="Traducciones comerciales" /></a>
											<h3><?php echo TRADUCCIONES2; ?></h3>
											<p><?php echo ACLARACION2; ?></p>

										</article>
										<article>
											<a  class="image"><img src="images/academico.jpg" alt="Traducciones científico-técnicas" /></a>
											<h3><?php echo TRADUCCIONES3; ?></h3>
											<p><?php echo ACLARACION3; ?></p>

										</article>
										<article>
											<a class="image"><img src="images/web.jpg" alt="Traducciones web" /></a>
											<h3><?php echo TRADUCCIONES4; ?></h3>
											<p><?php echo ACLARACION4; ?></p>

										</article>

									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" >
						<div class="inner">

							<!-- Search -->
							<!--	<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2><?php echo MENU; ?></h2>
									</header>
									<ul>

								<!--	<li>
											<span class="opener">対応言語</span>
											<ul>
												<li><a href="#">日本語</a></li>
												<li><a href="#">Español</a></li>

											</ul>
										</li>-->

										<form name="formu1" method="post" action="index.php">
    <fieldset>

    <select name="idioma" onchange="document.formu1.submit();">
			<option selected='selected'><?php echo IDIOMA; ?></option>
			<option value="espanol">Español</option>
      <option value="japones">日本語</option>
    </select>
    <!--<input type="submit" value="<?php echo ELEGIR; ?>" /> -->
    </fieldset>
  </form>
										<li><a href="#que"><?php echo SUBTITULO3; ?></a></li>
										<li><a href="#como"><?php echo SUBTITULOMENU; ?></a></li>
										<li><a href="#qs"><?php echo SUBTITULOMENU2; ?></a></li>

								</nav>

							<!-- Section -->
							<!--	<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
								<section>
									<header class="major">
										<h2><?php echo CONTACTO; ?></h2>
									</header>
									<p><?php echo COMENTARIO; ?></p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="mailto:info@delautor.com" target="_blank">info@delautor.com</a></li>
									<!--	<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li> -->
									</ul>
								</section>

							<!-- Footer -->
						<!--		<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer> -->

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>