<?php
$ru_plugin_plus++;
$plugin_RL_init_name = "plugin_RL_init_".$ru_plugin_plus;
$$plugin_RL_init_name = new Plugin;
$$plugin_RL_init_name -> name = "navigator";
$$plugin_RL_init_name -> version = "v.0.0.1";
$$plugin_RL_init_name -> autor = "JaligWei";
$$plugin_RL_init_name -> websiteautor = "redlava.ru";


class Navigator
{
	public $bazovoe_znachenie_kolichestva_sleshei = 1;
	public $kollichestvo_derektorii = ""; //макимум  10
	public $url_lvl1="";
	public $url_lvl2="";
	public $url_lvl3="";
	public $url_lvl4="";
	public $url_lvl5="";
	public $url_lvl6="";
	public $url_lvl7="";
	public $url_lvl8="";
	public $url_lvl9="";
	public $url_lvl10="";
	/*
http://192.168.1.175/htag/nabori-heshtegov/piar/index.php
/ - 1
/htag/ - 2
/htag/nabori-heshtegov/ -3 
htag/nabori-heshtegov/piar/ - 4


		echo $_SERVER['PHP_SELF'];
	*/

	public function inichilizator()
	{
		$tek_url = $_SERVER['PHP_SELF'];
		$x = 0;
		$y = 1;
		$dlina_url = strlen($tek_url);
		while($x != $dlina_url) 
		{
			$x++;
			//echo $x;
			if($tek_url["$x"] == "/")
			{

				$x++;
				$y ++; //echo $this->$name_peremen."<br>";

			}
			$name_peremen = "url_lvl".$y;
			$this->$name_peremen .= $tek_url["$x"];
			if($this->$name_peremen == "index.php"){$this->$name_peremen = '';}


			
		}








		

	}
	

}

$navigator = new Navigator;
$navigator -> inichilizator();
?>
