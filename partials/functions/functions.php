<?php 

$length = 0;
function getRndPass($length) {
    $length = $_GET['passLength'];
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!$%&=?^*';
    $shuffledchars = str_shuffle($chars);
    $password = substr($shuffledchars, 0, $length);
    return $password;
}
?>