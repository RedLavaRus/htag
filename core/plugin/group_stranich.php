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
	public function heshtag_nabor_vivod_group($pdo)
	{

				$sth = $pdo->prepare("SELECT * FROM `tage.group`");
				$sth->execute();				
				while($array = $sth->fetch(PDO::FETCH_ASSOC))
				{
					$cfg = new configs;
					echo '<div class="item_heah_tag"> ';
					echo '<img src="'.$cfg->url_web."img/group/".$array["img"].'">';
					echo '<br><br><br>';
					echo '<p>';
					echo $array["name"];
					echo '</p>';
					echo '</div>';
				}

	}
	public function heshtag_nabor_vivod_pod_group($pdo)
	{
		
	}
	

}


?>
