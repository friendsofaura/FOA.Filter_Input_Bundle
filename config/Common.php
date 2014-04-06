<?php
namespace Aura\Input_Filter_Bundle\_Config;

use Aura\Di\Config;
use Aura\Di\Container;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->params['Aura\Input\Form']['filter'] = $di->lazyNew('Aura\Input_Filter_Bundle\Filter');        
    }
    
    public function modify(Container $di)
    {
    }
}
