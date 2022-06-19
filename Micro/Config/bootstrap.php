<?php


use API\Core\Render\PHPRender;
use API\Core\Router\MRoute;
use API\Core\Router\MRouter;
use API\Core\Utils\NavBuilder\NavBuilder;
use API\Core\Utils\Translate;
use API\Interfaces\ContainerInterface;
use API\Interfaces\RenderInterface;
use API\Interfaces\RouterInterface;
use GuzzleHttp\Psr7\ServerRequest;

return [
    // Classes
    Translate::class => function () {
        return Translate::getInstance();
    },

    NavBuilder::class => function (ContainerInterface $container) {
        $router = $container->get(RouterInterface::class);
        $render = new PHPRender(new \API\Core\Render\PHPRenderExtensions());
        $translate = $container->get(Translate::class);
        return new NavBuilder($router, $render, $translate);
    },


    // Interfaces
    RenderInterface::class => function (ContainerInterface $container) {
        return new PHPRender(new \API\Core\Render\PHPRenderExtensions());
    },

    RouterInterface::class => function (ContainerInterface $container) {
        return MRouter::getInstance(ServerRequest::fromGlobals(),$container);
    },
    MRoute::class => function($args){
        extract($args);
        /** @var $route */
        /** @var $callable */
        /** @var $method */
        /** @var $name */
        return new MRoute($route, $callable, $method, $name);
    },
];

