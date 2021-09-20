<?php 
class Usuarios_bd extends CI_Model {


        public $table = 'usuario';
        public $table_id = 'id_usuario';


        //CRUD
        public function findAll(){
                $this->db->select();
                $this->db->from($this->table);
                $query = $this->db->get();
                return $query->result();
        }

        public function findUser($usuario, $pass){
                $this->db->select();
                $this->db->from($this->table);
                $this->db->where('nombre',$usuario);
                $this->db->where('password',$pass);
                $query = $this->db->get();
                /*
                return $this->db->get_where($this->table,array('nombre'=>$usuario,'password'=>$pass))->row();
                */
                return $query->row();
        }



}

 ?>