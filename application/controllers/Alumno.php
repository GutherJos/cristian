<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumno extends CI_Controller
{
    public function index()
    {       
        $this->session->set_userdata('folder_name', 'alumno');
        $this->session->set_userdata('titulo_modulo', 'Listado de Alumnos');
        $this->session->set_userdata('page_name', 'alumno_dashboard');
        $this->load->view('index');
    }
    public function alumno_new(){
        $this->session->set_userdata('folder_name', 'alumno');
        $this->session->set_userdata('titulo_modulo', 'Ingresasr Alumno');
        $this->session->set_userdata('page_name', 'insertar_alumno');
        $this->load->view('index');
    }
}
