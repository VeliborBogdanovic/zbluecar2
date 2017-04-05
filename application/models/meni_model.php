<?php


class Meni_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function meni()
            {
               $query = $this->db->get('meni');
                 return $query->result();
            }
    public function modify($id,$path,$name)
    {
       $query = "UPDATE meni SET path='".$path."', meni_name='".$name."'where id_meni=$id ";
       $sql=  $this->db->query($query);
       return $sql;
    }
    public function delete($id)
    {
       $query = "DELETE FROM meni where id_meni=$id ";
       $sql=  $this->db->query($query);
       return $sql;
    }
    public function add($path,$menuname)
    {
        $query="Insert INTO meni(path,meni_name) VALUES('".$path."','".$menuname."')";
        $sql=  $this->db->query($query);
        return $sql;
    }
    
}

