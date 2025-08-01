<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\Controller;

class Toko extends Controller
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->findAll();
        return view('toko/index', $data);
    }

    public function tambah()
    {
        return view('toko/tambah');
    }

    public function simpan()
    {
        $model = new ProdukModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori' => $this->request->getPost('kategori'),
        ];
        $model->insert($data);
        return redirect()->to('/toko');
    }

    public function edit($id)
    {
        $model = new ProdukModel();
        $data['produk'] = $model->find($id);
        return view('toko/edit', $data);
    }

    public function update($id)
    {
        $model = new ProdukModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori' => $this->request->getPost('kategori'),
        ];
        $model->update($id, $data);
        return redirect()->to('/toko');
    }

    public function delete($id)
    {
        $model = new ProdukModel();
        $model->delete($id);
        return redirect()->to('/toko');
    }
}
