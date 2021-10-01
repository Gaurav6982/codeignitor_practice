<?php
class Pages extends CI_Controller {

        public function view($page = 'home'){
            // echo $page;
            // echo $page." ".$sample." ".$third;
            // echo APPPATH;
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    show_404();
            }
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->model('news_model');
            $data['news']=$this->news_model->get_news();
            // print_r($data);
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
       
}