<?php 
if ($_REQUEST["section"] == "contato"){
	require_once('phpMailer_v2.3/class.phpmailer.php');
	$phpmail = new PHPMailer();
	$phpmail->CharSet = 'UTF-8';
	$phpmail->IsSMTP();
	$phpmail->Host = "smtp.eleicoesdigitais.com.br";
	$phpmail->SMTPAuth = true;
	$phpmail->Username = "atendimento@eleicoesdigitais.com.br";
	$phpmail->Password = "roquelvis1";
	$phpmail->Port = 587;

	$phpmail->IsHTML(true);
	$phpmail->From = "atendimento@eleicoesdigitais.com.br";
	$phpmail->FromName = $_POST["nome"];


	//Destinatario
	$phpmail->AddAddress('atendimento@eleicoesdigitais.com.br', 'contato');
	$phpmail->AddReplyTo($_POST["email"], $_POST["nome"]);
	$phpmail->Subject = "Dados enviados pelo Contato do site Eleições Digitais";

	$phpmail->Body .= "Nome: ". $_POST["nome"]."<br />";
	$phpmail->Body .= "E-mail: ". $_POST["email"]."<br />";
	$phpmail->Body .= "Mensagem: ".nl2br($_POST["mensagem"])."<br />";

	$enviado = $phpmail->Send();

	if ($enviado) {
		print "
		<script>
		alert('Mensagem enviada com sucesso!');
		window.location.href='".$_SERVER["HTTP_REFERER"]."';
		</script>
		";

		} else {
		print "
		<script>
		alert('Tivemos um problema, tente novamente mais tarde!');
		window.location.href='".$_SERVER["HTTP_REFERER"]."';
		</script>
		";
		}
} else {

	require_once('phpMailer_v2.3/class.phpmailer.php');
	$phpmail = new PHPMailer();
	$phpmail->CharSet = 'UTF-8';
	$phpmail->IsSMTP();
	$phpmail->Host = "smtp.eleicoesdigitais.com.br";
	$phpmail->SMTPAuth = true;
	$phpmail->Username = "atendimento@eleicoesdigitais.com.br";
	$phpmail->Password = "roquelvis1";
	$phpmail->Port = 587;

	$phpmail->IsHTML(true);
	$phpmail->From = "atendimento@eleicoesdigitais.com.br";
	$phpmail->FromName = $_POST["nome"];


	//Destinatario
	$phpmail->AddAddress('atendimento@eleicoesdigitais.com.br', 'contato');
	$phpmail->AddReplyTo($_POST["email"], $_POST["nome"]);
	$phpmail->Subject = "Dados enviados pela página Aplicativo do site Eleições Digitais";

	$phpmail->Body .= "Nome: ". $_POST["nome"]."<br />";
	$phpmail->Body .= "Área de atuação: ". $_POST["area"]."<br />";
	$phpmail->Body .= "Cargo: ". $_POST["cargo"]."<br />";
	$phpmail->Body .= "Telefone: ". $_POST["telefone"]."<br />";
	$phpmail->Body .= "E-mail: ". $_POST["email"]."<br />";

	$enviado = $phpmail->Send();

	if ($enviado) {
		print "
		<script>
		alert('Mensagem enviada com sucesso!');
		window.location.href='".$_SERVER["HTTP_REFERER"]."';
		</script>
		";

		} else {
		print "
		<script>
		alert('Tivemos um problema, tente novamente mais tarde!');
		window.location.href='".$_SERVER["HTTP_REFERER"]."';
		</script>
		";
		}
}



?>
