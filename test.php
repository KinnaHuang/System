<?php 
$arr  = array (
array('num'=>1, 'user_id'=>"name168", 'user_name'=>"黃小明", 'department'=>"研發部" , 'phone' => "0987654321" , 'state' => 1, 'time' => "2021-01-02 10:43:20")
,array('num'=>2, 'user_id'=>"lily168", 'user_name'=>"洪莉莉", 'department'=>"客服部" , 'phone' => "0912345678" , 'state' => 0, 'time' => "2021-03-20 15:43:20")
,array('num'=>3, 'user_id'=>"big168", 'user_name'=>"陳大華", 'department'=>"運維部" , 'phone' => "0987654123" , 'state' => 1, 'time' => "2021-04-15 19:43:20")
,array('num'=>4, 'user_id'=>"star168", 'user_name'=>"張亮亮", 'department'=>"客服部" , 'phone' => "0987651234" , 'state' => 0, 'time' => "2021-05-24 16:43:20")
,array('num'=>5, 'user_id'=>"small168", 'user_name'=>"許小花", 'department'=>"研發部" , 'phone' => "0943215678" , 'state' => 1, 'time' => "2021-06-21 20:43:20"));
echo json_encode ($arr, JSON_UNESCAPED_UNICODE);
?>