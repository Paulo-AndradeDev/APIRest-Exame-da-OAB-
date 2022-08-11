<?php 

session_start();

require '../vendor/autoload.php';


//Constante URL_BASE = caminho para os arquivos da pasta public, como imgs
define("URL_BASE",$_SERVER['SERVER_NAME']); 


//instancia a classe App() do file App.php da pasta Core\App\.
$app = new \App\Core\App(); 

