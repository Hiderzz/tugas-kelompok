<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'nomor_handphone'
    ];
}