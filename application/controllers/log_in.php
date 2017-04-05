<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_in extends CI_Controller {

        public function index()
        {
           
                      
               
                     
               
            if($this->input->post('Submit')){

                $user=$this->input->post('name1');
                $pass=$this->input->post('password1');
           
                
                $this->load->model('users_model','um');
                $res=$this->um->logg($user,$pass);
                $vraca=$this->um->logg_id($user,$pass);
                $podaci['vraca']=$vraca;
                
                foreach ($podaci['vraca'] as $v) {
                    $podaci['id']= $v->id_user;
                }
               
                if($res!=0)
                    {
                            $newdata = array(
                                'username'  => $user,
                                'role'=>2,
                                'id' =>$podaci['id']
                            );
                            
                            $this->session->set_userdata($newdata);
                            $this->session->set_flashdata('message',$podaci['vraca']);
                             redirect(base_url());
                     }
                       else {
                           $this->session->set_flashdata('message',"Wrong username or password");
                           redirect(base_url('/register'),'refresh');
                        }
                    
                    }
                   
                        }
		
	}
                
                        
                        
            
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


