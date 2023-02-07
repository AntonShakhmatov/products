<?php

function route($method, $urlList, $requestData)
{
    global $Link;
    switch ($method) {
        case 'POST':

            // $ips = array("31.30.162.251");

            // if(!in_array($_SERVER['REMOTE_ADDR'], $ips))
            // {
            // header("HTTP/1.1 401 Unauthorized");
            // exit;
            // }
            $name = $requestData->body->name;
            $details = $Link->query("SELECT uuid FROM product WHERE name = '$name'")->fetch_assoc();

            if (!is_null($details)) {
                $products = $Link->query("SELECT * FROM product WHERE name = '$name'");
                foreach ($products as $product) {
                    echo json_encode($product);
                }
            } else {
                setHTTPStatus("404", "Not found");
            }
            break;

    }

}
