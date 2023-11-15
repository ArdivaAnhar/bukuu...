<?php
defined('BASEPATH') or exit('No direct script access allowed');

class crud extends CI_Model
{

    public function getDataBuku()
    {
        $query = $this->db->get('tb_buku');
        return $query->result();
    }

    public function cari($judul)
    {
        $this->db->like('nama_buku', $judul);
        $query = $this->db->get('tb_buku');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function addBuku($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
    }
    function updateBuku($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }
    function deleteBuku($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }
    public function getDataPenerbit()
    {
        $query = $this->db->get('tb_penerbit');
        return $query->result();
    }

    function addPenerbit($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
    }
    function updatePenerbit($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }
    function deletePenerbit($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    public function getBukuPengadaan()
    {
        $this->db->select('nama_buku, penerbit, MIN(stok) as sisa_stok');
        $this->db->from('tb_buku');
        $this->db->group_by('nama_buku, penerbit');
        $this->db->order_by('sisa_stok', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
}
