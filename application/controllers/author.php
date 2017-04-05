<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {
        
    public function index()
            {
                 $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
               
                    $this->load->view("meni",$data);
                     $this->load->view("header");
                    $this->load->view("author");
                     $this->load->view("footer");
                   
            }
            
        }


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

