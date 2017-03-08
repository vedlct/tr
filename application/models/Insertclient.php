<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Insertclient extends CI_Model {


    function process(){

        $clientname = $this->input->post('clientname');

        $type = $this->input->post('type');


            $data = array(

                'clientname' => $clientname,
                'type' => $type,
            );



        $this->db->insert('client_info',$data);
    }

}