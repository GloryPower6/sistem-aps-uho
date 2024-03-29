<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model
{
    protected $table = 'program_studi';
    protected $allowedFields = ['program', 'program_studi', 'pr_akreditasi', 'no_sk', 'tgl_kadaluarsa'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM program_studi");

        return $query->getResult();
    }

    public function simpan($data) 
    {
        $this->insert($data);
    }
}
