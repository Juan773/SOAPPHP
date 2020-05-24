<?php
include('lib/nusoap.php');
$client = new nusoap_client('http://www.dneonline.com/calculator.asmx?WSDL','wsdl');
$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; }
$param = array('intA' => '10','intB' => '2');

$result1 = $client->call('Add', $param);
$result2 = $client->call('Subtract', $param);
$result3 = $client->call('Multiply', $param);
$result4 = $client->call('Divide', $param);
print_r($result1);
print_r($result2);
print_r($result3);
print_r($result4);
?>

