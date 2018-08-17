<?php


$botToken = "574770876:AAHOfXibQlrIein1n1HPvmFKeudn8-1FilU";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update,TRUE);

$chatId = $updateArray["result"][0]["message"]["text"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

?>