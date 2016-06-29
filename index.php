<?php 

const TOKEN = "iKwPblls7qGNycujAdgblhm8";

$token        = $_GET["token"];
$team_id      = $_GET["team_id"];
$team_domain  = $_GET["team_domain"];
$channel_id   = $_GET["channel_id"];
$channel_name = $_GET["channel_name"];
$user_id      = $_GET["user_id"];
$user_name    = $_GET["user_name"];
$command      = $_GET["command"];
$text         = $_GET["text"];
$response_url = $_GET["response_url"];

if (TOKEN != $token) throw new Exception();


$result = array("response_type" => "in_channel",
				"text"          => "成功.",
				"attachments"   => [
					array("text" => "うまくいったぜ")
				]
);

header('Content-Type: application/x-www-form-urlencoded');
echo json_encode($result);