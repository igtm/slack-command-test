<?php 

$get = $_GET;

$result = array("response_type" => "in_channel",
    		"text"          => "成功.",
    		"attachments"   => [
        		array("text" => "うまくいったぜ")
		]
);

echo json_encode($result);
