<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		
                
	}
        public function index()
	{
            $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                $this->load->view('meni',$data);
                $this->load->view('header',$data);
                $this->load->view('admin/meni.php',$data); 
		
	$this->load->view('footer',$data);
                
        }
        public function show(){
         $type=$this->uri->segment(3);
           
         if($type=="meni"){

             $this->load->model('meni_model','mm');
             $podaci['meni']=$this->mm->meni();
             $this->load->view('admin/showMeni',$podaci);
         }
         if($type=="users"){
               
             $this->load->model('users_model','um');
             $podaci['users']=$this->um->show();
             $this->load->view('admin/showUsers',$podaci);
         } 
         if($type=="ads"){
               
             $this->load->model('car_model','um');
             $podaci['ads']=$this->um->show();
             $this->load->view('admin/showAds',$podaci);
         } 
         if($type=="brands"){
               
             $this->load->model('car_model','um');
             $podaci['brands']=$this->um->brands();
             $this->load->view('admin/showBrands',$podaci);
         } 
         if($type=="fuels"){
               
             $this->load->model('car_model','cm');
             $podaci['fuels']=$this->cm->fuels();
             $this->load->view('admin/showFuels',$podaci);
         } 
                
        }
	public function modify()
        {
         $type=$this->uri->segment(3);
           
         if($type=="meni")
        {
            $id=$this->input->post('idmeni');
            $path=$this->input->post('path');
            $name=$this->input->post('meni');
             $this->load->model('meni_model','mm');
             
            $flag= $this->mm->modify($id,$path,$name);
            if($flag)
            {
                 $this->load->model('meni_model','mm');
             $podaci['meni']=$this->mm->meni();
             $this->load->view('admin/showMeni',$podaci);
            }
            
         }  
         if($type=="users")
        {
            $iduser=$this->input->post('iduser');
            $idrole=$this->input->post('idrole');
            $user=$this->input->post('user');
            $email=$this->input->post('email');
             $this->load->model('users_model','um');
             
            $flag= $this->um->modify($iduser,$idrole,$user,$email);
            if($flag)
            {
                  $this->load->model('users_model','um');
             $podaci['users']=$this->um->show();
             $this->load->view('admin/showUsers',$podaci);
            }
            
         }  
         if($type=="brands")
        {
            $id=$this->input->post('idbrand');
            $brand=$this->input->post('brand');
            
             $this->load->model('car_model','cm');
             
            $flag= $this->cm->modify($id,$brand);
            
            if($flag)
            {
             $this->load->model('car_model','um');
             $podaci['brands']=$this->um->brands();
             $this->load->view('admin/showBrands',$podaci);
            }
        }
           if($type=="fuels")
        {
            $id=$this->input->post('idfuel');
            $fuel=$this->input->post('fuel');
            
             $this->load->model('car_model','cm');
             
            $flag= $this->cm->modifyFuel($id,$fuel);
            
            if($flag)
            {
             $this->load->model('car_model','um');
             $podaci['fuels']=$this->cm->fuels();
             $this->load->view('admin/showFuels',$podaci);
            }
            
        }  
        
            }
        
        public function delete()
        {
             $type=$this->uri->segment(3);
             
             if($type=="meni")
            {
             $id=$this->input->post('id');
             $this->load->model('meni_model','mm');
             $flag=$this->mm->delete($id);
             if($flag)
                { 
                   $this->load->model('meni_model','mm');
                   $podaci['meni']=$this->mm->meni();
                   $this->load->view('admin/showMeni',$podaci);

                }
            }
            if($type=="users")
            {
             $id=$this->input->post('id');
             $this->load->model('users_model','mm');
             $flag=$this->mm->delete($id);
             if($flag)
                { 
                   $this->load->model('users_model','mm');
                   $podaci['users']=$this->mm->show();
                   $this->load->view('admin/showUsers',$podaci);

                }
            }
            if($type=="ads")
            {
             $id=$this->input->post('id');
             $this->load->model('car_model','mm');
             $flag=$this->mm->delete($id);
             if($flag)
                { 
                   
                   $this->load->model('car_model','mm');
                   $podaci['ads']=$this->mm->show();
                   $this->load->view('admin/showAds',$podaci);

                }
            }
            if($type=="brands")
            {
             $id=$this->input->post('id');
             $this->load->model('car_model','cm');
             $flag=$this->cm->deletebrand($id);
             if($flag)
                { 
                 
                   $podaci['brands']=$this->mm->brands();
                   $this->load->view('admin/showBrands',$podaci);

                }
            }
            if($type=="fuels")
            {
             $id=$this->input->post('id');
             $this->load->model('car_model','cm');
             $flag=$this->cm->deletefuel($id);
             if($flag)
                { 
                 
                   $podaci['fuels']=$this->cm->fuels();
                   $this->load->view('admin/showFuels',$podaci);

                }
            }
        }
        public function add()
        {
            $type=$this->uri->segment(3);
            if($type=="meni")
            {
                $path=$this->input->post('path');
                $menu=$this->input->post('menuname');
                $this->load->model('meni_model','mm');
                $flag=$this->mm->add($path,$menu);
                if($flag)
                {
                $this->load->model('meni_model','mm');
                $podaci['meni']=$this->mm->meni();
                $this->load->view('admin/showMeni',$podaci);
                }
            }
            if($type=="users")
            {
                $user=$this->input->post('user');
                $pass=$this->input->post('pass');
                $email=$this->input->post('email');
                $idrole=$this->input->post('idrole');
                $this->load->model('users_model','mm');
                $flag=$this->mm->add($pass,$idrole,$user,$email);
                if($flag)
                {
                $this->load->model('users_model','mm');
                $podaci['users']=$this->mm->show();
                $this->load->view('admin/showUsers',$podaci);
                }
            }
            if($type=="brand")
            {
                $brand=$this->input->post('brand');
                
                $this->load->model('car_model','cm');
                $flag=$this->cm->add($brand);
                if($flag)
                {
                $podaci['brands']=$this->cm->brands();
                $this->load->view('admin/showBrands',$podaci);
                }
            }
            if($type=="fuels")
            {
                $fuel=$this->input->post('fuel');
                
                $this->load->model('car_model','cm');
                $flag=$this->cm->addFuel($fuel);
                if($flag)
                {
                $podaci['fuels']=$this->cm->fuels();
                $this->load->view('admin/showFuels',$podaci);
                }
            }
        }
        
	

	

	
	
	}

