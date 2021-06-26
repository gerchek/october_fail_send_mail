<?php

namespace Atash\Users\Components;

use Atash\Users\Models\Users;
use Cms\Classes\ComponentBase;

// Maglumat => components ichindaki at

class Maglumat extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'maglumat_name',
            'description' => 'maglumat_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'rainlab.blog::lang.settings.category_slug',
                'description' => 'rainlab.blog::lang.settings.category_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ], 
            'displayEmpty' => [
                'title'       => 'rainlab.blog::lang.settings.category_display_empty',
                'description' => 'rainlab.blog::lang.settings.category_display_empty_description',
                'type'        => 'checkbox',
                'default'     => 0,
            ],
            'categoryPage' => [
                'title'       => 'rainlab.blog::lang.settings.category_page',
                'description' => 'rainlab.blog::lang.settings.category_page_description',
                'type'        => 'dropdown',
                'default'     => 'blog/category',
                'group'       => 'rainlab.blog::lang.settings.group_links',
            ],
        ];
    }

    public function onRun()
    {
        $this->maglumatlar = $this->loadMaglumat();
        
    }

    protected function loadMaglumat()
    {
        //  Users bu model
        return Users::all();

    }



    public $maglumatlar;
}