<?php
session_start();
$input = $_GET['captcha'];
$status = $input == $_SESSION['captcha']['code'] ? 1 : 0;
echo $status;