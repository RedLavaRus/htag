<?php
require_once "../../core/core.php";
echo "<!DOCTYPE html>";
echo "<html>";
require_once $cfg->url_hard."bloks/head.php";
echo "<body>";
require_once $cfg->url_hard."bloks/header.php";
$page_lvl = 3;
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
		if($page_lvl == 3) 
			{ 
				echo "<a href=\"".$cfg->url_web."\">Главная /</a> "; 
				echo " <a href=\"".$cfg->url_web."nabori-heshtegov/"."\"> Хештег наборы (Группы) /</a> "; 
				echo " <a href=\"".$cfg->url_web."nabori-heshtegov/piar/"."\"> Пиар /</a> "; 
			}
		?>
	</div>

	
	<div class="l_boc">
		<h1>Хештег наборы (Группы)</h1>
		<?php

		?>

		<?php
		
		$group_stranich = new Group_stranich;
		//$group_stranich->heshtag_nabor_vivod_pod_group($pdo);
		?>
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