<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Página web en mantenimiento</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Ejemplo práctico de aplicación del posicionamiento fijo"/>
	<meta name="author" content="francesc ricart"/>
	<style>
		/*TIPOGRAFÍAS*/
		@import url('https://fonts.googleapis.com/css?family=Noto+Sans');
		/*INICIALIZACIÓN DE ESTILOS*/
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}

		body{background-color:#f6f6f6;}

		/*PERSONALIZACIÓN DE P.MANTENIMIENTO*/
		.mantenimiento{
			width:600px;
			height:400px;
			padding:32px;
			border:1px solid #000;
			border-radius:10px;
			margin-top:-200px;
			margin-left:-300px;
			background-color:#fff;
			position:fixed;
			top:50%;
			left:50%;
		}
		.mantenimiento h1, .mantenimiento h2, .mantenimiento p{
			font-family:"noto sans", sans-serif;
		}

		.mantenimiento h1{
			font-size:3em;
			text-align:center;
			padding:16px;
		}
		.mantenimiento h2{
			font-size:2em;
			font-style:italic;
		}
		.mantenimiento p{
			margin:16px 0;
			line-height:1.5em;
		}

	</style>
</head>
<body>
	<div class="mantenimiento">
		<h1>Página web en construcción</h1>
		<p>Lo sentimos, no hemos encontrado un mensaje más original para decirte que estamos trabajando en ello.</p>
		<h2>Web disponible en:</h2>
		<p class="casio" id="reloj">10:00:00</p>
	</div>
</body>
</html>
