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
        if ($this->session->userdata('activo') != '1') {
            redirect(base_url(), 'refresh');
        }
        $this->session->set_userdata('folder_name', 'usuarios');
        $this->session->set_userdata('titulo_pagina', 'Usuarios');
        $this->session->set_userdata('titulo_modulo', 'Modulo de Usuarios');
        $this->session->set_userdata('page_name', 'dashboard_usuarios');
        $this->load->view('index');
    }
    public function view_user()
    {
        if ($this->session->userdata('activo') != '1') {
            redirect(base_url(), 'refresh');
        }
        $this->session->set_userdata('folder_name', 'usuarios');
        $this->session->set_userdata('page_name', 'ver_usuarios');
        $data['usuarios'] = $this->Usuarios_bd->findAll();
        $this->load->view('index', $data);
    }

    function new () {
        if ($this->session->userdata('activo') != '1') {
            redirect(base_url(), 'refresh');
        }
        $this->session->set_userdata('folder_name', 'usuarios');
        $this->session->set_userdata('page_name', 'modal_new');
        $this->load->view('index');
    }
    public function do_create()
    {
        if ($this->session->userdata('activo') != '1') {
            redirect(base_url(), 'refresh');
        }

        $data['nombre'] = $this->input->post('username');
        $data['password'] = sha1($this->input->post('contra'));
        $data['propietario'] = $this->input->post('duenio');
        $data['rol'] = $this->input->post('rol');

        $this->Usuarios_bd->insert($data);
        $this->session->set_flashdata('flash_message', "Usuario agregado Exitosamente!");
        redirect(base_url() . 'Usuario/view_user', 'refresh');
    }
}