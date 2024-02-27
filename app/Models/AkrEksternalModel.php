<?php

namespace App\Models;

use CodeIgniter\Model;

class AkrEksternalModel extends Model
{
    protected $table = 'akreditasi_eksternal';
    protected $allowedFields = ['lembaga','jenis_sertifikat','lingkup','tingkat','masa_berlaku','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM akreditasi_eksternal");

        return $query->getResult();
    }

    public function getFilteredData() {
        $query = $this->db->query("");
    }
}