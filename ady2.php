<?php
$id=$_GET["id"];
$_url="http://1812501212048408.cn-hangzhou.fc.aliyuncs.com/2016-08-15/proxy/node-api.online/node-api/tv/channelInfo?id=".$id;

$_result = file_get_contents($_url);
$_json = json_decode($_result);
$uin = $_json->data->uin;
//获取uin

$url = "http://1812501212048408.cn-hangzhou.fc.aliyuncs.com/2016-08-15/proxy/node-api.online/node-api/tv/getPlayAddress?id=".$id."&uin=".$uin;
$refer = "https://web.guangdianyun.tv/";
$a = curl_init();
curl_setopt ($a, CURLOPT_URL, $url);
curl_setopt($a, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($a, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt ($a, CURLOPT_REFERER, $refer);
$result=curl_exec ($a);
curl_close ($a);

$json = json_decode($result);
$playurl = $json->data->hlsUrl;

header("location: ".$playurl);
//获取播放地址
?>
