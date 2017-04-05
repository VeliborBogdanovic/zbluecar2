<?php


class Admin_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function meni()
            {
               
                  $upit="SELECT * FROM meni";
                   $rez=$this->db->query($upit);
                     return $rez->result();
            }
    
}
