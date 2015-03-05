<html>
<head>
		<script type = "text/javascript" src = "jquery.js"></script>
		<script type = "text/javascript">
			
			/*setInterval(function () {
				$("#text1").load("http://sorakairiwinterwolf.altervista.org/chatita.txt");
				var scroll = $('#text1').scrollTop();
				$('#text1').scrollTop(scroll);
			}, 1000);*/
			
			$(document).ready(function(){
				$("#text1").load(function(){
					$.get("http://sorakairiwinterwolf.altervista.org/chatita.txt", function(data, status){
					alert("Data: " + data + "\nStatus: " + status);
					});
				});
			});
			
			$(document).ready(function(){
				$("#text1").load(function(){
					$.post("http://sorakairiwinterwolf.altervista.org/chatita.txt", function(data, status){
					alert("Data: " + data + "\nStatus: " + status);
					});
				});
			});
			
		</script>
		<style>
			
			#text1
			{
				padding : 5% 5%;
				background: -webkit-linear-gradient(DarkGray, Orchid);
				background: -o-linear-gradient(DarkGray, Orchid); 
				background: -moz-linear-gradient(DarkGray, Orchid); 
				background: linear-gradient(DarkGray, Orchid); 
                box-shadow: rgb(0, 0, 0) 0px 0px 50px 21px inset; 
				font-family: "Times New Roman", Times, serif;
				font-size : 14px;
				width : 99%;
				height : 98%;
				position : fixed;
			}
			
			#chatbox
			{
				width : 100%;
				height : 100%;
				position : fixed;
			}
			
		</style>
		<link rel="shortcut icon" href="Grafica/portale.png">
</head>

<body>
<textarea readonly name = "chatbox1" id = "text1"> </textarea>

<?php
	
	if($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		if($_POST['TXT'] != "")
		{
			if($_POST['nome'] == "")
				$name = "Utente";
			 
			else
				$name = $_POST['nome'];
				
			$chat = fopen("chatita.txt", "a+");
			$message = $name . ": " . $_POST["TXT"] . "\r\n";
			$length = strlen($message);
			if($length < 200)
				fwrite($chat, $message);
			fclose($chat);
		}
	}
?>
</body>
</html>