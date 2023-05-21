<?php



class User_Controller extends CI_Controller{

    // public function __construct(){
    //     parent::__construct();
    //     $this->load->model('XCModel');

    //     $this->User_Controller = new XCModel;

    // }

    public function index(){

        $this->load->view('user/index');
        
    }

    public function news(){

        $this->load->view('user/news');

    }

    public function gallery(){

        $this->load->view('user/gallery');

    }


}