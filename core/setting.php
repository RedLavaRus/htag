<?php
Class configs
{
	public $url_web="http://localhost/htag/";//адрес сайта  https://redlava.ru
	public $url_hard="/var/www/html/htag/";//адрес сайта по железу /var/www/redlava/

	public $mysql_host = 'localhost';//IP аДРЕС БАЗЫ ДАННЫХ
    public $mysql_db   = 'htag';//НАЗВАНИЕ БАЗЫ ДАНЫХ
    public $mysql_user = "redcore";//ЛОГИН
    public $mysql_pass = "redcore";//Пароль
    public $mysql_charset = 'utf8';//Кодировка
}

$cfg = new configs;



?>
