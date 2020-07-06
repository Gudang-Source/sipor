<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data = array(
            'title' => 'SIPOR Bandung',
            'laporan' => $this->model->getLaporan()
        );
        $this->load->view('home/index', $data);
    }

    function contact()
    {
        $data['title'] = 'SIPOR Bandung';
        $this->load->view('home/contact', $data);
    }

    function about()
    {
        $data['title'] = 'SIPOR Bandung';
        $this->load->view('home/about', $data);
    }

    function laporan()
    {
        $data = array(
            'title' => 'SIPOR Bandung',
            'laporan' => $this->model->getAll()
        );
        $this->load->view('home/laporan', $data);
    }

    function kirimPesan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('subjek', 'Subjek', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SIPOR Bandung';
            $this->load->view('home/contact', $data);
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $subjek = $this->input->post('subjek');
            $pesan = $this->input->post('pesan');
            $data = [
                'nama' => htmlspecialchars($nama),
                'email' => htmlspecialchars($email),
                'subjek' => htmlspecialchars($subjek),
                'pesan' => htmlspecialchars($pesan)
            ];
            $this->model->kirimPesan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan sudah terkirim</div>');
            redirect('main/contact');
        }
    }
    function detail($id)
    {
        $detail = $this->model->get_detail($id);
        $data['detail'] = $detail;
        $data['title'] = 'SIPOR Bandung';
        $this->load->view('home/detail', $data);
    }
}
