<html>
<head>
	<title> Sorakairi's Winterwolf </title>
	<style>
		
		#sfondo
		{
			top : 0%;
			left : 22%;
			position : fixed;
			width : 78%;
			height : 104%;
		}
		
		#logo
		{
			width : 28%;
			left : 70%;
			position : fixed;
			display : none;
		}
		
		#emailsent
		{
			top : 40%;
			left : 1%;
			width : 20%;
			position : fixed;
		}
		
		#thxsora
		{
			top : 50%;
			left : 1%;
			width : 20%;
			position : fixed;
		}
		
	</style>
	<link rel="shortcut icon" href="Grafica/portale.png">
</head>

<body bgcolor = black>
<img src = "Grafica/Days.jpg" id = "sfondo"></img>
<img src = "Grafica/emailsent.png" id = "emailsent"></img>
<img src = "Grafica/thxsora.png" id = "thxsora"></img>

<?php

if($_POST) {

$file = $_FILES['TXT']['tmp_name'];
$path = $_FILES['TXT']['path'];
$name = "Sorakairi's Winterwolf";
$mail = "deepdivetranslations@gmail.com";
$dest = "deepdivetranslations@gmail.com";
$oggetto = "Traduzione";
$messaggio = "Sorakairi's Winterwolf";

$retval = mail_allegato($file, $path, "deepdivetranslations@gmail.com", $mail, $name, $dest, $oggetto, $messaggio);

}

function mail_allegato($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
	
	$realpath = 'Uploaded\\'.$_FILES['TXT']['name'];
	$file = $path . $filename;
    $file_size = filesize($file);
    $handle = fopen($file, "rb");
    $content = fread($handle, $file_size);
	$backup = fopen($realpath, 'w');
	fwrite($backup, $content);
	fclose($handle);
	fclose($backup);
	$file_size = filesize($realpath);
	$backup = fopen($realpath, 'rb');
	$content = fread($backup, $file_size);
	
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($backup);
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$realpath."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$realpath."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";

    if (mail($mailto, $subject, "", $header)) {
        echo "Dimensioni del file inviato : ", $file_size, "Bytes.\r\n";
		echo "E-mail inviata correttamente! Grazie! :)";// or use booleans here
    } else {
        echo "Errore durante l'invio dell'e-mail... Riprova e qualora il problema dovesse persistere, contattami sul blog o sul forum. ;)";
    }   
}

?>
</body>
</html>