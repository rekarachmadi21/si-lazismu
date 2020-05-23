<?php


class querylazismu extends CI_Controller
{

    function tambah_pemasukan()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id_muzakki = $this->input->post('id_muzakki');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $jam_transaksi = $this->input->post('jam_transaksi');
        $nominal = $this->input->post('nominal');
        $id_rekening = $this->input->post('id_rekening');
        $id_pegawai = $this->input->post('id_pegawai');
        $jenis_transaksi = $this->input->post('jenis_transaksi');
        $opt = $this->input->post('opt');
        $ket = $this->input->post('ket');

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_muzakki' => $id_muzakki,
            'tgl_transaksi' => $tgl_transaksi,
            'jam_transaksi' => $jam_transaksi,
            'nominal' => $nominal,
            'id_rekening' => $id_rekening,
            'id_pegawai' => $id_pegawai,
            'jenis_transaksi' => $jenis_transaksi,
            'ket' => $ket,
            'opt' => $opt
        );
        $this->db->insert('transaksi', $data);
        redirect('Home/Pemasukan');
    }
    function tambah_pengeluaran()
    {
        $id_pengeluaran = $this->input->post('id_pengeluaran');
        $tgl_pengeluaran = $this->input->post('tgl_pengeluaran');
        $jam_pengeluaran = $this->input->post('jam_pengeluaran');
        $id_jenis_pengeluaran = $this->input->post('id_jenis_pengeluaran');
        $id_rekening = $this->input->post('id_rekening');
        $nominal  = $this->input->post('nominal');
        $ket = $this->input->post('ket');
        $id_pegawai = $this->input->post('id_pegawai');

        $data = array(
            'id_pengeluaran' => $id_pengeluaran,
            'tgl_pengeluaran' => $tgl_pengeluaran,
            'jam_pengeluaran' => $jam_pengeluaran,
            'id_jenis_pengeluaran' => $id_jenis_pengeluaran,
            'id_rekening' => $id_rekening,
            'nominal' => $nominal,
            'ket' => $ket,
            'id_pegawai ' => $id_pegawai
        );
        $this->db->insert('pengeluaran', $data);
        redirect('Home/pengeluaran');
    }
}
