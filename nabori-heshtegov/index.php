<?php
require_once "../core/core.php";
echo "<!DOCTYPE html>";
echo "<html>";
require_once $cfg->url_hard."bloks/head.php";
echo "<body>";
require_once $cfg->url_hard."bloks/header.php";
$page_lvl = 2;
?>

<br>
<div class="contaner">
	<div class="header_box">
		 
	</div>
	<div class="mini_navig">
		<?php
		if($page_lvl == 1) { echo "<a href=\"".$cfg->url_web."\">Главная / </a>"; }
		if($page_lvl == 2) 
			{ 
				echo "<a href=\"".$cfg->url_web."\">Главная /</a> "; 
				echo " <a href=\"".$cfg->url_web."nabori-heshtegov/"."\"> Хештег наборы (Группы) /</a> "; 
			}
		?>
	</div>

	
	<div class="l_boc">
		<h1>Хештег наборы (Группы)</h1>
		<div class="item_heah_tag"> 
			<img src="https://image.flaticon.com/icons/png/128/104/104876.png"><br><br><br><p>Пиар</p>
		</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="item_heah_tag"> 1</div>
		<div class="clear"></div><br>
		<br><br>
		
	</div>
	<div class="r_boc">
		<?php 
			require_once $cfg->url_hard."bloks/aside.php";
		?>
	</div>

</div>
		<div class="clear"></div>
<br><br><br><br>
		<div class="clear"></div>
		<?php 
			require_once $cfg->url_hard."bloks/footer.php";
		?>
</body>
</html>
