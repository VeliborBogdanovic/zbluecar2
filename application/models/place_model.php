<?php


class Place_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function brand_id($brand) {
        $sql ="SELECT id_brand from brands WHERE brand='".$brand."'";
        return  $this->db->query($sql)->result();
     }

   
    public function insert_ad($brand,$model,$price,$year,$picture,$resized,$fuels,$date)
{
 $sql1="INSERT INTO `ads` (`model`, `year`, `price`, `photo`, `date`, `resized_photo`, `id_fuel`, `id_brand`) VALUES ('$model', '$year', '$price', '$picture', '".date('Y-m-d')."', '$resized', '$fuels', '$brand')";
  $this->db->query($sql1);
  return $this->db->insert_id();
}
    
    public function insert_user($id,$id_ad){
        $sql="INSERT INTO ads_users VALUES(".$id_ad.",".$id.")";
        return $this->db->query($sql);
    }
}




