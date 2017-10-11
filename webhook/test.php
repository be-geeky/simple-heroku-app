<?php
function processMessage($update) {
    if($update["result"]["action"] == "is_livechat"){
        sendMessage(array(
            "source" => $update["result"]["source"],
            "speech" => "This can be modified according to time",
            "displayText" => "This can be modified according to time",
            "contextOut" => array()
        ));
    }
}
function sendMessage($parameters) {
    echo json_encode($parameters);
}
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
