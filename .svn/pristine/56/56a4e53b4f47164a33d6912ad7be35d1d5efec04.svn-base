<?php
include('config.php');
include('ApiService.php');
$config = new config();
$apiService = new ApiService($config);
$msisdn = $_GET['msisdn'];
$packageCode = $_GET['packageCode'];
$result = $apiService->getListPackages($msisdn);
$aryResult = json_decode($result, true);
$code = isset($aryResult['code']) ? $aryResult['code'] : null;
$statusInvite = isset($aryResult['message']) ? $aryResult['message'] : 'API không phản hồi';
if ($aryResult['message'] == 'Thành công') {
    $statusInvite = false;
    foreach ($aryResult['services'] as $package) {
        if ($packageCode == $package['code']) {
            $statusInvite = true;
            break;
        }
    }
}
$services = isset($aryResult['services']) ? $aryResult['services'] : [];
echo json_encode(['code' => $code, 'statusInvite' => $statusInvite, 'services' => $services]);