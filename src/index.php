<?php

function index($data)
{
    $name = !empty($data['queryStringParameters']['name']) ? $data['queryStringParameters']['name'] : " Freind!";

    return APIResponse(["Hello" => $name]);
}

function APIResponse($body)
{
    $headers = array(
        "Content-Type"=>"application/json",
        "Access-Control-Allow-Origin"=>"*",
        "Access-Control-Allow-Headers"=>"Content-Type",
        "Access-Control-Allow-Methods" =>"OPTIONS,POST"
    );
    return json_encode(array(
        "statusCode"=>200,
        "headers"=>$headers,
        "body"=>$body
    ));
}