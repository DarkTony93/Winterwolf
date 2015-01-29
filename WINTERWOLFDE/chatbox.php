<html>
	<head>
		<title> Sorakairi's Winterwolf </title>
		<link rel="shortcut icon" href="Grafica/portale.png">
		<script type = "text/javascript">
			
			function Clear()
			{	
				document.getElementById("TXT").value = "";
			}
		
		</script>
		
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
			
		</style>
	</head>
	<body>
	
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