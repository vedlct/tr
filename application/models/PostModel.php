<?php

class PostModel extends CI_Model {

    function getPosts(){
        $this->db->select("username,password");
        $this->db->from('login');
        $query = $this->db->get();
        return $query->result();
    }


}