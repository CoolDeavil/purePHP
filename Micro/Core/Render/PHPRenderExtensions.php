<?php


namespace API\Core\Render;

use API\Models\RenderFunction;

class PHPRenderExtensions
{

    public function getFunctions() : array
    {
        return [
            new RenderFunction('asset',[$this,'asset']),
            new RenderFunction('bolder',[$this,'bolder']),
        ];
    }
    public function parseRule(string $rule): array
    {
        $func = trim(substr($rule,0,strpos($rule,'(')));
        $param = trim(substr($rule,strpos($rule,'('),strlen($rule)-1));
        $param = trim($param,'(');
        $param = trim($param,')');
        return [$func,$param];
    }
    public function asset(string $element, $params = []): string
    {
        $element = trim($element,"'");
        return APP_ASSET_BASE .$element;
    }
    public function bolder(string $element, $params = []): string
    {
        return '<strong style="color: #006d6d;">' .$element .'</strong>' ;
    }

}