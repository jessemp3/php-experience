<?php

class BaseController
{
    public function __call($name, $arguments)
    {
        $this->sendOutput('', array('HTTP/1.1 404 Not Found'));
        exit();
    }


    protected function getStringParams(): array
    {
        parse_str($_SERVER['QUERY_STRING'], $query);
        return $query;
    }

    protected function sendOutput($data, $httpHeaders = [])
    {
       header_remove('Set-Cookie');

       if(is_array($httpHeaders) && count($httpHeaders) > 0){
           foreach($httpHeaders as $httpHeader){
               header($httpHeader);
           }
           echo $data;
           exit;
       }
    }




}

?>