<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_Controller{

        public function index(){
            $this->load->view('login');
        }

        public function login_validation(){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            
        }
    }