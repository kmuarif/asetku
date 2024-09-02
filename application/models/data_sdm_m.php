<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_sdm_m extends CI_Model
{
    private $_table = "sdm";

    public $nip;
    public $nama_pegawai;
    public $jabatan;
    public $kompetensi_1;
    public $kompetensi_2;
    public $kompetensi_3;
    public $kompetensi_4;
    public $kompetensi_5;
    public $id_opd;
    
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_pegawai',
                'label' => 'Nama Pegawai',
                'rules' => 'required'
            ],
            [
                'field' => 'fjabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
            ],
            [
                'field' => 'fkompetensi_1',
                'label' => 'Kompetensi 1',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_opd',
                'label' => 'Nama OPD',
                'rules' => 'required'
            ],
        ];
    }
    public function rules_update()
    {
        return [
            [
                'field' => 'fnama_pegawai',
                'label' => 'Nama Pegawai',
                'rules' => 'required'
            ],
            [
                'field' => 'fjabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
            ],
            [
                'field' => 'fkompetensi_1',
                'label' => 'Kompetensi 1',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_opd',
                'label' => 'Nama OPD',
                'rules' => 'required'
            ],
        ];
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->join('opd', 'sdm.id_opd = opd.id_opd', 'left');
        $this->db->from($this->_table);
        $this->db->where('sdm.deleted', 0);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["nip" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_data_sdm = uniqid('nip-');
        $this->nama_pegawai = $post['fnama_pegawai'];
        $this->jabatan = $post['fjabatan'];
        $this->kompetensi_1 = $post['fkompetensi_1'];
        $this->kompetensi_2 = $post['fkompetensi_2'];
        $this->kompetensi_3 = $post['fkompetensi_3'];
        $this->kompetensi_4 = $post['fkompetensi_4'];
        $this->kompetensi_5 = $post['fkompetensi_5'];
        $this->id_opd = $post['fnama_opd'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('nip', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('nip', $post['fid']);
        $this->db->set('nama_pegawai', $post['fnama_pegawai']);
        $this->db->where('nip', $post['fid']);
        $this->db->update($this->_table);

    }
}

/* End of file kategori_m.php */
