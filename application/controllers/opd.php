<?php
defined('BASEPATH') or exit('No direct script access allowed');

class opd extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('opd_m');
    }
    public function index()
    {
        $data['opd'] = $this->opd_m->get_all();
        $this->template->load('shared/index', 'opd/index', $data);
    }
    public function create()
    {
        $opd  = $this->opd_m;
        $validation = $this->form_validation;
        $validation->set_rules($opd->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'opd/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $opd->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil disimpan!');
                redirect('opd', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('opd');
        $opd  = $this->opd_m;
        $validation = $this->form_validation;
        $validation->set_rules($opd->rules());

        if ($validation->run() == FALSE) {
            $data['opd'] = $this->opd_m->get_by_id($id);
            if (!$data['opd']) {
                $this->session->set_flashdata('error', 'Data Perangkat Daerah tidak ditemukan!');
                redirect('opd', 'refresh');
            }
            $this->template->load('shared/index', 'opd/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $opd->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil diupdate!');
                redirect('opd', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data Perangkat Daerah tidak ada yang diupdate!');
                redirect('opd', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->opd_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Perangkat Daerah berhasil dihapus!');
            redirect('opd', 'refresh');
        }
    }
}

/* End of file opd.php */
