<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {

    public function index()
    {
        $this->load->view('form'); 
    }

    public function submitUser()
    {
            //load model to connect to the db
            $this->load->model('form_model');
            $this->form_model->insertIdentitas();
            $this->session->set_flashdata('success', 'anda telah terdaftar');
            
            redirect('formulir');
               
        //else 
        //{ 
          // $this->load->view('formulir');
        //}
        
    }

}

/* End of file form.php */
