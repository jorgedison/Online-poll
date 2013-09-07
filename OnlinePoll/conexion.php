<?php 
define('DB_SERVER','localhost');
define('DB_NAME','encuesta');
define('DB_USER','root');
define('DB_PASS','JUkjhkhhu');
#define('DB_PASS','jorge');

 
$conex = mysql_connect (DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$conex);
