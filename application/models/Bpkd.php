<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpkd extends CI_Model {

    function bpkd(){
        $data = $this->db->get('pkb');
        return $data->result_array();
    }

    function get_bpkd($id){
        $this->db->where('id', $id);
        $data = $this->db->get('pkb');
        return $data->result_array();
    }

}