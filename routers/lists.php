<?php

function route($method, $urlList, $requestData)
{
    global $Link;
    switch ($method) {
        case 'GET':

            // $ips = array("31.30.162.251");

            // if(!in_array($_SERVER['REMOTE_ADDR'], $ips))
            // {
            // header("HTTP/1.1 401 Unauthorized");
            // exit;
            // }

            $products = $Link->query("SELECT uuid, name, url, price FROM product");
            foreach ($products as $product) {
                echo json_encode($product);
            }

            break;

    }

}
