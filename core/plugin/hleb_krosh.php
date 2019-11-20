<?php
$ru_plugin_plus++;
$plugin_RL_init_name = "plugin_RL_init_".$ru_plugin_plus;
$$plugin_RL_init_name = new Plugin;
$$plugin_RL_init_name -> name = "hleb_krosh";
$$plugin_RL_init_name -> version = "v.0.0.1";
$$plugin_RL_init_name -> autor = "JaligWei";
$$plugin_RL_init_name -> websiteautor = "redlava.ru";


class Hleb_krosh
{
	public $lvl1_name="";
	public $lvl1_url="";
	public $lvl2_name="";
	public $lvl2_url="";
	public $lvl3_name="";
	public $lvl3_url="";
	public $lvl4_name="";
	public $lvl4_url="";
	public $lvl5_name="";
	public $lvl5_url="";
	public $lvl6_name="";
	public $lvl6_url="";
	public $lvl7_name="";
	public $lvl7_url="";
	public $lvl8_name="";
	public $lvl8_url="";
	public $lvl9_name="";
	public $lvl9_url="";
	public $lvl10_name="";
	public $lvl10_url="";

	public $full_adres="";


	public function fun_echo($pdo,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10)
	{
		
		$this ->full_adres="";
		$pv1=$p1;
		$pv2=$p2;
		$pv3=$p3;
		$pv4=$p4;
		$pv5=$p5;
		$pv6=$p6;
		$pv7=$p7;
		$pv8=$p8;
		$pv9=$p9;
		$pv10=$p10;
		if($pv1	== ""){$pv1 = "error404";}
		if($pv2	== ""){$pv2 = "error404";}
		if($pv3	== ""){$pv3 = "error404";}
		if($pv4	== ""){$pv4 = "error404";}
		if($pv5 == ""){$pv5 = "error404";}
		if($pv6	== ""){$pv6 = "error404";}
		if($pv7	== ""){$pv7 = "error404";}
		if($pv8	== ""){$pv8 = "error404";}
		if($pv9	== ""){$pv9 = "error404";}
		if($pv10	== ""){$pv10 = "error404";}
		$sth1 = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth1->execute(array("$pv1","","","","","","","","",""));			
		$array = $sth1->fetch(PDO::FETCH_ASSOC);
		$this->lvl1_name = $array["name"];
		$this->lvl1_url = "/";
		if($this->lvl1_name != "")
		{
			echo "<a href=\"".$this->lvl1_url."\">".$this->lvl1_name." / </a> "; 
		}

		$sth2 = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth2->execute(array("$pv1","$pv2","","","","","","","",""));				
		$array = $sth2->fetch(PDO::FETCH_ASSOC);
		$this->lvl2_name = $array["name"];
		$this->lvl2_url = $this->lvl1_url.$p1."/";
		if($this->lvl2_name != "")
		{
			echo "<a href=\"".$this->lvl2_url."\">".$this->lvl2_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","","","","","","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl3_name = $array["name"];
		$this->lvl3_url =  $this->lvl2_url.$p2."/";
		if($this->lvl3_name != "")
		{
			echo "<a href=\"".$this->lvl3_url."\">".$this->lvl3_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","","","","","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl4_name = $array["name"];
		$this->lvl4_url = $this->lvl3_url.$p3."/";;
		if($this->lvl4_name != "")
		{
			echo "<a href=\"".$this->lvl4_url."\">".$this->lvl4_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","","","","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl5_name = $array["name"];
		$this->lvl5_url = $this->lvl4_url.$p4."/";
		if($this->lvl5_name != "")
		{
			echo "<a href=\"".$this->lvl5_url."\">".$this->lvl5_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","$pv6","","","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl6_name = $array["name"];
		$this->lvl6_url = $this->lvl5_url.$p5."/";
		if($this->lvl6_name != "")
		{
			echo "<a href=\"".$this->lvl6_url."\">".$this->lvl6_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","$pv6","$pv7","","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl7_name = $array["name"];
		$this->lvl7_url = $this->lvl6_url.$p6."/";
		if($this->lvl7_name != "")
		{
			echo "<a href=\"".$this->lvl7_url."\">".$this->lvl7_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?    and `lvl10`=?   Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","$pv6","$pv7","$pv8","",""));			
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl8_name = $array["name"];
		$this->lvl8_url = $this->lvl7_url.$p7."/";
		if($this->lvl8_name != "")
		{
			echo "<a href=\"".$this->lvl8_url."\">".$this->lvl8_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?   and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","$pv6","$pv7","$pv8","$pv9",""));				
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl9_name = $array["name"];
		$this->lvl9_url = $this->lvl8_url.$p8."/";
		if($this->lvl9_name != "")
		{
			echo "<a href=\"".$this->lvl9_url."\">".$this->lvl9_name." / </a> "; 
		}

		$sth = $pdo->prepare("SELECT * FROM `page.content` WHERE `lvl1`=? and `lvl2`=? and `lvl3`=?  and `lvl4`=?  and `lvl5`=?  and `lvl6`=?  and `lvl7`=?  and `lvl8`=?  and `lvl9`=?  and `lvl10`=?    Limit 1 " );
		$sth->execute(array("$pv1","$pv2","$pv3","$pv4","$pv5","$pv6","$pv7","$pv8","$pv9","$pv10"));				
		$array = $sth->fetch(PDO::FETCH_ASSOC);
		$this->lvl10_name = $array["name"];
		$this->lvl10_url = $this->lvl9_url.$p9."/";;
		if($this->lvl10_name != "")
		{
			echo "<a href=\"".$this->lvl10_url."\">".$this->lvl10_name." / </a> "; 
		}

	}
	
	

}


?>