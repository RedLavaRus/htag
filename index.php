<?php
require_once "core/core.php";
echo "<!DOCTYPE html>";
echo "<html>";
require_once $cfg->url_hard."bloks/head.php";
echo "<body>";
require_once $cfg->url_hard."bloks/header.php";
$page_lvl = 1;
?>

<br>
<div class="contaner">
	<div class="header_box">
		 
	</div>
<div class="mini_navig">
		<?php
  			$hleb = new Hleb_krosh;
  			$hleb -> fun_echo($pdo,$navigator ->url_lvl1,$navigator ->url_lvl2,$navigator ->url_lvl3,$navigator ->url_lvl4,$navigator -$url_lvl5,$navigator ->url_lvl6,$navigator ->url_lvl7,$navigator ->url_lvl8,$navigator ->url_lvl9,$navigator ->url_lvl10);
		?>
	</div>
	
	<div class="l_boc">
		<h1><?php
		$content_manager->print_h1($pdo,$navigator ->url_lvl1,$navigator ->url_lvl2,$navigator ->url_lvl3,$navigator ->url_lvl4,$navigator ->$url_lvl5,$navigator ->url_lvl6,$navigator ->url_lvl7,$navigator ->url_lvl8,$navigator ->url_lvl9,$navigator ->url_lvl10);

		?></h1>
		
		<p>
			<?php
		$content_manager->print_content($pdo,$navigator ->url_lvl1,$navigator ->url_lvl2,$navigator ->url_lvl3,$navigator ->url_lvl4,$navigator ->$url_lvl5,$navigator ->url_lvl6,$navigator ->url_lvl7,$navigator ->url_lvl8,$navigator ->url_lvl9,$navigator ->url_lvl10);

		?>
		</p>
		<h2>Наши сервисы</h2>
		<div class="l_dop_bl">
		<h3>Готовые наборы хештегов.</h3>
		<p>
			Мы прикладываем все усилия, что бы закрывать, хоть чутка важные темы. Плюс к этому мы ведем постоянное обновление. Ведь, держать актуальные данные очень важно. Например хештег зима2018 будет популярен только зимой 2018 года, а в 2020 будет крайне непопулярным.
			С учетом всех этих тенденций, мы формируем базу, действительно полезных хештегов.<br><br>
			<a href="<?php echo $cfg->url_web;?>nabori-heshtegov/"><div class="podrobno_p">ВОСПОЛЬЗОВАТЬСЯ СЕРВИСОМ</div></a>
		</p>
		</div>
		<div class="l_dop_bl">
		<h3>Полезные статьи и обучающие материалы.</h3>
		<p>
			Мы каждый день пробуем новые страдегии, для этого есть полевые аккаунты. Все данные анализируем, и делаем актуальные выводы. Изходя из наших иследований, мы формируем правила и гайды. 
			Мы не жадные и все наши материалы публикуем в общественый доступ, у нас на сайта. <br><br>
			<a href="<?php echo $cfg->url_web;?>stati/"><div class="podrobno_p">ВОСПОЛЬЗОВАТЬСЯ СЕРВИСОМ</div></a>
		</p>
		</div>
		<div class="l_dop_bl">
		<h3>Автогенератор хештегов.(Скоро).</h3>
		<p>В разработке</p>
		</div>
		<div class="l_dop_bl">
		<h3>Автогенератор публикаций (Разрабатываем ИИ).</h3>
		<p>В разработке</p>
		</div>
		<div class="clear"></div><br>
		<br><br>
		<div class="clear"></div><br>
		<h2>Последние обновления в хештегах</h2>
		<div class="clear"></div><br>
		<div class="l_dop_bl">Хештеги в краснодаре</div>
		<div class="l_dop_bl">Хештеги для тех кто в москве</div>
		<div class="l_dop_bl">Хештеги Россия</div>
		<div class="l_dop_bl">Хештеги ростов на дону</div>
		<div class="l_dop_bl">Хештеги Волгодонск</div>
		<div class="clear"></div><br>
		<h2>Последние обновления в каталоге статей</h2>
		<div class="clear"></div><br>
		<div class="l_dop_bl">Хештеги в краснодаре</div>
		<div class="l_dop_bl">Хештеги для тех кто в москве</div>
		<div class="l_dop_bl">Хештеги Россия</div>
		<div class="l_dop_bl">Хештеги ростов на дону</div>
		<div class="l_dop_bl">Хештеги Волгодонск</div>
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