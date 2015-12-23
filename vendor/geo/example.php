<?php
require_once("ipgeobase.php");
$gb = new IPGeoBase();
$ip = $_SERVER['REMOTE_ADDR'];
$data = $gb->getRecord($ip);
print_r($data);
/*
array(7) {
  ["range"]=>
  string(27) "46.46.128.0 - 46.46.169.255"
  ["cc"]=>
  string(2) "RU"
  ["city"]=>
  string(6) "Москва"
  ["region"]=>
  string(6) "Москва"
  ["district"]=>
  string(29) "Центральный федеральный округ"
  ["lat"]=>
  string(9) "55.755787"
  ["lng"]=>
  string(9) "37.617634"
}
*/
$data = $gb->getRecord('192.168.0.1');
var_dump($data);
//bool(false)