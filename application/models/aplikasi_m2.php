<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aplikasi_m extends CI_Model
{
    private $_table = "aplikasi";

    public $id_app;
    public $nama_app;
    public $alamat_app;
    public $jenis_app;
    public $deskripsi;
    public $bahasa;
    public $framework;
    public $basis_data;
    public $pengembang;
    public $tahun_buat;
    public $id_opd;
    public $status_app;
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fid_app',
                'label' => 'Kode Aplikasi',
                'rules' => 'required'
            ],
            [
                'field' => 'fnama_app',
                'label' => 'Nama Aplikasi',
                'rules' => 'required'
            ],
            [
                'field' => 'falamat_app',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'fjenis_app',
                'label' => 'Jenis Aplikasi',
                'rules' => 'required'
            ],
            [
                'field' => 'fdeskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
            [
                'field' => 'fbahasa',
                'label' => 'Bahasa',
                'rules' => 'required'
            ],
            [
                'field' => 'fframework',
                'label' => 'Framework',
                'rules' => 'required'
            ],
            [
                'field' => 'fbasis_data',
                'label' => 'Basis Data',
                'rules' => 'required'
            ],
            [
                'field' => 'fpengembang',
                'label' => 'Pengembang',
                'rules' => 'required'
            ],
            [
                'field' => 'ftahun_buat',
                'label' => 'Tahun Pembuatan',
                'rules' => 'required'
            ],
            [
                'field' => 'fid_opd',
                'label' => 'Kode PD',
                'rules' => 'required'
            ],
            [
                'field' => 'fstatus_app',
                'label' => 'Status',
                'rules' => 'required'
            ],
        ];
    }
    


    public function get_by_dept()
    {
        $this->db->select('*');
        $this->db->join('opd', 'opd.id_opd = aplikasi.id_opd', 'left');
        $this->db->from($this->_table);
        $this->db->where('aplikasi.deleted', 0);
        $this->db->where('aplikasi.status_app !=', 'damage');
       
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all()
    {
        $this->db->select('aplikasi.*, opd.*');
        $this->db->join('opd', 'opd.id_opd = aplikasi.id_opd', 'left');
        $this->db->from($this->_table);
        $this->db->where('aplikasi.deleted', 0);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_by_id($id)
    {
        $this->db->select('*');
        
        $this->db->join('opd', 'opd.id_opd = aplikasi.id_opd', 'left');
        $this->db->from($this->_table);
        $this->db->where('aplikasi.id_app', $id);
        $query = $this->db->get();
        return $query->row();
    }



    public function add()
    {
        $post = $this->input->post();
        $this->id_app = $post['fid_app'];
        $this->nama_app = $post['fnama_app'];
        $this->alamat_app = $post['falamat_app'];
        $this->jenis_app = $post['fjenis_app'];
        $this->deskripsi = $post['fdeskripsi'];
        $this->bahasa = $post['fbahasa'];
        $this->framework = $post['fframework'];
        $this->basis_data = $post['fbasis_data'];
        $this->pengembang = $post['fpengembang'];
        $this->tahun_buat = $post['ftahun_buat'];
        $this->id_opd = $post['fid_opd'];
        $this->status_app = $post['fstatus_app'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_app', $id);
        $this->db->update($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->id_app = $post['fid_app'];
        $this->nama_app = $post['fnama_app'];
        $this->alamat_app = $post['falamat_app'];
        $this->jenis_app = $post['fjenis_app'];
        $this->deskripsi = $post['fdeskripsi'];
        $this->bahasa = $post['fbahasa'];
        $this->framework = $post['fframework'];
        $this->basis_data = $post['fbasis_data'];
        $this->pengembang = $post['fpengembang'];
        $this->tahun_buat = $post['ftahun_buat'];
        $this->id_opd = $post['fid_opd'];
        $this->status_app = $post['fstatus_app'];
        $this->deleted = 0;
        $this->db->update($this->_table, $this, array('id_app' => $post['fid_app']));
    }
}

/* End of file aplikasi_m.php */
