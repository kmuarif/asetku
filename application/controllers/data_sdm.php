<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_sdm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('data_sdm_m');
        $this->load->model('opd_m');
    }
    public function index()
    {
        $data['data_sdm'] = $this->data_sdm_m->get_all();
        $this->template->load('shared/index', 'data_sdm/index', $data);
    }
    public function create()
    {
        $data_sdm  = $this->data_sdm_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_sdm->rules());
        if ($validation->run() == FALSE) {
            $data['opd'] = $this->opd_m->get_all();
            $this->template->load('shared/index', 'data_sdm/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $data_sdm->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data SDM berhasil disimpan!');
                redirect('data_sdm', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('alat');
        $data_sdm  = $this->data_sdm_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_sdm->rules());

        if ($validation->run() == FALSE) {
            $data['data_sdm'] = $this->data_sdm_m->get_by_id($id);
            if (!$data['data_sdm']) {
                $this->session->set_flashdata('error', 'Data SDM tidak ditemukan!');
                redirect('data_sdm', 'refresh');
            }
            $this->template->load('shared/index', 'data_sdm/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $data_sdm->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data SDM berhasil diupdate!');
                redirect('data_sdm', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data SDM tidak ada yang diupdate!');
                redirect('data_sdm', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->data_sdm_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data SDM berhasil dihapus!');
            redirect('data_sdm', 'refresh');
        }
    }
}

/* End of file data_sdm.php */
