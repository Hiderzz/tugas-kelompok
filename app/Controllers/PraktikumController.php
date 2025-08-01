<?php

namespace App\Controllers;

class PraktikumController extends BaseController
{
    public function form(): string
    {
        return view('form_praktikum');
    }

    public function submit(): string
    {
        $data = [
            'nama'               => $this->request->getPost('nama'),
            'nim'                => $this->request->getPost('nim'),
            'kelas'              => $this->request->getPost('kelas'),
            'mata_kuliah'        => $this->request->getPost('mata_kuliah'),
            'dosen_pengampu'     => $this->request->getPost('dosen_pengampu'),
            'asisten_praktikum'  => $this->request->getPost('asisten_praktikum'),
        ];

        return view('hasil_praktikum', ['data' => $data]);
    }
}
