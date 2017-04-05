<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

        public function index()
        {
                 $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                $form=array('name'=>'form1','method'=>'post');
                $data['form']=$form;
                $form1=array('name'=>'form2','method'=>'post');
                $data['form1']=$form1;
                $username=array('name'=>'username','placeholder'=>'Enter username');
                $data['username']=$username;
                $username1=array('name'=>'name1','placeholder'=>'Enter username');
                $data['username1']=$username1;
                $password=array('name'=>'password','id'=>'password','placeholder'=>'Enter password');
                $data['password']=$password;
                $password1=array('name'=>'password1','id'=>'password1','placeholder'=>'Enter password');
                $data['password1']=$password1;
                $email=array('name'=>'email','id'=>'email','placeholder'=>'Enter your email');
                $data['email']=$email;
                $submit=array('name'=>'Submit','class'=>'button233','type'=>'submit','value'=>'Log in');
                $data['submit']=$submit;
                $submit1=array('name'=>'Submit','class'=>'button233','type'=>'submit','value'=>'Register');
                $data['submit1']=$submit1;
                
                  $this->form_validation->set_rules('name','','required|min_length[3]');
                 $this->form_validation->set_rules('password','','required|min_length[3]');
                  $this->form_validation->set_rules('email','','required||valid_email');
                $this->form_validation->set_message('required','Field %s is requried!!!');
                    $this->form_validation->run();
                   
                 
         
                $this->load->view('header',$data);
                 $this->load->view('meni',$data);
                 $this->load->view('login',$data);
                  $this->load->view('footer',$data);
         }
         public function radi()
                 {
                         if($this->input->post('Submit')){

                $user=$this->input->post('username');
                $pass=$this->input->post('password');
                $mail=$this->input->post('email');
                
                $this->load->model('users_model','um');
                $res=$this->um->search_users($user,$pass,$mail);
                
                if($res==0)
                    {
                        $res1=$this->um->insert($user,$pass,$mail);
                        $vraca=$this->um->logg_id($user,$pass);
                        $podaci['vraca']=$vraca;
                
                        foreach ($podaci['vraca'] as $v) {
                            $podaci['id']= $v->id_user;
                        }
                        if($res1){
                            $newdata = array(
                                'username'  => $user,
                                'email'     => $mail,
                               'id' =>$podaci['id'],
                                'role'=>2,
                            );
                               
                            $this->session->set_userdata($newdata);
                           redirect(base_url());
#redirect(base_url());
                        }
                    
                    }
                    
		
	}
                 }
                        
                        
            
        }


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

