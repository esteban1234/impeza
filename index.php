<?php include 'vistas/encabezado.php' ?>

<body>
<article class="contenheader">
<!-- <p></p> -->
	<header>
		<i class="fa fa-bars menu-abrir" aria-hidden="true"></i>
		<i class="fa fa-sort-asc menu-cerrar" aria-hidden="true"></i>
		<figure class="img-logo"><img src="img/impezaa.png" class="img-responsive" alt=""></figure>
		<div id="menu" class="menu">
			<ul>
				<li class="select"><a href=""><span><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp;INICIO</a></li>
				<li><a href="vistas/nosotros.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>&nbsp;QUIENES SOMOS</a></li>
				<li><a href="vistas/servicios.php"><span><i class="fa fa-suitcase" aria-hidden="true"></i></span>&nbsp;SERVICIOS</a></li>
				<li><a href="vistas/contacto.php"><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;CONTACTO</a></li>
			</ul>
		</div>
	</header>

	

	<article class="banner">
		<p class="tit text-primary">LIMPIEZA COMPLETA!</p>
		<p class="subtit">Limpiamos centros de trabajo</p>
	</article>

	<div class="btn-toolbar botonb" role="toolbar">
		  <a href="vistas/contacto.php">
		  	<button onclick="" type="button" class="btn btn-primary btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Contáctanos
		  	</button>
		  </a>
	</div>
</article>


<article class="contenedor">
<h1 class="alserv text-primary">Algunos de nuestros servicios</h1>

<article class="contenserv">
<div class="contendivs">
	<div class="imagen">
	<article class="icono"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Limpieza</article>
		<div class="info">
			<p class="headline">Limpieza</p>
			<p class="info2">Mantenemos sus instalaciones limpias y en buen estado, convirtiendolas en un espacio agradable que les permita realizar sus actividades como coresponden.</p>
		</div>
	</div>

		<div class="imagen3">
	<article class="icono"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Vigilancia</article>
		<div class="info">
			<p class="headline">Vigilancia</p>
			<p class="info2">Mantenemos sus instalaciones seguras, contamos con guardias de seguridad con experiencia en el área.</p>
		</div>
	</div>

	<div class="imagen2">
	<article class="icono2"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;CCTV</article>
		<div class="info">
			<p class="headline">CCTV</p>
			<p class="info2">Monitoreo de inmuebles con alarmas, sensores, Cámaras Digitales y analógicas. Cámaras IP, para vigilancia nocturna, fijas y PTZ.</p>
		</div>
	</div>


</div>

<div class="btn-toolbar boton" role="toolbar">
  <a href="vistas/servicios.php">
		  	<button onclick="" type="button" class="btn btn-primary btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Servicios
		  	</button>
		  </a>
</div>

</article>

<article class="bannerindexabajo">
<figure class="img-impeza"><img src="img/impeza.png" class="img-responsive" alt=""></figure>
	<p>Somos la mejor inversión en personal de vigilancia para sus oficinas.</p>
	<div class="btn-toolbar boton" role="toolbar">
  <a href="vistas/contacto.php">
		  	<button onclick="" type="button" class="btn btn-primary btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Contáctanos
		  	</button>
		  </a>
</div>
</article>

</article>

<?php include 'vistas/pie.php' ?>

<!-- <span class="ir-arriba icon-chevron-up"></span> -->
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
