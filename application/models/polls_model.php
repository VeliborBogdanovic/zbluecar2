<?php


class Polls_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function poll($limit)
            {
            $offset=$this->uri->segment(3,0);
            
             $sql = "SELECT * FROM answers a inner JOIN questions_answers qa on a.id_answer=qa.id_answer INNER JOIN questions q ON qa.id_question=q.id_question JOIN polls p ON q.id_question=p.id_question WHERE p.acitve = 1\n"
            . "LIMIT ".$limit." OFFSET ".$offset."";
              $rez=  $this->db->query($sql);
              return $rez->result();
              
            }
             public function count($limit)
           {
               $offset=0;
             $sql = "SELECT * FROM answers a inner JOIN questions_answers qa on a.id_answer=qa.id_answer INNER JOIN questions q ON qa.id_question=q.id_question JOIN polls p ON q.id_question=p.id_question WHERE p.acitve = 1\n"
            . "LIMIT ".$limit." OFFSET ".$offset."";
              $rez=  $this->db->query($sql);
              return $rez->num_rows;
           }
           public function insert($id_a)
           {
               $sql="UPDATE answers SET votes=votes+1 WHERE id_answer=".$id_a."";
               $rez=  $this->db->query($sql);
                return $rez;
           }
    
}

