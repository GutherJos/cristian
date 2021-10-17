<?php
class Usuarios_bd extends CI_Model
{

    public $table = 'usuario';
    public $table_id = 'id_usuario';

    //Busqueda general
    public function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

//Busqueda por fila dependiendo del id
    public function findId($id)
    {
        /* $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        $query = $this->db->get();
        return $query->row();*/
        return $this->db->get_where($this->table, array($this->table_id => $id))->row();
    }

    //Busqueda por validacion de usuario y contrasse;a
    public function findUser($usuario, $pass)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where('nombre', $usuario);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        /*
        return $this->db->get_where($this->table,array('nombre'=>$usuario,'password'=>$pass))->row();
         */
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        //delete from usuario where id_usuario = 1
        //where id_usuario = 1 delete usuario
        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
        return $this->db->insert_id();
    }

    public function update($data, $id)
    {
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
        return $this->db->insert_id();
    }
}