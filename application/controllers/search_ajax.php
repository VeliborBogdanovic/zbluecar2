<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_ajax extends CI_Controller {

    public function ajaxx()
    {
        $brand=$this->input->post('brand');
        $this->load->model('car_model','cm');
        $rez=$this->cm->models_from_brands($brand);
        #echo "<select id='model'>";
        foreach ($rez as $mod) {

            echo "<option value=".$mod->model.">".$mod->model."</option>";
        }
        #echo "</select>";
    }
    public function ajax2()
    {

        $brand=$this->input->post('brand');
        $model=$this->input->post('model');
        $price=$this->input->post('price');
        $this->load->model('car_model','cm');
        $rez=$this->cm->all_data($brand,$model);

        foreach ($rez as $mod) {

            echo "<div class='ajde'><img id='theImg' src='".base_url().$mod->photo."' /> 
                          <h3>".$mod->brand."  ".$mod->model."</h3>
                          <p>Price:".$mod->price."€ |" ."\nYear: " .$mod->year."</p>"
                . "<p><strong>Post by:</strong>".$mod->username ."| \n \n \n <strong>Date:</strong> " .$mod->date.""
                . "|\n \n \n <strong>Contact:</strong>".$mod->email."</p></div> ";


        }


    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */