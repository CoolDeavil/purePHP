<?php
/**@var MRouter $router */

use API\Core\Container\MicroDI;
use API\Core\Render\PHPRender;
use API\Core\Router\MRouter;
use API\Core\Session\Session;
use API\Core\Utils\NavBuilder\NavBuilder;
use API\Interfaces\RenderInterface;
use API\Interfaces\RouterInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

$ioc = MicroDI::getInstance([]);
/**@var $render PHPRender */
$render = $ioc->get(RenderInterface::class);

$router->post('/api/switch', function(Request $request, Response $response) use($ioc) : Response {
    $locales = [
        'pt' => 'pt_PT',
        'en' => 'en_GB',
        'fr' => 'fr_FR'
    ];
    Session::set('ACTIVE_LANG', $request->getParsedBody()['language']);
    Session::set('LOCALE', $locales[$request->getParsedBody()['language']]);
    return (new Response())
        ->withStatus(200)
        ->withHeader('Location', Session::get('LAST_INTENT'));

},'siteRoot');
$router->get('/', function(Request $request, Response $response) use($ioc, $render) : Response {
    $view = $render->render('landing',['appName' => 'Micro']);
    $response->getBody()->write($view);
    return $response;

},'siteRoot');
$router->get('/api', function(Request $request, Response $response) : Response {
    $response->getBody()->write(json_encode(['api' => true] , JSON_PRETTY_PRINT));
    return $response;
});
$router->get('/navbar', function(Request $request, Response $response) use($ioc,$router) : Response {


    /**@var $builder NavBuilder */
    $builder = $ioc->get(NavBuilder::class);
//    dump($router->generateURI('closure.navbar'));

   $nav = $builder->render();

   dump($nav);
   die;
//    $response->getBody()->write($nav);
    return $response;

},'closure.navbar');


$router->get('/trial1/:param', function(Request $request, Response $response) use($ioc,$render) : Response {

    $params = $request->getAttribute('PARAMS');
    extract($params);
    /**@var $param string $ */

    $view = $render->render('parameter',[
        'from' => 'Trials1/:param',
        'param' => $param
    ]);
    $response->getBody()->write($view);
    return $response;
},'closure.parameter');

$router->get('/trial1', function(Request $request, Response $response) use($ioc,$render) : Response {
    $view = $render->render('trials',[
        'from' => 'Page One',
    ]);
    $response->getBody()->write($view);
    return $response;
},'closure.trial1');

$router->get('/trial2', function(Request $request, Response $response) use($ioc,$render) : Response {
    $view = $render->render('trials',[
        'from' => 'Page Two',
    ]);
    $response->getBody()->write($view);
    return $response;
},'closure.trial2');

$router->get('/trial3', function(Request $request, Response $response) use($ioc,$render) : Response {
    $view = $render->render('trials',[
        'from' => 'Page Tree',
    ]);
    $response->getBody()->write($view);
    return $response;
},'closure.trial3');

$router->get('/trial4', function(Request $request, Response $response) use($ioc,$render) : Response {
    $view = $render->render('trials',[
        'from' => 'Page Four',
    ]);
    $response->getBody()->write($view);
    return $response;
},'closure.trial4');


