<?php

class Users_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function user_exists($data){
        $query=$this->db->get_where('users',['email'=>$data['email']]);
        
        if($query->num_rows()==1){
            return true;
        }
        return false;
    }
    public function create_user($data){
        return $this->db->insert('users',
        [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password']
        ]);
    }
    public function checkPassword($data){

        $query=$this->db->get_where('users',['email'=>$data['email'],'password'=>$data['password']]);
        if($this->db->count_all_results()==1) return $query->row();
        return false;
    }
}