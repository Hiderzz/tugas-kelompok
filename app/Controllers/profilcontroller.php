<?php

namespace App\Controllers;

class ProfilController extends BaseController
{
    public function index()
    {
        return view('profil', ['title' => 'Profil']);
    }
}
