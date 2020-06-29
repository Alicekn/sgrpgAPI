<?php
$dsn  = 'mysql:dbname=sgrpg;host=127.0.0.1';	//接続先
$pw = 'indocurry'; //パスワード
$user = 'senpai';  //ユーザー

function sendResponse($status, $value=[]){
  header('Content-type: application/json');
  echo json_encode([
    'status' => $status,
    'result' => $value
  ]);
