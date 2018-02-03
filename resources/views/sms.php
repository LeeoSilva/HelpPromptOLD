<?php
	$smsGateway = new SmsGateway('helpprompt@gmail.com', 'devisate2017');

	$page = 1;

	$result = $smsGateway->getDevices($page);
	print_r($result);
?>
