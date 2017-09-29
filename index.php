<html>
<head>
	<title>HackUPC Mockup generator</title>
</head>
<body>
	<style>
		body{ background-color:#FFFFFF;}
		#ex3_container { width:100%; height:100%; background-color:#FFFFFF; position:relative; }
		#ex3_content { width: 90%; left:50%; top:50%; transform:translate(-50%,-50%); -webkit-transform:translate(-50%,-50%); position:absolute; }
		.lletra{
			font-family: 'Open Sans', arial, sans-serif;
			color: #222;
			text-align: center;
			font-weight: 900;
			font-size: 28px;
		}
		.lletra2{
			font-family: 'Open Sans', arial, sans-serif;
			color: #222;
			text-align: center;
			font-weight: 500;
			font-size: 16px;
		}
		.imatge{
			max-width: 100% !important;
			width: 450px;
		}
	</style>
	<div id="ex3_container">
		<div id="ex3_content">
			<p class="lletra">HackUPC hoodies mockup generator</p>
			<?php
				if(!isset($_POST['nom'])){
					$_POST['nom'] = "";
				}
				if(!isset($_POST['emo'])){
					$_POST['emo'] = "";
				}
			?>
			<form action="" method="post" style="display: block; text-align: center;">
				<input style="border: none; background-color: #f7f7f7;" class="lletra2" type="text" placeholder="Desired text" name="nom" value="<?php echo $_POST['nom']; ?>" />
				<input style="border: none; background-color: #f7f7f7;" class="lletra2" type="text" placeholder="Desired emoji" name="emo" value="<?php echo $_POST['emo']; ?>" />
				</br>
				</br>
				<input style="background-color: #222; border: none; color: #FFF !important; padding: 5px 15px;" class="lletra2" type="submit" name="Submit" value="Update" />
			</form>
			<?php
				if(!(($_POST['nom']=="")&&($_POST['emo']==""))){
					?>
						<a style="text-align: center; display: block; color: #222;" class="lletra2" href="<?php echo "http://ecesummer.com/hackupc/generar.php?nom=".$_POST['nom']."&emoticona=".$_POST['emo']; ?>" target="_blank"><?php echo "http://ecesummer.com/hackupc/generar.php?nom=".$_POST['nom']."&emoticona=".$_POST['emo']; ?></a>
					<?php
				}
			?>
			</br>
			<a style="text-align: center; display: block; color: #222;" class="lletra2" href="<?php echo "http://ecesummer.com/hackupc/generar.php?nom=".$_POST['nom']."&emoticona=".$_POST['emo']; ?>" target="_blank">
				<img src="generar.php?nom=<?php echo $_POST['nom']; ?>&emoticona=<?php echo $_POST['emo']; ?>" alt="Imatge generada a través d'un script PHP" style="margin-left: auto; margin-right: auto; display: block;" height="400px">
			</a>
			</br>
			<p class="lletra2">Made with PHP and love in less than 60 minutes.</p>
		</div>
	</div>
</body>
</html>