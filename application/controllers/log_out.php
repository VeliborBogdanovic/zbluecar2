<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_out extends CI_Controller {

        
                        public function index()
                                {
                                        $this->session->unset_userdata('username');
                                        redirect(base_url());
                                }
            
        }


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

