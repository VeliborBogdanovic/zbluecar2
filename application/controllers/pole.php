<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pole extends CI_Controller {
    
    public function index() {
        $this->load->model('polls_model','pm');
        $limit=2;
        $rez1=  $this->pm->poll($limit);
        
        $total=  $this->pm->count($limit);
        $submit=array('name'=>'Submit','class'=>'button233','type'=>'button','value'=>'Vote','id'=>'vote');
        $data['submit']=$submit;
        $data['polls']=$rez1;
        $config["full_tag_open"] = '<ul class="pagination" id="mica">';
        $config["full_tag_close"] = '</ul>';	
        $config["first_link"] = "&laquo;";
        $config["first_tag_open"] = "<li>";
        $config["first_tag_close"] = "</li>";
        $config["last_link"] = "&raquo;";
        $config["last_tag_open"] = "<li>";
        $config["last_tag_close"] = "</li>";
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '<li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '<li>';
        $config['cur_tag_open'] = '<li class="active"><a href="'.base_url().'">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
          
        $config['total_rows']=(intval($total))+1;
        $config['per_page']=2;
        $config['uri_segment']=$this->uri->segment(3,0);
       
         $config['base_url']=  site_url('/home/index/');
          $this->load->library('pagination',$config);
         $page_links=$this->pagination->create_links();
         $data['page_links']= $page_links;
         
           $this->load->view("sidebar",$data);
    }
        public function ajax()
        {
            
             $this->load->model('polls_model','pm');
             $id_a=  $this->input->post('id_answer');
                $insert=  $this->pm->insert($id_a);
                if($insert){
                    echo "Thanks for voting";
                }
		
	}

        }
        
                
                        
            
               
                
                        
            
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


