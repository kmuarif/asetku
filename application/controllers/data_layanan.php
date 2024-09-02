<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_layanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('data_layanan_m');
    }
    public function index()
    {
        $data['data_layanan'] = $this->data_layanan_m->get_all();
        $this->template->load('shared/index', 'data_layanan/index', $data);
    }
    public function create()
    {
        $data_layanan  = $this->data_layanan_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_layanan->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'data_layanan/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $data_layanan->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Layanan berhasil disimpan!');
                redirect('data_layanan', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('alat');
        $data_layanan  = $this->data_layanan_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_layanan->rules());

        if ($validation->run() == FALSE) {
            $data['data_layanan'] = $this->data_layanan_m->get_by_id($id);
            if (!$data['data_layanan']) {
                $this->session->set_flashdata('error', 'Data Layanan tidak ditemukan!');
                redirect('data_layanan', 'refresh');
            }
            $this->template->load('shared/index', 'data_layanan/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $data_layanan->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Layanan berhasil diupdate!');
                redirect('data_layanan', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data Layanan tidak ada yang diupdate!');
                redirect('data_layanan', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->data_layanan_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Layanan berhasil dihapus!');
            redirect('data_layanan', 'refresh');
        }
    }
}

/* End of file data_layanan.php */
