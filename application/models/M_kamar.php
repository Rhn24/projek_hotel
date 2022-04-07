<?php
class M_kamar extends CI_Model
{
    function SemuaData()
    {
        return $this->db->get('tbl_kamar')->result_array();
    }
    function update($id_jenis)
    {
        return $this->db->get_where('tbl_kamar', ['id_jenis' => $id_jenis])->row_array();
    }
    function hapus($id_jenis)
    {
        $this->db->where('id_jenis', $id_jenis);
        $this->db->delete('tbl_kamar');
    }
}