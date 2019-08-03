<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class form_model extends CI_Model {
    public function insertIdentitas()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'fakultas' => $this->input->post('fakultas'),
            'jurusan' => $this->input->post('jurusan'),
            'ipk' => $this->input->post('ipk'),
            'no_hp' => $this->input->post('no_hp'),
            'nama_sd' => $this->input->post('nama_sd'),
            'tahun_sd' => $this->input->post('tahun_sd'),
            'nama_smp' => $this->input->post('nama_smp'),
            'tahun_smp' => $this->input->post('tahun_smp'),
            'nama_sma' => $this->input->post('nama_sma'),
            'tahun_sma' => $this->input->post('tahun_sma'),
            'nama_s1' => $this->input->post('nama_s1'),
            'tahun_s1' => $this->input->post('tahun_s1'),
            'nama_organisasi' => $this->input->post('nama_organisasi'),
            'jabatan' => $this->input->post('jabatan'),
            'nama_organisasi1' => $this->input->post('nama_organisasi1'),
            'jabatan1' => $this->input->post('jabatan1'),
            'nama_organisasi2' => $this->input->post('nama_organisasi2'),
            'jabatan2' => $this->input->post('jabatan2'),
            'nama_organisasi3' => $this->input->post('nama_organisasi3'),
            'jabatan3' => $this->input->post('jabatan3')
        );
        $this->db->insert('identitas', $data);
    }
}


/* End of file form_model.php */
