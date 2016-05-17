<?php
	include_once('conexion.inc.php');
	$link=conectar();
	$qry_noticias="call sp_obtener_noticias()";
    $rst_noticias=$link->Execute($qry_noticias);
	$meses[]= array('x','Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto','Septiembre','Noviembre','Diciembre');
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Noticias - Caf&eacute; y libros</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.html">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.html">Inicio</a>
				</li>
				<li>
					<a href="catalogo.html">Cat&aacute;logo</a>
				</li>
				<li class="active">
					<a href="noticias.php">Noticias</a>
				</li>
				<li>
					<a href="subir.html">Subir</a>
				</li>
				<li>
					<a href="contacto.html">Contacto</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="main">
			<h1>Noticias</h1>
			<ul class="news">
				<?php
					if($rst_noticias->RecordCount()){
						while(!$rst_noticias->EOF){
				?>
				<div class="date">
					<p>
						<span><?php print $rst_noticias->fields('Mes'); ?></span>
						<?php print $rst_noticias->fields('Ano'); ?>
					</p>
				</div>
				<h1><?php print $rst_noticias->fields('Titulo'); ?><span class="author"><?php print $rst_noticias->fields('Autor'); ?> <?php //print $meses[$rst_noticias->fields('Mes')]; ?> <?php print $rst_noticias->fields('Ano'); ?></span></h1>
				<p>
					<?php print $rst_noticias->fields('Contenido'); ?>
				</p>
					<?php
						$rst_noticias->MoveNext();
						}
					}?>
			</ul>
		</div>
		<div class="sidebar">
			<h1>Noticias Populares</h1>
			<ul class="posts">
				<?php
					//Codigo PHP
				?>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>