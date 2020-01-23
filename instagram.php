<?php

$username = 'dushyant.joshi.a';
$json = file_get_contents('https://www.instagram.com/' . $username . '/media/');
$instagram_feed_data = json_decode($json, true);