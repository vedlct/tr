<?php

class Cpassword extends CI_Model {


    function process(){

        $npass = $this->input->post('npassword');
        $cpass = $this->input->post('cpassword');
        $nname = $this->input->post('nname');

        $name=$this->session->userdata('username');
        $id=$this->session->userdata('id');


        if($name!=""){
            $data = array(
                'username' => $nname,


            );

            $this->db->where('id', $id);
            $this->db->update('login', $data);
        }else if($cpass!=""){

            $data = array(

                'password' => $cpass

            );

            $this->db->where('id', $id);
            $this->db->update('login', $data);


        }else if($name!="" && $cpass!=""){

            $data = array(

                'username' => $nname,
                'password' => $cpass

            );

            $this->db->where('id', $id);
            $this->db->update('login', $data);


        }
    }
}