<?PHP 
$to = "renan@symphonyofthunder.net"; 
$subject = "Contato via Site";
$headers = "From: Form Mailer";
$forward = 0;
$location = "";

$date = date ("j.m.Y"); 
$time = date ("H:i"); 



$msg = "Mensagem Enviada em $date as $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mensagem Enviada com Sucesso</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Author" content="Sarkioja Webdesign - www.sarkioja.tk" />
<meta name="Language" content="pt-BR" />
<meta HTTP-EQUIV = "Refresh" CONTENT="3; URL=../news/">

<link rel="stylesheet" type="text/css" href="../includes/css/default.css" />
<link rel="shortcut icon" type="image/ico" href="../imgs/favicon.ico">
<script language="javascript" src="../includes/js/flash.js"></script>

<!--[if lt IE ]>

<link rel="stylesheet" type="text/css" href="../includes/css/ie.css" />

<![endif]-->



</head>

<body>
<div id="wrap">
		<div id="header">

		
		<script>flash('../includes/swf/top','618','180')</script>

		<noscript>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
	 	width="618" height="180">
		<param name="movie" value="../includes/swf/top.swf" />
		<param name="quality" value="high" />
		<param name="bgcolor" value="#000000" />
		<embed name="Menu" src="../includes/swf/top.swf" width="618" height="180" quality="high" bgcolor="#000000" 
		type="application/x-shockwave-flash" 
		pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
		</noscript>	

		</div>			
	  

	  <!-- content-wrap starts here -->
	  <div id="content-wrap">
	  
	  		<div id="main"> 
			<h1 class="decay">Contato </h1>
			<p>Sua mensagem foi enviada com sucesso. <br />
			Em breve retornaremos sua mensagem .<br />
			Obrigado .<br /></p>
			</div> 

<?php require_once("../sidebar.php");?>
		
<?php require_once("../footer.php");?>