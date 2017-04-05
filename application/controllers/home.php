<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

         function __construct()
            {
                    parent::__construct();
                     
            }

	public function index()
	{
                $data=array();
                $data['form']=array('class'=>'search_form','id'=>'searchForm' ,'method'=>'post');
                
               
               $this->load->model('car_model','cm');
                $data['all_cars']=$this->cm->pretraga();
                $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                
                
                
                
		$this->load->view('header',$data);     
                $this->load->view('meni',$data);
                $this->load->view('slider',$data);
                $this->load->view('search',$data);
                $this->load->view('content',$data);
                $this->load->library('../controllers/pole/',$data);
                $this->pole->index();
                $this->load->view('footer',$data);
               
                
	}
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */