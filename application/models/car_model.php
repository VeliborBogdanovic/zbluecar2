<?php


class Car_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function pretraga()
            {
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel GROUP BY c.id_brand";
                   $rez=$this->db->query($upit);
                     return $rez->result();
            }
    public function models_from_brands($brand)
            {
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel WHERE b.brand='".$brand."' GROUP BY c.model ";
                   $rez=$this->db->query($upit);
                    return $rez->result();
                   
            }
     public function all_data($brand,$model)
            {
        
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel JOIN ads_users au on c.id_ad=au.id_ad JOIN users u ON au.id_user=u.id_user"

                 . " WHERE b.brand='".$brand."' AND c.model='".$model ."'";
                   $rez=$this->db->query($upit);
                    return $rez->result();
                   
            }
            public function show()
            {
                 $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel JOIN ads_users au on c.id_ad=au.id_ad JOIN users u ON au.id_user=u.id_user ORDER BY c.id_ad";
                   $rez=$this->db->query($upit);
                   return $rez->result();
            }
            public function delete($id)
            {
              $query = "DELETE FROM ads where id_ad=$id ";
              $sql=  $this->db->query($query);
              $query1 = "DELETE FROM ads_users where id_ad=$id ";
               $this->db->query($query1);
              return $sql;
            }
            public function brands()
            {
                 $upit="SELECT * FROM brands";
                   $rez=$this->db->query($upit);
                   return $rez->result();
            }
            public function modify($id,$brand)
            {
               
                 $upit="UPDATE brands SET brand='".$brand."' where id_brand=".$id." ";
                   $rez=$this->db->query($upit);
                   
                   return $rez;
            }
            public function add($brand)
            {
                $upit="INSERT INTO brands(brand) VALUES('".$brand."')";
                   $rez=$this->db->query($upit);
                   
                   return $rez;
            }
            public function deletebrand($id)
            {
              $query = "DELETE FROM brands where id_brand=$id ";
              $sql=  $this->db->query($query);
              return $sql;
            }
            public function fuels()
            {
                 $upit="SELECT * FROM fuels";
                   $rez=$this->db->query($upit);
                   return $rez->result();
            }
            public function modifyFuel($id,$fuel)
            {
                echo $id.$fuel;
                 $upit="UPDATE fuels SET type='".$fuel."' where id_fuel=".$id." ";
                   $rez=$this->db->query($upit);
                   
                   return $rez;
            }
            public function deletefuel($id)
            {
              $query = "DELETE FROM fuels where id_fuel=$id ";
              $sql=  $this->db->query($query);
              return $sql;
            }
            public function addFuel($fuel)
            {
                 $upit="INSERT INTO fuels(type) VALUES('".$fuel."')";
                   $rez=$this->db->query($upit);
                   
                   return $rez;
            }
}
