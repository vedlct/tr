<?php
class Details extends CI_Model {


    function getfb(){

        $date = $this->input->post('date');
        $date2 = $this->input->post('date2');
//        $this->db->select("id,companyname,perpose,amountindollar,date");
//        $this->db->from('main');
//        $this->db->where('type','Facebook');
//        $query = $this->db->get();
        $query = $this->db->query("SELECT * FROM `main` WHERE `date` BETWEEN '$date' AND '$date2' AND `type` = 'Facebook';");
        return $query->result();
    }

    function getsms(){
        $date3 = $this->input->post('date3');
        $date4 = $this->input->post('date4');
       // $this->db->select("id,companyname,perpose,amountintaka,date");
       // $this->db->from('main');
      // $this->db->where('type','SMS');
       // $query = $this->db->get();
        $query = $this->db->query("SELECT * FROM `main` WHERE `date` BETWEEN '$date3' AND '$date4' AND `type` = 'SMS';");
        return $query->result();
    }
    function getdh(){
        $date5 = $this->input->post('date5');
        $date6 = $this->input->post('date6');
//        $this->db->select("id,companyname,perpose,amountindollar,date");
//        $this->db->from('main');
//        $this->db->where('type','Facebook');
//        $query = $this->db->get();
        $query = $this->db->query("SELECT * FROM `main` WHERE `date` BETWEEN '$date5' AND '$date6' AND `type` = 'DomainHosting';");
        return $query->result();
    }
}