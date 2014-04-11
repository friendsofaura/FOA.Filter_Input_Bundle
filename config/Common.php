<?php
namespace FOA\Filter_Input_Bundle\_Config;

use Aura\Di\Config;
use Aura\Di\Container;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->params['Aura\Input\Form']['filter'] = $di->lazyNew('FOA\Filter_Input_Bundle\Filter');        
    }
    
    public function modify(Container $di)
    {
    }
}
