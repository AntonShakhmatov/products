<?php

function route($method, $urlList, $requestData)
{
    global $Link;
    switch ($method) {
        case 'POST':
            $token = substr(getallheaders()['Authorization'], 7);

            // $ips = array("31.30.162.251");

            // if(!in_array($_SERVER['REMOTE_ADDR'], $ips))
            // {
            // header("HTTP/1.1 401 Unauthorized");
            // exit;
            // }

            $userFromToken = $Link->query("SELECT userId FROM tokens WHERE token = '$token'")->fetch_assoc();
            if (!is_null($userFromToken)) {
                $id = $Link->query("SELECT uuid FROM product")->fetch_assoc();
                if (!is_null($id)) {

                    $name = $requestData->body->name;
                    $url = $requestData->body->url;
                    $price = $requestData->body->price;
                    $productUpdateResult = $Link->query("UPDATE product SET name = '$name', url = '$url', price = '$price'");

                    if (!$productUpdateResult) {
                        setHTTPStatus("403", "Forbidden");
                    } else {
                        setHTTPStatus("200", "Success");
                    }

                    echo json_encode($requestData);

                } else if (!is_string($name)) {
                    setHTTPStatus("409", "Invalid type");
                } else if (!is_string($url)) {
                    setHTTPStatus("409", "Invalid type");
                } else if (!is_numeric($price)) {
                    setHTTPStatus("409", "Invalid type");
                } else {
                    //exit
                    setHTTPStatus("303", "This ID does not exist");
                }

                break;
            } else {
                setHTTPStatus("401", "Unauthorized");
            }

            break;

    }

}
