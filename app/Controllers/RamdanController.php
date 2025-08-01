<?php

namespace App\Controllers;

class RamdanController extends BaseController
{
    public function index(): string
    {
        // Akan membuka halaman profil secara default
        return view('pages/profil', ['title' => 'Profil Saya']);
    }

    public function profil(): string
    {
        return view('pages/profil', ['title' => 'Profil Saya']);
    }

    public function skill(): string
    {
        return view('pages/skill', ['title' => 'Skill Saya']);
    }
}
