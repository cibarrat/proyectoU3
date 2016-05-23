<?php
	include_once('conexion.inc.php');
	$link=conectar();
	$qry_libros="call sp_lista_libros()";
    $rst_libros=$link->Execute($qry_libros);
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Libros - Caf&eacute; y libros</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="grafico.html">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<li class="active">
					<a href="catalogo.html">Cat&aacute;logo</a>
				</li>
				<li>
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
			<h1>Cat&aacute;logo</h1>
			<ul class="libro">
				<?php
					if($rst_libros->RecordCount()){
						while(!$rst_libros->EOF){
				?>
				<li>
					
					<h2><?php print $rst_libros->fields('titulo'); ?><span class="author"><?php print $rst_libros->fields('autor'); ?></br><?php print $rst_libros->fields('genero'); ?> </br>A&ntilde;o: <?php print $rst_libros->fields('ano'); ?></br><?php print $rst_libros->fields('edicion'); ?></br>Editorial: <?php print $rst_libros->fields('editorial'); ?></br>P&aacute;ginas: <?php print $rst_libros->fields('pags'); ?></span></h1>
					<p>
						<?php print $rst_libros->fields('sinopsis'); ?>
					</p>
				</li>
						<?php
							$rst_libros->MoveNext();
							}
						}?>
			</ul>
		</div>
		<div class="sidebar">
			<h1>Buscar</h1>
			<ul class="posts">
				
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2016 C&eacute;sar Ibarra Trejo.
			</p>
		</div>
	</div>
</body>
</html>