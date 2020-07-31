<?php
/**
 * Created by PhpStorm.
 * User: Linhanh
 * Date: 11/1/2017
 * Time: 11:58 AM
 */
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_select_db($connect,DB_NAME);
$sql = "Update thongtinmuahang SET status='$_POST[status]' WHERE id='$_POST[id_customer]'";
mysqli_query($connect,$sql);
?>