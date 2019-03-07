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
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="icon" href="img/ice.ico" type="image/x-icon" />
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
			<div class="nav_mobile">
				<input type="checkbox" id="burger-shower" class="burger-shower">
				<label for="burger-shower" class="hamburger">	
					<div class="wrapper-menu">
				  		<div class="line-menu half start"></div>
  						<div class="line-menu"></div>
  						<div class="line-menu half end"></div>
					</div>
				</label>
				<div class="burger-menu">
					<a href="?link=2" name="link2"><label for="burger-shower">LIÐIÐ</a><hr><a href="?link=3" name="link3">KEPPNIN</a><hr><a href="?link=4" name="link4">STYRKTARAÐILAR</a><hr><a href="?link=5" name="link5">FRÉTTIR</a>
				</div>
			</div>
			<hr>
		</div>
	</header>
	<div class="a_a"></div>
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
    <div class="footer">
	    
	    	<div class="foot-left">
	    		<div class="icon">
					<a href="?link=1" name="link1"><img class="foot-icon" src="img/icon.png"></a>
				</div>
	    	</div>
	    	
	    	<div class="foot-center">
	    		<p><a href="http://www.facebook.com/FirstGlobalIceland/"><img src="img/fb.png"></a>
	    		<a href="http://www.instagram.com/firstglobaliceland/"><img src="img/insta.png"></a><a href="http://www.github.com/KormakurAtli/velmenni.is"><img src="img/github.png"></a></p>
	    	</div>
	    	
	    	<div class="foot-right" style="width: 250px">
	    		<p><b>Tengiliður</b><br><br>Eyþór Máni Steinarsson<br><a href="mailto:e@moon.do?subject=Fyrirspurn varðandi landsliðið í vélmennaforritun">e@moon.do</a><br><a href="tel:+3546631806">663-1806</a></p>
	    	</div>
    </div>
</body>
<script type="text/javascript" src="js/menu_icon.js"></script>
</html>