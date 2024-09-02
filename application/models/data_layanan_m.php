<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_layanan_m extends CI_Model
{
    private $_table = "layanan";

    public $id_layanan;
    public $nama_layanan;
    public $fungsi_layanan;
    public $pengelola;
    public $nama_app;
    
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_layanan',
                'label' => 'Nama Layanan',
                'rules' => 'required'
            ],
            [
                'field' => 'ffungsi_layanan',
                'label' => 'Fungsi Layanan',
                'rules' => 'required'
            ],
            [
                'field' => 'fpengelola',
                'label' => 'Pengelola',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_app',
                'label' => 'Nama Aplikasi',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all()
    {
        return $this->db->get_where($this->_table, ["deleted" => 0])->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["id_layanan" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_data_layanan = uniqid('th-');
        $this->nama_dokumen = $post['fnama_layanan'];
        $this->nama_dokumen = $post['ffungsi_layanan'];
        $this->nama_dokumen = $post['fpengelola'];
        $this->file = $post['fnama_app'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_layanan', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('id_layanan', $post['fid']);
        $this->db->set('nama_layanan', $post['fnama_layanan']);
        $this->db->set('fungsi_layanan', $post['ffungsi_layanan']);
        $this->db->set('pengelola', $post['fpengelola']);
        $this->db->set('nama_app', $post['fnama_app']);
        $this->db->where('id_layanan', $post['fid']);
        $this->db->update($this->_table);

    }
}

/* End of file kategori_m.php */
