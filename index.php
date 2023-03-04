<?php 
	require './vendor/autoload.php';
 
	$email = new PHPMailer\PHPMailer\PHPMailer();
	$smarty = new Template();

	Rotas::get_Pagina();
	

	$smarty->assign('nome', 'Matheus');

	$smarty->assign('siteHOME', Rotas::get_siteHOME());
	$smarty->assign('siteRAIZ', Rotas::get_siteRAIZ());

	//echo Rotas::pag_Carrinho();

	$smarty->display('index.html');
?>