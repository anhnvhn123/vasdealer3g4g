<?php
include('config.php');
include('ApiService.php');
$config = new config();
$apiService = new ApiService($config);
$aryPackagesApi = isset($_POST['aryPackages']) ? $_POST['aryPackages'] : [];
$aryPackagesDatabase = array();
$aryResult = array();
$packagesData = $apiService->getListPackagesDatabase('vte');
$packagesData = json_decode($packagesData, true);
$statusCode = isset($packagesData['statusCode']) ? $packagesData['statusCode'] : false;
if (isset($packagesData['data'])) {
    foreach ($packagesData['data'] as $package) {
        $aryPackagesDatabase[] = $package['serviceCode'];
    }
    foreach ($aryPackagesApi as $package) {
        if (in_array($package['code'], $aryPackagesDatabase)) {
            $aryResult[] = $package;
        }
    }
}
echo json_encode(['statusCode' => $statusCode, 'data' => $aryResult]);