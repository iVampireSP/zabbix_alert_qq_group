#!/usr/bin/php
<?php
$url = "http://127.0.0.1:5700/send_group_msg";
    
$data = array(
    "group_id" => $argv[1],
    "message" => $argv[2],
    "auto_escape" => "true",
);
    
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url . '?' . http_build_query($data));
$output = curl_exec($ch);
curl_close($ch);
unset($output);