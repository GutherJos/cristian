<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		 parent::__construct();
        $this->load->library('session'); 
        $this->load->helper('url'); //cargamos el helper para redireccionar y usar las urls
        $this->load->model('Usuarios_bd');
        $this->load->database();
	}
	
	public function index()
	{
		if($this->session->userdata('login_type')=='1'){
			redirect(base_url() . 'Controlador1/', 'refresh');
		}
		else{
		$this->load->view('login/inicio');
	}
		
	}
	public function auth(){
		$username = $this->input->post('username');
		$pass = sha1($this->input->post('pass'));

		$credenciales = $this->Usuarios_bd->findUser($username,$pass);

		if(!empty($credenciales)){
            $this->session->set_userdata('admin_id', $credenciales->id_usuario);
            $this->session->set_userdata('name_user', $credenciales->propietario);
            $this->session->set_userdata('login_type', $credenciales->rol);
            //var_dump($credenciales);
            //echo $this->session->userdata('login_type');
 			redirect(base_url() . 'login', 'refresh');
		}
		else{
			$this->session->set_flashdata('error', '1');
  			redirect(base_url() . 'login', 'refresh');
		}

		//print_r($this->db->last_query());    
		//echo $username;
		//echo '<br>';
		//echo $pass;
	}
	public function logout(){
		$this->session->sess_destroy();
       // $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'login', 'refresh');
	}
}
