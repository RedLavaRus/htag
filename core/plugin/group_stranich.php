<?php
$ru_plugin_plus++;
$plugin_RL_init_name = "plugin_RL_init_".$ru_plugin_plus;
$$plugin_RL_init_name = new Plugin;
$$plugin_RL_init_name -> name = "group_stranich";
$$plugin_RL_init_name -> version = "v.0.0.1";
$$plugin_RL_init_name -> autor = "JaligWei";
$$plugin_RL_init_name -> websiteautor = "redlava.ru";


class Group_stranich
{
	public $l;
	public function heshtag_nabor_vivod_group($pdo,$url_in)
	{

				$sth = $pdo->prepare("SELECT * FROM `tage.group`");
				$sth->execute();				
				while($array = $sth->fetch(PDO::FETCH_ASSOC))
				{
					$cfg = new configs;
					echo "<a href='"."/nabori-heshtegov/".$array["url"]."'>";
					echo '<div class="item_heah_tag"> ';
					echo '<img src="'.$cfg->url_web."img/group/".$array["img"].'">';
					echo '<br><br><br>';
					echo '<p>';
					echo $array["name"];
					echo '</p>';
					echo '</div></a>';
				}

	}
	public function heshtag_nabor_vivod_pod_group($pdo,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10)
 	{
 			$tek_poloj = $p1;
 			if($p2 != ""){$tek_poloj = $p2;}
 			if($p3 != ""){$tek_poloj = $p3;}
 			if($p4 != ""){$tek_poloj = $p4;}
 			if($p5 != ""){$tek_poloj = $p5;}
 			if($p6 != ""){$tek_poloj = $p6;}
 			if($p7 != ""){$tek_poloj = $p7;}
 			if($p8 != ""){$tek_poloj = $p8;}
 			if($p9 != ""){$tek_poloj = $p9;}
 			if($p10 != ""){$tek_poloj = $p10;}

			//echo $tek_poloj;
		
 			
				$sth = $pdo->prepare("SELECT * FROM `tage.podgroup` WHERE `roditel` = ? ");
				$sth->execute(array("$tek_poloj"));	
							
				while($array = $sth->fetch(PDO::FETCH_ASSOC))
				{
					
					echo "<a href='"."/nabori-heshtegov/".$tek_poloj."/".$array["url"]."'>";
					echo '<div class="item_heah_tag_i"> ';
					echo ' ';
					echo '<p>';
					echo $array["name"];
					echo '</p>';
					echo '</div></a>';
				}
	}
	

}


?>
