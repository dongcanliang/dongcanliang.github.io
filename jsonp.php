<?php
header('Content-type: application/json');
//获取回调函数名
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json数据
$json_data = '["this is one","this is two"]';
//输出jsonp格式的数据
echo $jsoncallback . "(" . $json_data . ")";
?>