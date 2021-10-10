<?php
class LoginRegister extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('users_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function login_view(){
        $data['title']="Login";
        $this->load->view('templates/header',$data);
        $this->load->view('auth/login',$data);
        $this->load->view('templates/footer');
    }
    public function register_view(){
        $data['title']="Register";
        $this->load->view('templates/header',$data);
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }
    public function login($data=NULL){
       if($data==NULL){
            $this->form_validation->set_rules('email',"Email",'required');
            $this->form_validation->set_rules('password',"Password",'required');

            if($this->form_validation->run()===FALSE){
                $this->session->set_flashdata('error','All Fields are Required.');
                redirect(site_url('login_view'));
                return;
            }
           $data=[
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
           ];
       }
       $user=$this->users_model->checkPassword($data);
    //    print_r($user);
       if($user!=false){
            $this->session->set_userdata('user',$user);
            redirect(site_url('news'));
            return;
       }
       else{
           $this->session->set_flashdata('error','Email and Password Not Matching!');
           redirect(site_url('login_view'));
           return;
       }

    }
    public function register(){
        echo json_encode(['data']);
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $this->form_validation->set_rules('name',"User Name",'required');
            $this->form_validation->set_rules('email',"Email",'required');
            $this->form_validation->set_rules('password',"Password",'required');
            $this->form_validation->set_rules('confirmPassword',"Confirm Password",'required');

            if($this->form_validation->run()===FALSE){
                $this->session->set_flashdata('error','All Fields are Required.');
                redirect(site_url('register_view'));
                return;
            }
            else{
                $data=[
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>$this->input->post('password'),
                    'confirm-password'=>$this->input->post('confirmPassword'),
                ];

                if($data['password']==$data['confirm-password'])
                {
                    $data['password']=md5($data['password']);
                    if($this->users_model->user_exists($data)){
                        $this->session->set_flashdata('error','Email Already Exists.');
                        redirect(site_url('register_view'));
                        return;
                    }
                    if($this->users_model->create_user($data))
                    $this->login($data);
                    else{
                        $this->session->set_flashdata('error','Somehing Went Wrong!');
                        redirect(site_url('register_view'));
                        return;
                    }
                }
                else{
                    $this->session->set_flashdata('error','Password Not Matching.');
                    redirect(site_url('register_view'));
                    return;
                }
            }
        }
    }
    public function logout(){
        session_destroy();
        redirect(site_url('home'));
    }
}