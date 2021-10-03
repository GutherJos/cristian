<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controlador1 extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('activo') != '1') {
            redirect(base_url(), 'refresh');
        }
        $this->session->set_userdata('folder_name', '');
        $this->session->set_userdata('titulo_pagina', 'Pagina Principal');
        $this->session->set_userdata('titulo_modulo', 'Pagina Principal');
        $this->session->set_userdata('page_name', 'dashboard');
        $this->load->view('index');
    }
    public function saludo()
    {
        $this->load->view('pagina1');
    }
}