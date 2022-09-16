<?php
    require_once('dbModel.php');
    $db = new dbModel();
    $db -> connect();
    $data = $db->getAllData('khachhang');
    echo $data;
?>