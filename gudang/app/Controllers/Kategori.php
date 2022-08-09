<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'tampildata' => $this->kategori->findAll()
        ];

        return view('kategori/viewKategori', $data);
    }

    public function __construct()
    {
        $this->kategori = new ModelKategori();
    }
}
