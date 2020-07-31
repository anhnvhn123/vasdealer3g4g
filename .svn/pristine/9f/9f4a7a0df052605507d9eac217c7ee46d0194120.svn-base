<?php

class connectSQL
{
    function connect()
    {
        // Kết nối CSDL
        $conn = new mysqli('172.16.0.244', 'root', '123456aA', 'vasdealer_stechvn_new');

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        /* change character set to utf8 */
        if (!$conn->set_charset("utf8")) {
            //printf("Error loading character set utf8: %s\n", $conn->error);
        } else {
            //printf("Current character set: %s\n", $conn->character_set_name());
        }
        return $conn;
    }
}