<?php 
// https://www.pleth.com/posts/200-301-404-other-numbers-http-error-codes
// https://www.youtube.com/watch?v=RBB2N341tr0&t=18s&ab_channel=1BestCsharpblog
// https://codeigniter.com/userguide3/general/urls.html
class User_controller extends CI_Controller{

    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function gallery(){
        $this->load->view('user/gallery');
    }


    public function service(){
        $this->load->view('user/service');
    }
}