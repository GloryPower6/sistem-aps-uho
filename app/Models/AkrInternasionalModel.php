<?php

namespace App\Models;

use CodeIgniter\Model;

class AkrInternasionalModel extends Model
{
    protected $table = 'akreditasi_internasional';
    protected $primaryKey = 'id';
    protected $allowedFields = ['lembaga_akrint','program_studi','status','masa_berlaku','keterangan'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM akreditasi_internasional");

        return $query->getResult();
    }

    public function simpan($data) 
    {
        $this->insert($data);
    }

    public function updateData($id, $data)
    {
        $this->where('id', $id);
        $this->set($data);
        $this->update();
    }

    public function hapus($id)
    {
        $this->where('id', $id)->delete();
    }
}