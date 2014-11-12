<?php

sleep(1);

$ch=curl_init();


$url='http://jiading.tongji.edu.cn:8080/TJbus/GetBusServlet?route_id=1';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$contents=curl_exec($ch);

curl_close($ch);

echo $contents;

echo 'test';


?>
