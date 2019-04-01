<!DOCTYPE html>
<html>
	<head>
		<title>Translator</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="translator.css">
		<script src="translator.js"></script> 
	</head>
	<body>
        <!-- create navigation bar -->
        <div class='navbar' id='navbarid'>
	        <a href='index.php' class='active'>Home</a>
			<a href='about.php'>About</a>
			<a href='contact.php'>Contact</a>
			<button class='icon' onclick='toggleNavbarStyle()'><i class='fa fa-bars'></i></button>
		</div>
		<div class="content">
			<h1>Translator English to German</h1>
		</br>
		<?php		         
			/* Defining a PHP Function to translate the text */
			function translate($text) {
				return strtoupper(htmlspecialchars($_GET["textToTranslate"]));
			}
		
			/* init values */
			$textToTranslate = "";
			$translation = "";

			if(isset($_GET['textToTranslate'])) {
				$textToTranslate = $_GET['textToTranslate'];
				$translation = translate($textToTranslate);
			}

			echo "<form action='index.php' method='get'>
					<h3>Text to translate (English):</h3>
					<p><input name='textToTranslate' value='" . $textToTranslate . "'/></p>
				    <br>
				    <h3>Translation (German):</h3>
				    <input name='translation' value='" . $translation . "' readonly><br><br>
				    <button type='submit'>Translate</button>
				    </form><br>";

			echo "<form action='export.php' method='get'>
					<input name='textToTranslate' type='hidden' value='" . $translation . "'>
					<input name='translation' type='hidden' value='" . $textToTranslate . "'>
				    <button id='save-btn' type='submit'>Save</button>
				    </form>";
					?>
			<br>
			<br>
			<h1>How-To</h1>

			 <video id="tutorial" controls>
				  <source src="tutorial.mp4" type="video/mp4">
			</video> 
		</div>
	</body>
</html>