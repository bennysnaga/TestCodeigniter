<?php
class Data_diri extends CI_Controller{
    function index(){
        $this->load->view('header');
        $this->load->view('data_diri');
        $this->load->view('footer');
    }
}