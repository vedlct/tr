<?php
class Tesformmodel extends CI_Model{

function process(){
$username = $this->input->post('username');
$password = $this->input->post('password');
$data = array(

'username'=>$username,
'password'=>$password
);
$this->db->insert('login',$data);
}//end of simpan
}
?>