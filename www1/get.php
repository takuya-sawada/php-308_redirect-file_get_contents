<?php

echo 'www1';

print("<hr />");

$url = 'http://www2/redirect/dump.php';

$data = array(
    'say' => 'Hi',
    'to' => 'Mom',
);

$context = array(
    'http' => array(
        'method'  => 'GET',
        'follow_location' => true,
    ),
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
    )
);

$html = file_get_contents($url . '?' . http_build_query($data), false, stream_context_create($context));

var_dump($http_response_header);

var_dump($html);
