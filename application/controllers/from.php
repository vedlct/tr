<?php
class Form extends CI_Controller {


public function index()
{
$this->load->helper(array('form', 'url'));

$this->load->library('form_validation');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('from');
}
else
{
$this->load->view('formsuccess');
}
}
}

?>