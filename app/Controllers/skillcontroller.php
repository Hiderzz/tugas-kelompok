<?php

namespace App\Controllers;

class SkillController extends BaseController
{
    public function index()
    {
        return view('skill', ['title' => 'Skill']);
    }
}
