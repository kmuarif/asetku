<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aplikasi_detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('aplikasi_detail_m');
        $this->load->model('aplikasi_m');
        $this->load->model('permintaan_m');
    }


    public function accept($id)
    {
        $permintaan  = $this->permintaan_m;
        $aplikasi  = $this->aplikasi_m;
        $aplikasi_detail  = $this->aplikasi_detail_m;
        $validation = $this->form_validation;
        $validation->set_rules($aplikasi_detail->rules());
        if ($validation->run() == FALSE) {
            $data['aplikasi'] = $this->aplikasi_m->get_all_idle();
            $data['permintaan'] = $this->permintaan_m->get_by_id($id);
            $this->template->load('shared/index', 'aplikasi_detail/create', $data);
        } else {
            $detail->Add($id);
            $permintaan->status_done($id);
            $aset->status_used($this->input->post('fid_aplikasi'));
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data aplikasi berhasil disimpan!');
                redirect('permintaan', 'refresh');
            }
        }
    }
}

/* End of file aplikasi_detail.php */
