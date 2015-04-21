<?php
namespace FOA\Filter_Input_Bundle;

use Aura\Filter\FilterFactory as BaseFactory;
use Aura\Filter\Rule;
use Aura\Filter\RuleLocator;

class FilterFactory extends BaseFactory
{
    public function newInstance()
    {
        return new Filter(
            new RuleLocator(array_merge(
                $this->registry(),
                ['any' => function () {
                    $rule = new Rule\Any;
                    $rule->setRuleLocator(new RuleLocator(
                        $this->registry()
                    ));
                    return $rule;
                }]
                )
            ),
            $this->getTranslator()
        );
    }
}
