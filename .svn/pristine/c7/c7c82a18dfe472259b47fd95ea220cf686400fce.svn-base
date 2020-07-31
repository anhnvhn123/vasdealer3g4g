<?php
include('config.php');
include('ApiService.php');
$config = new config();
$apiService = new ApiService($config);
$result = $apiService->insertVas($_POST['transId'], "ESTIO", $_POST['serviceName'], $_POST['msisdn'], 150, $_POST['message'], "vte");
echo $result;