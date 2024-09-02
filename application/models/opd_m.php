<?php
defined('BASEPATH') or exit('No direct script access allowed');

class opd_m extends CI_Model
{
    private $_table = "opd";

    public $id_opd;
    public $nama_opd;
    public $nama_opd_pendek;
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fid_opd',
                'label' => 'Kode Perangkat Daerah',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_opd',
                'label' => 'Nama Perangkat Daerah',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_opd_pendek',
                'label' => 'Nama PD',
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
        return $this->db->get_where($this->_table, ["id_opd" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_opd = $post['fid_opd'];
        $this->nama_opd = $post['fnama_opd'];
        $this->nama_opd_pendek = $post['fnama_opd_pendek'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_opd', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->id_opd = $post['fid_opd'];
        $this->nama_opd = $post['fnama_opd'];
        $this->nama_opd_pendek = $post['fnama_opd_pendek'];
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_opd' => $post['fid_opd']));
    }
}

/* End of file opd_m.php */
