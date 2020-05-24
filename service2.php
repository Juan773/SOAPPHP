<?php
include('lib/nusoap.php');
$client = new nusoap_client('https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl','wsdl');
$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; }
$param = array('ubiNum' => '10');
$param2 = array('dNum' => '10.05');

$result1 = $client->call('NumberToWords', $param);
$result2 = $client->call('NumberToDollars', $param2);

print_r($result1);
print_r($result2);

?>

