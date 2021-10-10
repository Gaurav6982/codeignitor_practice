<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function add_user(){
            $this->load->model('users_model');
            if($this->users_model->create_user($data)){
                echo json_encode(['msg'=>'Success']);
            }
            else{
                echo json_encode(['msg'=>'Something Went Wrong']);
            }
        }
        
       
        
}