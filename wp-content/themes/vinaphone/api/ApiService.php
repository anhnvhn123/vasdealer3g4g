<?php
date_default_timezone_set('Asia/Bangkok');

class ApiService
{
    private $config;

    public function __construct(config $config)
    {
        $this->config = $config;
    }

    function getListPackages($msisdn)
    {
        $merchant_txn_id = $this->config->merchant_id . time();
        $url = $this->config->estio_url . "/apis/vas/list_packages";
        $operator = "vte";
        $string = "merchant_id=" . $this->config->merchant_id . "&merchant_txn_id=" . $merchant_txn_id . "&msisdn=" . $msisdn . "&service=data&telco=" . $operator;
        $data = array(
            "merchant_id" => $this->config->merchant_id,
            "merchant_txn_id" => $merchant_txn_id,
            "telco" => $operator,
            "msisdn" => $msisdn,
            "service" => "data",
            "signature" => hash_hmac('sha256', $string, $this->config->secret_key)
        );
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_HTTPAUTH, CURLAUTH_BASIC,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($data)
        ));
        $response = curl_exec($ch);
        return $response;
    }

    function inviteVas($msisdn, $service_code)
    {
        $merchant_txn_id = $this->config->merchant_id . time();
        $url = $this->config->estio_url . "/apis/vas/invite";
        $operator = "vte";
        $string = "merchant_id=" . $this->config->merchant_id . "&merchant_txn_id=" . $merchant_txn_id . "&msisdn=" . $msisdn . "&service_code=" . $service_code . "&telco=" . $operator;
        $data = array(
            "merchant_id" => $this->config->merchant_id,
            "merchant_txn_id" => $merchant_txn_id,
            "telco" => $operator,
            "msisdn" => $msisdn,
            "service_code" => $service_code,
            "signature" => hash_hmac('sha256', $string, $this->config->secret_key)
        );
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_HTTPAUTH, CURLAUTH_BASIC,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($data)
        ));
        $response = curl_exec($ch);
        return $response;
    }

    function insertVas($transId, $branchCode, $serviceCode, $msisdn, $userId, $statusNote, $telco)
    {
        $url = $this->config->vasdealer_url . "/api/insert_invite";
        $data = array(
            "transId" => $transId,
            "branchCode" => $branchCode,
            "serviceCode" => $serviceCode,
            "msisdn" => $msisdn,
            "timestamp" => date('Y-m-d H:i:s'),
            "userId" => $userId,
            "statusNote" => $statusNote,
            "telco" => $telco
        );
        $auth = base64_encode($this->config->vas_username . ":" . $this->config->vas_password);
        $auth = "Basic " . $auth;
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_HTTPAUTH, CURLAUTH_BASIC,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $auth,
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($data)
        ));
        $response = curl_exec($ch);
        return $response;
    }

    function getListPackagesDatabase($telco)
    {
        $url = $this->config->vasdealer_url . "/api/list_service/" . $telco;
        $auth = base64_encode($this->config->vas_username . ":" . $this->config->vas_password);
        $auth = "Basic " . $auth;
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_HTTPAUTH, CURLAUTH_BASIC,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $auth,
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($ch);
        return $response;
    }
}