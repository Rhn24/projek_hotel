<?php

class Data_Transaksi extends CI_Controller
{
    public function index()
	{
        $data['tbl_transaksi'] = $this->M_transaksi->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/partial');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/partial_akhir');
        $this->load->view('content_admin/data_transaksi', $data);
        $this->load->view('partial_admin/js');
        $this->load->view('partial_admin/footer');
    }
    public function tambah_data()
	{
        $data['tbl_transaksi'] = $this->M_transaksi->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/partial');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/partial_akhir');
        $this->load->view('content_admin/tambah_data_transaksi', $data);
        $this->load->view('partial_admin/js');
        $this->load->view('partial_admin/footer');
    }
    function proses_tambah_data()
    {

        $add = [
            'jenis_id' => $this->input->post('jenis_id'),
            'atas_nama' => $this->input->post('atas_nama'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_sewa' => $this->input->post('waktu_sewa'),
            'kamar_id' => $this->input->post('kamar_id'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),


        ];
        $this->db->insert('tbl_transaksi', $add);
        redirect(base_url('index.php/data_transaksi'));
    }
    function update_data($id_transaksi)
    {
        $data['tbl_transaksi'] = $this->M_transaksi->update($id_transaksi);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/partial');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/partial_akhir');
        $this->load->view('content_admin/update_data_transaksi', $data);
        $this->load->view('partial_admin/js');
        $this->load->view('partial_admin/footer');
    }
    function proses_update_data()
    {

        $data = [
            'jenis_id' => $this->input->post('jenis_id'),
            'atas_nama' => $this->input->post('atas_nama'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_sewa' => $this->input->post('waktu_sewa'),
            'kamar_id' => $this->input->post('kamar_id'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),


        ];
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_transaksi', $data);
        redirect(base_url('index.php/data_transaksi'));
    }
    function hapus_data($id_transaksi)
    {
        $this->M_transaksi->hapus($id_transaksi);
        redirect(base_url('index.php/data_transaksi'));
    }
}
