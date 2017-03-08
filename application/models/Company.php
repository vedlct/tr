<?php
Class Company extends CI_Model {

    function getfb(){
       $query = $this->db->query("SELECT * FROM `client_info` WHERE  `type` = 'Facebook';");
        return $query->result();
    }
    function getsms(){
        $query = $this->db->query("SELECT * FROM `client_info` WHERE  `type` = 'SMS';");
        return $query->result();
    }
    function getdh(){
        $query = $this->db->query("SELECT * FROM `client_info` WHERE  `type` = 'DomainHosting';");
        return $query->result();
    }
}