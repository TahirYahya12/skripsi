<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table = 'penyakit'; //nama table DB
    protected $useTimestamps = true; //created_at and update_at
    protected $allowedFields = ['nama_penyakit', 'keterangan', 'solusi'];

    // 
    public function getPenyakit()
    {
        return $this->findAll();
    }

    //
    // public function getKomik($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }
}