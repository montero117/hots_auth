<?php
$query = http_build_query(array(
    'client_id' => '3',
    'redirect_uri' => 'http://localhost:8080/callback.php',
    'response_type' => 'code',
    'scope' => '',
));
 
header('Location: http://localhost/oauth/authorize?'.$query);