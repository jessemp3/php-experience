<?php


namespace App\Controller\API;

use UserModel;

class UserController extends BaseController
{
    public function listAction()
    {

        $erroDescription = '';
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $stringParamsArray = $this->getStringParams();

        print_r($requestMethod);
        if (strtoupper($requestMethod) == 'GET') {
            try {
                $userModel = new UserModel();

                $intLimit = 10;
                if (isset($stringParamsArray['limit']) && $stringParamsArray['limit']) {
                    $intLimit = $stringParamsArray['limit'];
                }

                $users = $userModel->getUsers($intLimit);
                $response = json_encode($users);
            } catch (Error $e) {
                $erroDescription = $e->getMessage() . 'Alguma coisa está errada';
                $erroDescription = "HTTP/1.1 500 Internal Server Error";
            }
        } else {
            $erroDescription = "Method not supported";
            $errorHeader = "HTTP/1.1 422 unprocessable entity";
        }


        //send output
        if ($erroDescription) {
            $this->sendOutput(
                $response,
            array('content-type: application/json', 'HTTP/1.1 200 OK')
        );
        } else {
            $this->sendOutput(
                json_encode(array('error' => $erroDescription)),
                array('content-type: application/json', $errorHeader)
            );
        }
    }
}