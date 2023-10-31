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
        'method'  => 'POST',
        'follow_location' => 1,
        'ignore_errors' => 10,
        'header'  => implode("\r\n", array(
            'Content-Type: application/x-www-form-urlencoded',
            'Content-Length: ' . strlen(http_build_query($data))
        )),
        'content' => http_build_query($data)
    ),
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
    )
);

$html = file_get_contents($url, false, stream_context_create($context));

// var_dump($http_response_header);

var_dump($html);
