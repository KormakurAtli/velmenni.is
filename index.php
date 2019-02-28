<!--
Kormákur Atli
kormakur.is
2019
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<div class="header">
			<hr>
			<div class="icon">
				<a href="?link=1" name="link1"><img class="img" src="img/icon.png"></a>
			</div>
			<div class="nav">
				<a href="?link=2" name="link2">LIÐIÐ</a><!--
				--><a href="?link=3" name="link3">KEPPNIN</a><!--
				--><a href="?link=4" name="link4">STYRKTARAÐILAR</a><!--
				--><a href="?link=5" name="link5">FRÉTTIR</a>
			</div>
			<hr>
		</div>
	</header>
		<?php
        $link=$_GET['link'];
        if ($link == '1'){
             include 'pages/main.php';
        }
        if ($link == '2'){
            include 'pages/lidid.php';
        }
        if ($link == '3'){
            include 'pages/keppnin.php';
        }
        if ($link == '4'){
            include 'pages/styrktaradilar.php';
        }
        if ($link == '5'){
            include 'pages/frettir.php';
        }
        if (!isset($_GET['link'])){
        	include 'pages/main.php';
        }
            ?>  
</body>
</html>