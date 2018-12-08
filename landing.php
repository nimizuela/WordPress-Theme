<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Meta -->
		<meta charset="utf-8" />
		<meta name="viewport"	content="width=device-width, initial-scale=1" />
		<meta name="description" content="...dando a conocer Nimiq en Venezuela" />
		<!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
		<title><?php bloginfo('name'); ?></title>
		<!-- Libraries -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/three.min.js"></script>
		<script type="text/javascript" src='https://www.google.com/recaptcha/api.js?hl=es-419'></script>
		<!-- Main -->
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/moon.css" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/moon.js"></script>
		<!-- Analytics -->

		<!-- Socials -->
		<!-- Open Graph -->
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:url" content="/" />
<meta property="og:image" content="<?php echo get_template_directory_uri();?>/images/moon.png" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nimizuela" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />
<meta name="twitter:image" content="<?php echo get_template_directory_uri();?>/images/moon.png" />


	</head>
	<body>
		<script>
			if (location.pathname.endsWith("index.html")) {
				location.replace(location.href.replace("index.html", ""));
			}
		</script>
		<script type="text/javascript">
			var template_directory_uri = "<?php echo get_template_directory_uri(); ?>";
		</script>
		<div id="main-container" class="wrapper-page bg-picture">
		<main class="page-main">
		<div class="js-flag-canvas"></div>
			</main>
		</div>
		<div class="header">
			<div id="faucet" style="display: none;">
				<div id="follow">
					¡<a href="https://faucet.nimizuela.tk">Síguenos en Twitter</a> y consigue NIM gratis!<br>
					<a href="https://nimizuela.org/es/2018/08/04/nimiq-la-primera-cadena-de-bloques-basada-en-el-navegador-web.html" target="_blank">...o crea una cuenta Nimiq para recibirlos si aún no la tienes.</a>
				</div>
<!--
				<div id="follow">
					¡<a href="https://twitter.com/nimizuela" target="_blank" onclick="javascript:document.getElementById('earn').style.display = 'block';document.getElementById('follow').style.display = 'none';">Síguenos en Twitter</a> y consigue NIM gratis!<br>
				</div>
				<div style="display: none;" id="earn">
					¡Ahora ingresa tu dirección para recibir los NIM!
					<form action="http://faucet.learnlake.com:8080/venz" method="POST" onsubmit="javascript:return submitForm(this);">
						<input type="text" placeholder="&lt; dirección &gt;" name="addr" id="addr"/>
						<div class="center-recaptcha">
							<div class="g-recaptcha" data-sitekey="6LdlolMUAAAAABXcooP5D-iO1Jntcq_Tvq-FA_Ea" data-theme="dark"></div>
						</div>
						<button class="btn" type="submit" value="Get NIM!">¡Obtener los NIM!</button>
					</form>
					<a href="https://nimizuela.org/es/2018/08/04/nimiq-la-primera-cadena-de-bloques-basada-en-el-navegador-web.html" target="_blank">...o crea una cuenta si aún no la tienes.</a>
				</div>
				<div style="display: none;" id="confirmation">
				</div>
-->
			</div>
		</div>
		<div class="menu">
			<h2>Proyecto</h2><h2>Nimizuela</h2>
			<ul id="language-selector">
				<li><a href="<?php bloginfo('url'); ?>/blog/">Español</a></li>
				<li><a href="<?php bloginfo('url'); ?>/en/blog-2/">English</a></li>
			</ul>
		</div>
		<div>
			<?php wp_footer(); ?>
		</div>
	</body>
	<script type="x-shader/x-fragment" id="fragmentShaderDepth">
		uniform sampler2D texture;
		varying vec2 vUV;
		vec4 pack_depth( const in float depth ) {
		const vec4 bit_shift = vec4( 256.0 * 256.0 * 256.0, 256.0 * 256.0, 256.0, 1.0 );
		const vec4 bit_mask  = vec4( 0.0, 1.0 / 256.0, 1.0 / 256.0, 1.0 / 256.0 );
		vec4 res = fract( depth * bit_shift );
		res -= res.xxyz * bit_mask;
		return res;
		}
		void main() {
		vec4 pixel = texture2D( texture, vUV );
		if ( pixel.a < 0.5 ) discard;
		gl_FragData[ 0 ] = pack_depth( gl_FragCoord.z );
		}
	</script>
	<script type="x-shader/x-vertex" id="vertexShaderDepth">
		varying vec2 vUV;
		void main() {
		vUV = 0.75 * uv;
		vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
		gl_Position = projectionMatrix * mvPosition;
		}
	</script>
	<script type="text/javascript">
		window.onload = function() {
			$.get("https://extreme-ip-lookup.com/json/", function(response) {
				if (response.countryCode == "VE") {
					$("#faucet").show();
				}
			}, "jsonp");
		}
	</script>
<!--
	<script type="text/javascript">
		function submitForm(formElement) {
			var iframe = document.createElement("iframe");
			var uniqueString = "iframe-id";
			document.body.appendChild(iframe);
			iframe.style.display = "none";
			iframe.contentWindow.name = uniqueString;
			formElement.target = uniqueString;

			var inter = window.setInterval(function() {
				if (iframe.contentWindow.document.readyState === "complete") {
					window.clearInterval(inter);
					var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
					var content = iframeDocument.innerHTML;
	  				if (typeof content !== "undefined") {
						document.getElementById('earn').style.display = 'none';
						var confirmationElement = document.getElementById('confirmation');
						confirmationElement.style.display = 'block';
						confirmationElement.innerText = "¡Tu solicitud fue procesada con éxito!";
					} else {
						document.getElementById('earn').style.display = 'none';
						var confirmationElement = document.getElementById('confirmation');
						confirmationElement.style.display = 'block';
						confirmationElement.innerText = "¡Has hecho demasiadas solicitudes! ...Prueba de nuevo más tarde.";
					}
				}
			}, 100);

			formElement.submit();
			return false;

			/*
			var xhr = new XMLHttpRequest();
			xhr.onload = function() {
				document.getElementById('earn').style.display = 'none';
				var confirmationElement = document.getElementById('confirmation');
				confirmationElement.style.display = 'block';
				confirmationElement.innerText = "¡Tu solicitud fue procesada con éxito!";
			}
			xhr.onerror = function(){
				document.getElementById('earn').style.display = 'none';
				var confirmationElement = document.getElementById('confirmation');
				confirmationElement.style.display = 'block';
				confirmationElement.innerText = "¡Has hecho demasiadas solicitudes! ...Prueba de nuevo más tarde.";
			}
			xhr.open(formElement.method, formElement.action, true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send("addr=" + formElement.elements["addr"].value + "&g-recaptcha-response=" + formElement.elements["g-recaptcha-response"].value);
			return false;
			*/
		}
	</script>
-->
</html>