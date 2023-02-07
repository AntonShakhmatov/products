<?php

function route($method, $urlList, $requestData)
{
    global $Link;
    switch ($method) {
        case 'GET':
            $token = substr(getallheaders()['Authorization'], 7);
            $userFromToken = $Link->query("SELECT userId FROM tokens WHERE token = '$token'")->fetch_assoc();
            if (!is_null($userFromToken)) {
                $users = $Link->query("SELECT * FROM users");
                foreach ($users as $user) {

                }
            } else {
                setHTTPStatus("401", "Unauthorized");
            }

            break;

        case 'POST':

            // $ips = array("31.30.162.251");
            // if(!in_array($_SERVER['REMOTE_ADDR'], $ips))
            // {
            // header("HTTP/1.1 401 Unauthorized");
            // exit;
            // }

            $login = $requestData->body->login;
            $user = $Link->query("SELECT id FROM users WHERE login = '$login'")->fetch_assoc();

            if (is_null($user)) {
                $password = hash("sha1", $requestData->body->password);
                $userInsertResult = $Link->query("INSERT INTO users(login, password) VALUES('$login', '$password')");

                if (!$userInsertResult) {
                    setHTTPStatus("403", "Forbidden");
                } else {
                    setHTTPStatus("200", "Success");
                }

                echo json_encode($requestData);
            } else {
                //exit
                setHTTPStatus("303", "Already exist");
            }

            break;

        default:

            break;
    }
}
