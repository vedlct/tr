<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Insertdata extends CI_Model {


    function process(){
        $perpose = $this->input->post('checkbox');
        //echo $perpose;

        $companyname = $this->input->post('companyname');
         $companyname1 = $this->input->post('companyname1');
          $companyname2 = $this->input->post('companyname2');
        //echo $companyname;
        $date = $this->input->post('date');

        $type = $this->input->post('type');
        $amountindollerfb = $this->input->post('amountindollarfb');
        $amountindollerdh = $this->input->post('amountindollardh');
        $amountintaka = $this->input->post('amountintaka');



        if($type=="Facebook"){
        //echo 1;


            $data = array(

                'companyname' => $companyname,
                'date' => $date,
                'type' => $type,
                'perpose' => implode(",", $perpose),
                'amountindollar' => $amountindollerfb,
                'amountintaka' => $amountintaka,

            );

        }else if($type=="SMS"){



            $data = array(

                'companyname' => $companyname1,
                'date' => $date,
                'type' => $type,
               //'perpose' => implode(",", $perpose),
//                'amountindollar' => $amountindollerdh,
                'amountintaka' => $amountintaka,

            );




        }else if($type=="DomainHosting"){

            $data = array(

                'companyname' => $companyname2,
                'date' => $date,
                'type' => $type,
                'perpose' => implode(",", $perpose),
                'amountindollar' => $amountindollerdh,
                'amountintaka' => $amountintaka,

            );

        }

        $this->db->insert('main',$data);
    }

}