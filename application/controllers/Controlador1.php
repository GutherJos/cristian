<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controlador1 extends CI_Controller
{
    public function index()
    {       
        $this->session->set_userdata('folder_name', '');
        $this->session->set_userdata('titulo_modulo', 'Pagina Principal');
        $this->session->set_userdata('page_name', 'dashboard');
        $this->load->view('index');
    }
    public function saludo()
    {
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('pagina2');
        $this->load->view('footer');
    }
}
