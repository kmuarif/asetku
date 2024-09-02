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
        $this->load->model('perbaikan_m');
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
                $this->session->set_flashdata('success', 'Data aplikasi berhasil disimpan!');
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
            $data['opd'] = $this->opd_m->get_all();

            if (!$data['aplikasi']) {
                $this->session->set_flashdata('error', 'Data aplikasi tidak ditemukan!');
                redirect('aplikasi', 'refresh');
            }
            $this->template->load('shared/index', 'aplikasi/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $aplikasi->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data aplikasi berhasil diupdate!');
                redirect('aplikasi', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data aplikasi tidak ada yang diupdate!');
                // redirect('aplikasi', 'refresh');
            }
        }
    }
    public function history($id)
    {
        $data['aplikasi'] = $this->aplikasi_m->get_by_id($id);
        $data['perbaikan'] = $this->perbaikan_m->get_by_aplikasi($id);
        if (!$data['perbaikan']) {
            $this->session->set_flashdata('error', 'Data perbaikan tidak ditemukan!');
            redirect('aplikasi', 'refresh');
        }
        // echo json_encode($data['perbaikan']);
        $this->template->load('shared/index', 'aplikasi/history', $data);
    }
    public function delete($id)
    {
        $this->aplikasi_m->Delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data aplikasi berhasil dihapus!');
            redirect('aplikasi', 'refresh');
        }
    }
    public function damage($id)
    {
        $this->aplikasi_m->damage($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Status aplikasi berhasil diupdate!');
            redirect('aplikasi', 'refresh');
        }
    }
    public function showBarcode($code)
    {
        $data['code'] = $code;

        $this->load->view('aplikasi/pdf_barcode', $data);
    }
    public function set_barcode($code)
    {
        //load library
        $this->load->library('zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');

        //generate barcode
        Zend_Barcode::render('code128', 'image', array('text' => $code, 'barHeight' => 100), array());
    }
}

/* End of file aplikasi.php */
