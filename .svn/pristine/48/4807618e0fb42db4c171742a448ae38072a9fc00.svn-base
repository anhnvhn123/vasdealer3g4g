<?php
include('config.php');
include('ApiService.php');
$config = new config();
$api_service = new ApiService($config);
$result = $api_service->inviteVas($_GET['msisdn'], $_GET['serviceCode']);
echo $result;