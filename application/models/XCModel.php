<?php

class XCModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_xccrud(){

        $query = $this->db->get("xezercourse_db");
        //select * from xezercourse_db
        return $query->result();

    }

}