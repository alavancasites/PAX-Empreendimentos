<?php
ini_set ("default_charset","");
include("gzip/gzipHTML.php");
include_once("extranet/autoload.php");
include_once("RequestManager.php");
$rotas = array(
	'/empresa'=> 'empresa.php',
	'/servico/(?P<servico>\S+)/(?P<titulo>\S+)'=>'servicos_mostra.php',
  '/'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/inicial/(?P<acesso>\w+)'=>'inicial.php',
	'/index'=>'inicial.php',
	'/inicial'=>'inicial.php',
	'/sobre'=>'sobre.php',
	'/empreendimentos'=>'empreendimentos_page.php',
	'/empreendimento'=>'empreendimentos_mostra.php',
	'/novidades'=>'novidades_page.php',
	'/novidade'=>'novidades_mostra.php',
	'/contato'=>'contato.php',
);
$request_manager = new RequestManager();
$request_manager->run($rotas);
exit;
