<?php

function processMessage($update) {
date_default_timezone_set('America/New_York');

    $from = '09:00';
    $to = '18:00';
    $test = new DateTime('now');


    $input = $test->format('H:i');
    $is_between_dates = isBetween($from, $to, $input);

    if ($update["result"]["action"] == "is_livechat" && !$is_between_dates) {
        $text = 'Please click <a href="https://www.teamhgs.com/we-want-hear-you" target="_blank"> here </a> for Business Related Inquiries';
        sendMessage(array(
            "source" => $update["result"]["source"],
            "speech" => $text,
            "displayText" => $text,
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

function isBetween($from, $till, $input) {
    $f = DateTime::createFromFormat('!H:i', $from);
    $t = DateTime::createFromFormat('!H:i', $till);
    $i = DateTime::createFromFormat('!H:i', $input);
    if ($f > $t)
        $t->modify('+1 day');
    return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
}
