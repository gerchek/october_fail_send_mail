<?php namespace Atash\Users;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'Atash\Users\Components\Maglumat' => 'maglumat',
            'Atash\Users\Components\Form' => 'form'
        ];
    }

    public function registerSettings()
    {
    }
}
