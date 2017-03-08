<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __Construct(){
        parent::__Construct ();
        $this->load->database(); // load database
        //$this->load->model('PostModel'); // load model

    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}





//    public function addnew()
//    {
//        //$this->load->view('from');
//        $data= array("username"=>"sakib");
//        $this->db->insert($data);
//    }
//
//    function save(){
//        echo 1;
//        $this->load->model('Tesformmodel');
//        echo 2;
//        if($this->input->post('submit')){
//            echo 3;
//            $this->Tesformmodel->process();
//
//        }
//        //redirect('from');
//    }



    function logincheck()
    {
        $this->load->model('Login');
        $result = $this->Login->validate_user($_POST);
        //echo $result;

        if (!empty($result)) {
           // echo 3;
            $data = [
                //'id_user' => $result->id_user,
                'username' => $result->username,
                'id'=>$result->id,
                'name'=>$result->name
            ];

            $this->session->set_userdata($data);
            $this->session->userdata('username');
            //$this->load->view('Home');

                redirect('Welcome/home');

        }
        else
        {
            echo "<script>
                        alert('wrong username or password');
                       
					window.location=\"/tr/welcome\";
					
                    </script>";
            // redirect('test');
        }


    }

    function insertdata(){

        $this->load->model('Insertdata');
        $this->Insertdata->process();


        redirect('Welcome/home');



    }


    function details(){
        if($this->session->userdata('username')!="") {

        if($this->input->post('fbsubmit')) {
            $this->load->model('Details');

            $this->data['fbpost'] = $this->Details->getfb(); // calling Post model method getPosts()
            $this->load->view('details', $this->data); // load the view file , we are passing $data array to view file

        }else if ($this->input->post('smssubmit')){
            $this->load->model('Details');

            $this->data['smspost'] = $this->Details->getsms(); // calling Post model method getPosts()
            $this->load->view('details', $this->data); // load the view file , we are passing $data array to view file


        }else if ($this->input->post('dhsubmit')) {
            $this->load->model('Details');


            $this->data['dhpost'] = $this->Details->getdh(); // calling Post model method getPosts()
            $this->load->view('details', $this->data); // load the view file , we are passing $data array to view file


        }

        else{
            $this->load->view('details');
        }
    }

    }

    function home()
    {
        if($this->session->userdata('username')!="") {

            //$this->load->view('home');

            $this->load->model('Company');
            $this->data['fbcm'] = $this->Company->getfb();
            $this->data['smscm'] = $this->Company->getsms();
            $this->data['dhcm'] = $this->Company->getdh();
            $this->load->view('home', $this->data);

        }
    }

    function changepassword(){

        if($this->session->userdata('username')!="") {

            if($this->input->post('submit')) {
                $this->load->model('Cpassword');
                $this->Cpassword->process();
                redirect('Welcome/home');

            }else{
                $this->load->view('cpassword');


            }
        }

    }

    function addclient()
    {

        if ($this->session->userdata('username') != "") {
            $this->load->view('addclient');
        }
    }

    function insertclient(){

        $this->load->model('Insertclient');
        $this->Insertclient->process();


        redirect('Welcome/addclient');

    }

    function logout(){
        $this->load->library('session');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');

        $this->session->sess_destroy();
        redirect('Welcome');

        $this->session->set_userdata('status', "false");
    }


}
