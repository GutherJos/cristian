<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url'); //cargamos el helper para redireccionar y usar las urls
        $this->load->model('Usuarios_bd');
        $this->load->database();
    }
    public function index()
    {
        $this->session->set_userdata('folder_name', 'usuarios');
        $this->session->set_userdata('titulo_pagina', 'Usuarios');
        $this->session->set_userdata('titulo_modulo', 'Modulo de Usuarios');
        $this->session->set_userdata('page_name', 'dashboard_usuarios');
        $this->load->view('index');
    }
    public function view_user()
    {
        $this->session->set_userdata('folder_name', 'usuarios');
        $this->session->set_userdata('page_name', 'ver_usuarios');
        $data['usuarios'] = $this->Usuarios_bd->findAll();
        $this->load->view('index', $data);
    }
}