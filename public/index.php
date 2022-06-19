<?php

use API\Core\Container\MicroDI;
use API\Core\Render\PHPRender;
use API\Core\Router\MRouter;
use API\Core\Session\Session;
use API\Interfaces\RenderInterface;
use API\Interfaces\RouterInterface;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;

require_once(realpath('../') .
    DIRECTORY_SEPARATOR . 'Micro' .
    DIRECTORY_SEPARATOR . 'Config' .
    DIRECTORY_SEPARATOR . 'includes.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

Session::getInstance();
//Session::set('loggedIn','USER');

/**@var $bootstrap */
$ioc = MicroDI::getInstance($bootstrap);
/**@var $render PHPRender */
$render = $ioc->get(RenderInterface::class);
/**@var $router MRouter */
$router = $ioc->get(RouterInterface::class);
include_once '../Micro/routes.php';

$request = ServerRequest::fromGlobals();
$response = new Response();
$ignored=[];


if($router->dispatch($request)){
    $matched = $router->getMatchedRoute();
    $response=new Response();
    if (!is_bool($matched)) {
        $request = $request->withAttribute('PARAMS', $matched->getParams());
        $response = new Response();
        $response = call_user_func_array($router->getExecutable($matched),[$request,$response]);
    }
    $regex = "#^/api/#";
    if( !preg_match($regex, $url = (string) $request->getUri()->getPath())){
        $requestMethod = $request->getMethod();
        $url = (string) $request->getUri()->getPath();
        if(!isset(pathinfo($url)['extension']) && $requestMethod === 'GET'){
            if(!in_array($url, $ignored)){
                Session::set('LAST_INTENT',$url);
            }
        }
    }

}else {

    $view = $render->render('404');
    $response = new Response();
    $response->getBody()->write($view);
}
Http\Response\send($response);