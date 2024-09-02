<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_pengetahuan_m extends CI_Model
{
    private $_table = "pengetahuan";

    public $id_pengetahuan;
    public $nama_dokumen;
    public $keterangan;
    public $file;
    
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_dokumen',
                'label' => 'Nama Dokumen',
                'rules' => 'required'
            ],
            [
                'field' => 'fketerangan',
                'label' => 'Keterangan',
                'rules' => 'required'
            ],
            [
                'field' => 'ffile',
                'label' => 'File',
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
        return $this->db->get_where($this->_table, ["id_pengetahuan" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_data_pengetahuan = uniqid('th-');
        $this->nama_dokumen = $post['fnama_dokumen'];
        $this->keterangan = $post['fketerangan'];
        $this->file = $post['ffile'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_pengetahuan', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('id_pengetahuan', $post['fid']);
        $this->db->set('nama_dokumen', $post['fnama_dokumen']);
        $this->db->where('id_pengetahuan', $post['fid']);
        $this->db->update($this->_table);

    }
}

/* End of file kategori_m.php */
