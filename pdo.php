<?php

try{
  $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
	'root', 'b13672sn');
} catch(PDOException $e){
  echo 'DBにアクセスできません。'. $e->getMessage();
  exit;
}

?>