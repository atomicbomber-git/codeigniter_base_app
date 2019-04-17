<?php

use App\BaseController;

class ItemType extends BaseController
{
    protected function allowedMethods()
    {
        return [
            'index' => ['get'],
            'create' => ['get'],
            'store' => ['post'],
            'edit' => ['get'],
            'update' => ['post'],
            'delete' => ['post'],
        ];
    }

    public function index()
    {
        echo("Whatever shit is this.");
    }
}