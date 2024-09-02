<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_pengetahuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('data_pengetahuan_m');
    }
    public function index()
    {
        $data['data_pengetahuan'] = $this->data_pengetahuan_m->get_all();
        $this->template->load('shared/index', 'data_pengetahuan/index', $data);
    }
    public function create()
    {
        $data_pengetahuan  = $this->data_pengetahuan_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_pengetahuan->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'data_pengetahuan/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $data_pengetahuan->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Pengetahuan berhasil disimpan!');
                redirect('data_pengetahuan', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('alat');
        $data_pengetahuan  = $this->data_pengetahuan_m;
        $validation = $this->form_validation;
        $validation->set_rules($data_pengetahuan->rules());

        if ($validation->run() == FALSE) {
            $data['data_pengetahuan'] = $this->data_pengetahuan_m->get_by_id($id);
            if (!$data['data_pengetahuan']) {
                $this->session->set_flashdata('error', 'Data Pengetahuan tidak ditemukan!');
                redirect('data_pengetahuan', 'refresh');
            }
            $this->template->load('shared/index', 'data_pengetahuan/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $data_pengetahuan->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Pengetahuan berhasil diupdate!');
                redirect('data_pengetahuan', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data Pengetahuan tidak ada yang diupdate!');
                redirect('data_pengetahuan', 'refresh');
            }
        }
    }
    public function delete($id)
    {
        $this->data_pengetahuan_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Pengetahuan berhasil dihapus!');
            redirect('data_pengetahuan', 'refresh');
        }
    }
}

/* End of file data_pengetahuan.php */
