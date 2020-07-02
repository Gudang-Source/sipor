<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Laporan extends RestController
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
    }

    public function index_get()
    {
        $laporan = $this->admin->getAll();

        if ($laporan) {
            $this->response([
                'status'    => true,
                'data'      => $laporan
            ], 200);
        }
    }

    public function index_post()
    {
        $data = [
            'alamat'        => $this->post('alamat'),
            'email'         => $this->post('email'),
            'jenis_laporan' => $this->post('jenis_laporan'),
            'keterangan'    => $this->post('keterangan'),
            'latt'          => $this->post('latt'),
            'longi'         => $this->post('longi'),
            'photo'         => $this->post('photo'),
            'tanggal'       => $this->post('tanggal'),
            'type_laporan'  => $this->post('type_laporan'),
            'status'        => $this->post('status')
        ];
        if ($this->admin->createLaporan($data) > 0) {
            $this->response([
                'status'        => true,
                'message'       => 'new data has been created.'
            ], 201);
        } else {
            $this->response([
                'status'        => false,
                'message'       => 'failed to create new data.'
            ], 400);
        }
    }
}
