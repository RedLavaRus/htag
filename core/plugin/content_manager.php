<?php
$ru_plugin_plus++;
$plugin_RL_init_name = "plugin_RL_init_".$ru_plugin_plus;
$$plugin_RL_init_name = new Plugin;
$$plugin_RL_init_name -> name = "content_manager";
$$plugin_RL_init_name -> version = "v.0.0.1";
$$plugin_RL_init_name -> autor = "JaligWei";
$$plugin_RL_init_name -> websiteautor = "redlava.ru";


class Content_manager
{
 


 	public function print_h1($pdo,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10)
 	{


		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and     `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?  and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$p1","$p2","$p3","$p4","$p5","$p6","$p7","$p8","$p9","$p10"));				
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		
		echo $array["h1"];
		
		
 	} 	
 	public function print_content($pdo,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10)
 	{


		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and     `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?  and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$p1","$p2","$p3","$p4","$p5","$p6","$p7","$p8","$p9","$p10"));				
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		
		echo $array["content"];
		
		
 	}
}
$content_manager = new Content_manager;
