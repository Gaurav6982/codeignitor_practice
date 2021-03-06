<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function index()
        {
            $data['news'] = $this->news_model->get_news_by_user();
            $data['title'] = 'News archive';

            $this->load->view('templates/header', $data);
            $this->load->view('news/index', $data);
            $this->load->view('templates/footer');
        }
        public function get_news_by_user(){
            echo json_encode($this->news_model->get_news_by_user());
        }
        public function get_all_news_api(){
            echo json_encode($this->news_model->get_news());
        }
        public function set_news_api(){
            if($this->news_model->set_news())
            echo json_encode(['success'=>"News Created Successfully!"]);
            else
            echo json_encode(['error'=>"Something Went Wrong!"]);
        }
        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
        
                if (empty($data['news_item']))
                {
                        show_404();
                }
        
                $data['title'] = $data['news_item']->title;
        
                $this->load_view('view',$data);
        }
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load_view('create',$data);
            }
            else
            {
                $data['msg']="News Created Successfully!!";
                if($this->news_model->set_news())
                $this->load->view('news/success',$data);
                else
                $this->load->view('news/error');
                
            }
        }
        public function delete($id=NULL){
            if($id==NULL){
                $this->index();
                return;
            }

            $record=$this->news_model->get_news_by_id($id);
            if($record==NULL){
                $this->index();
                return;
            }

            if($this->news_model->delete_news($id))
            $this->index();


        }
        public function update_view($id=NULL){
            $this->load->helper('form');
            $this->load->library('form_validation');
            if($id==NULL){
                $this->index();
                return;
            }
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');
            $data['title']="Update a News";
            $data['row']=$this->news_model->get_news_by_id($id);
            if ($this->form_validation->run() === FALSE)
            {
                $this->load_view('update',$data);
                return;
            }
            // else
            // {
            //     $data['msg']="News Updated Successfully!!";
            //     if($this->news_model->update_news($id))
            //     $this->load->view('news/success',$data);
            //     else
            //     $this->load->view('news/error');
                
            // }
        }
        public function update_news_api($id){
            
            if($this->news_model->update_news($id))
                echo json_encode(['success'=>'News Updated Successfully!']);
            else
                echo json_encode(['error'=>'Something Wrong!']);
        }
        public function load_view($page='index',$data=NULL){
            $this->load->view('templates/header',$data);
            $this->load->view('news/'.$page,$data);
            $this->load->view('templates/footer');  
        }
}