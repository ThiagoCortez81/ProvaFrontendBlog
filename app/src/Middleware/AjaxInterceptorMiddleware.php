<?php

namespace IntecPhp\Middleware;

use IntecPhp\Model\ResponseHandler;

class AjaxInterceptorMiddleware 
{
    private $jsonMapper;
    private $isDevMode;
    public function __construct(array $jsonMapper, $isDevMode)
    {
        $this->jsonMapper = $jsonMapper;
        $this->isDevMode = $isDevMode;
    }
    public function returnJsonResponse($request)
    {
        if ($request->isXmlHttpRequest() && $this->isDevMode) {
            $uri = $_SERVER['REQUEST_URI'];
            $jsonFile = $this->jsonMapper[$uri] ?? '404.json';
            $json = json_decode(file_get_contents("app/config/json/" . $jsonFile));
            $rp = new ResponseHandler($json->code, $json->message, (array)$json->data);
            $rp->printJson();
            exit;
        }
    }
}