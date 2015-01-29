<html>
	<head>
		<title> Sorakairi's Winterwolf </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<link rel="shortcut icon" href="Grafica/portale.png">
		<script type = "text/javascript">
			
			function Clear()
			{	
				document.getElementById("TXT").value = "";
			}
		
		</script>
		<div style = "top : 72%; left : 0; position : fixed;">
			<script type="text/javascript">
			/* <![CDATA[ */
				document.write('<s'+'cript type="text/javascript" src="http://ad.altervista.org/js.ad/size=320X250/r='+new Date().getTime()+'"><\/s'+'cript>');
			/* ]]> */
			</script>
		</div>
		
		<style>
			#boxparola
			{
				margin : 1% 32%;
				padding : 2% 4%;
				width : 30%;
				height : 10%;
				opacity: 0.5; 
				border: 1px ridge rgb(136, 136, 136); 
				box-shadow: rgb(0, 0, 0) 0px 0px 50px 21px inset; 
				background-color: rgb(255, 255, 255);
				position : fixed;
			}
			
			iframe
			{
				margin : 0 20%;
				width : 60%;
				height : 72%;
				z-index : 100;
			}
			
			#chat
			{
				width : 100%;
				height : 100%;
				top : 0%;
				left : 0%;
				position : fixed;
				z-index : -1;
			}
			
			#shortcut
			{
				width : 16%;
				top : 40%;
				left : 1%;
				position : fixed;
			}
			
			#sele
			{
				width : 16%;
				top : 48%;
				left : 1%;
				position : fixed;
			}
			
			#dict
			{
				width : 9%;
				top : 54%;
				left : 4%;
				position : fixed;
			}
			
			#mess
			{
				width : 15%;
				top : 60%;
				left : 1%;
				position : fixed;
			}		
			
		</style>
	</head>
	<body>
	<img src = "Grafica/shortcut.png" id = "shortcut"> </img> </a>
	<a href = "select.html" target = "_blank"> <img src = "Grafica/selefromchat.png" id = "sele"> </img> </a>
	<a href = "dizionario.html" target = "_blank"> <img src = "Grafica/dictfromchat.png" id = "dict"> </img> </a>
	<a href = "chatita.txt" download = "chat.txt"> <img src = "Grafica/downmess.png" id = "mess"> </img> </a>
	
	<iframe src = "chat.php" frameborder = "0" noresize = "noresize" name = "chatbox" id = "chatbox">
	</iframe>

	<img src = "Grafica\chatback.jpg" id = "chat"></img>
	<form enctype = "multipart/form-data" method = "POST" action = "chat.php" target = "chatbox">
		<div id = "boxparola">
			<input type = "text" placeholder = "Scrivi un messaggio..." name = "TXT" id = "TXT" onclick = "Clear()" style="width: 100%"> </input> <br> </br>
			<input type = "text" placeholder = "Scrivi un nickname..." name = "nome" id = "nome" style="width: 50%"> </input>
			<input type = "submit" value = "Invia" id = "Invia"> </input>
		</div>
	</form>
	
	</body>
</html>