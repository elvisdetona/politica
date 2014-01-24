<?php 
$nomepagina = "Aplicativo inédito e exclusivo para campanhas eleitorais | "; 
?>
<?php include("head.php"); ?>
<body>
	<header role="banner" class="full interna aplicativo">
		<section class="wrapper">
			<span><a href="/"><img src="img/eleicoes-digitais.png" alt="Eleições Digitais - Comunicação Pública"></a></span>
			<?php include("menu.php"); ?>
		</section>
	</header>

	<main id="main" role="main" class="full bg">
		<div class="wrapper">
			<section class="content">
				<h1>Aplicativo inédito e exclusivo para campanhas eleitorais.</h1>
				
				<p>Em parceria com a Mobint, estamos desenvolvendo um aplicativo
mobile inédito para as próximas eleições. Por enquanto é segredo
de estado. Mas você pode ser um dos primeiros a testar o aplicativo.
Preencha os campos abaixo e envie pra gente. </p>

				<?php include("formulario-aplicativo.php"); ?>
				


			</section>
		</div>
		<?php include("footer.php"); ?>
	</main>

</body>
</html>