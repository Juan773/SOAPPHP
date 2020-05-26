<?php
include('lib/nusoap.php');
$client = new nusoap_client('https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl','wsdl');
$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; }
$param = array('plengua' => 'C','pcurso'=> '2011-12','pcoddep'=>'B142','pcodest'=>'');
$param2 = array('plengua' => 'C','pcurso'=> '2010-11','pcodasi'=>'9244','porden'=>'T');
$param3 = array('plengua' => 'v','pcurso'=> '2011-12');

$result1 = $client->call('wsasidepto', $param);
$result2 = $client->call('wshorarios', $param2);
$result3 = $client->call('wstitulosuni ', $param3);

print_r($result1);
print_r($result2);
print_r($result3);

?>

