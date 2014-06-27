<?php
namespace FOA\Filter_Input_Bundle\_Config;

use Aura\Di\Config;
use Aura\Di\Container;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->params['Aura\Input\Form']['filter'] = $di->lazyNew('FOA\Filter_Input_Bundle\Filter');
        $di->params['Aura\Input\Fieldset']['builder'] = $di->lazyNew('Aura\Input\Builder');
        $di->params['Aura\Input\Fieldset']['filter'] = $di->lazyNew('Aura\Input\Filter');
    }

    public function modify(Container $di)
    {
    }
}
