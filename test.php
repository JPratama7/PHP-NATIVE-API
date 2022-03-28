<?php
require 'lib.php';

$response = client_http()->request('GET', 'latest');
$result = json_decode($response->getBody()->getContents(), true);
print_r($result);