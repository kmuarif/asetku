<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aplikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('aplikasi_m');
        $this->load->model('opd_m');
        include_once APPPATH . '/third_party/fpdf/code128.php';
    }
    public function index()
    {
        $data['aplikasi'] = $this->aplikasi_m->get_all();
        $this->template->load('shared/index', 'aplikasi/index', $data);
        
    }
    public function create()
    {
        $aplikasi  = $this->aplikasi_m;
        $validation = $this->form_validation;
        $validation->set_rules($aplikasi->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'aplikasi/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $aplikasi->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil disimpan!');
                redirect('aplikasi', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('aplikasi');
        $aplikasi  = $this->aplikasi_m;
        $validation = $this->form_validation;
        $validation->set_rules($aplikasi->rules());

        if ($validation->run() == FALSE) {
            $data['aplikasi'] = $this->aplikasi_m->get_by_id($id);
            if (!$data['aplikasi']) {
                $this->session->set_flashdata('error', 'Data Perangkat Daerah tidak ditemukan!');
                redirect('aplikasi', 'refresh');
            }
            $this->template->load('shared/index', 'aplikasi/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $aplikasi->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil diupdate!');
                redirect('aplikasi', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data Perangkat Daerah tidak ada yang diupdate!');
                redirect('aplikasi', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->aplikasi_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil dihapus!');
            redirect('aplikasi', 'refresh');
        }
    }
}

/* End of file aplikasi.php */
