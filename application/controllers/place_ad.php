<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Place_ad extends CI_Controller{

         function __construct()
            {
                    parent::__construct();
                     
            }

	public function index()
	{
            $this->load->helper('file');
                 $this->load->helper('url');
                $data=array();
                $data['form']=array('class'=>'search_form','id'=>'searchForm' ,'method'=>'post');
                
               
               $this->load->model('car_model','cm');
                $data['all_cars']=$this->cm->pretraga();
                $this->load->model('meni_model','mm');
                $rez= $this->mm->meni();
                $data['meni']=$rez;
                $data['price']=array('type'=>'text','id'=>'price','name'=>'price','placeholder'=>'Price for you car');
                $this->load->library('calendar');
                $year=array('type'=>'text','id'=>'year','name'=>'year','placeholder'=>'Year for you car examlpe:2014');
                $data['year']=$year;
                $fuel=array('type'=>'radio','id'=>'fuel','name'=>'fuel','value'=>'2','class'=>'fuel');
                $data['fuel']=$fuel;
                $fuel1=array('type'=>'radio','id'=>'fuel1','name'=>'fuel','value'=>'1','class'=>'fuel');
                $data['fuel1']=$fuel1;
                $pic=array('type'=>'file','id'=>'pic','name'=>'pic','value'=>'Upolad your car photo');
                $data['pic']=$pic;
                $submit=array('name'=>'Submit','class'=>'button233','type'=>'submit','value'=>'Place your ad','id'=>'place_ad');    
                $data['submit1']=$submit;
                
                if($this->input->post('Submit')){  
                
                 $this->form_validation->set_rules('price','','required|min_length[3]|numeric');
                 $this->form_validation->set_rules('year','','required|exact_length[4]');
                 $this->form_validation->set_message('required','Field %s is requried!!!');
                 $this->form_validation->run();
                
                     
                $brand=$this->input->post('brands1');
                $model=$this->input->post('model1');
                $price=$this->input->post('price');
                $year=$this->input->post('year');
                $fuels=$this->input->post('fuel');
                $photo=$this->input->post('pic');
                
                 
                 $config['upload_path'] = './images';
              
                 $config['allowed_types'] = 'gif|jpg|png|jpeg';
                 $config['max_size']	= '1000';
                 $config['max_width']  = '2048';
                 $config['max_height']  = '1200';

                   $this->load->library('upload', $config);
                    
                    $this->upload->set_allowed_types('gif|jpg|png|jpeg');   
                    if (!$this->upload->do_upload('pic')) 
                            {
                            echo("Picture is to");
                            }
                     else
                    {
                    $this->upload->do_upload('filename_in_html_input');
                            
                       $data1=array('upload_data'=>$this->upload->data());
                       $picture="/images/".$data1['upload_data']['file_name'];
                        $file=$data1['upload_data']['file_name'];
                       
                       $path=$data1['upload_data']['full_path'];
                        $config['image_library'] = 'gd2';
                        $config['source_image']	= $path;
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']= 95;
                        $config['height']= 95;
                        $config['new_image']="/images/"."resized_".$file;
                       $this->load->library('image_lib'); 
                       $this->image_lib->initialize($config);
                       $this->image_lib->resize();
                       $resized=$config['new_image'];
                        $this->load->model("place_model",'pl');
                     $id_usera=$this->session->userdata('id');
                       $date=date('Y-m-d');
                      $podaci['id_branda']=$this->pl->brand_id($brand);
                     
                      
                      foreach($podaci['id_branda'] as $v) {
                            $podaci['brandID']= $v->id_brand;
                             }
                             $brandID=$podaci['brandID'];
                             
                    $succes=$this->pl->insert_ad($brandID,$model,$price,$year,$picture,$resized,$fuels,$id_usera,$date);
                    
                      $useri=  $this->pl->insert_user($id_usera,$succes);
                                if($useri){
                                    $this->session->set_flashdata('place',"You have successfully posted your ad");
                                }
                        
                        }
                     
                    }
                       
                      
                       $this->load->view('header',$data);     
                $this->load->view('meni',$data);
        
                 $this->load->view('place',$data);
        $this->load->view('footer',$data);        
                
                
		
               # $this->load->view('content',$data);
                
               # $this->load->view('footer',$data);
               
                
	}
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
