<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Model {




        public function validate_user($data) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('login')->row();
    }
}


?>