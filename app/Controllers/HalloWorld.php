<?php

namespace App\Controllers;

class HalloWorld extends BaseController
{
    public function index(): string
    {
        return view(name: 'HalloWorld');
    }
}
