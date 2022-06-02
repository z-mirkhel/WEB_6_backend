<?php
$user = 'u41154';
$pass = '3457456';
$db = new PDO('mysql:host=localhost;dbname=u41154', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>