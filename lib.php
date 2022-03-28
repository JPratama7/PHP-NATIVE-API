<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

function client_http(){
    return new Client([
        'base_uri' => 'https://api-lk21.herokuapp.com/api/v1/'
    ]);
}