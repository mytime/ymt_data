<?php
//随机生成一个时间作为文件名
$filename = date("YmdHis");

//写入文件(文件名+后缀png,写入方式)
$file = fopen($filename.".png","w");

//使用Base64对post过来的数据进行解码
$data = base64_decode($_POST["img"]);

//开始写入(文件名,写入数据)
fwrite($file,$data);
//关闭文件
fclose($file);
