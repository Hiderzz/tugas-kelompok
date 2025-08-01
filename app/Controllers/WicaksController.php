<?php

namespace App\Controllers;

class WicaksController extends BaseController
{
    public function about(): string
    {
        // Kirim data title ke view
        return view('layouts/wicaks_32602300093', [
            'title' => 'About Us'
        ]);
    }
}
