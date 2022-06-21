<?php
ini_set ("default_charset","");
include_once("gzip/gzipHTML.php");

include_once("RequestManager.php");
$rotas = array(
  '/'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/inicial/(?P<acesso>\w+)'=>'inicial.php',
	'/index'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/sobre'=>'sobre.php',
	'/empreendimentos'=>'empreendimentos_page.php',
	'/empreendimento/(?P<empreendimento>\S+)/(?P<titulo>\S+)'=>'empreendimentos_mostra.php',
	'/novidades'=>'novidades_page.php',
	'/novidade/(?P<novidade>\d+)/(?P<titulo>\S+)'=>'novidades_mostra.php',
  '/contato'=>'contato_page.php',
);
$request_manager = new RequestManager();
$request_manager->run($rotas);
exit;
