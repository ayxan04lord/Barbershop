<?php 
class User_controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $data['staff'] = $this->db
        // ->select("s_id,s_name_az,s_name_en,s_name_ru, s_position,s_status,s_whatsApp,s_facebook,s_instagram,s_youtube,s_telegram,s_img,s_img_ex")
        ->join('position','position.p_id=staff.s_position','left')
        ->where('s_status','1')
        ->limit(6)
        ->get('staff')->result_array();
        // print_r("<pre>");
        // print_r($data['staff']);
        // die();
        $this->load->view('user/index', $data);
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

    public function staff(){
        $data['staff'] = $this->User_model->u_get_all_staff();
        // print_r('<pre>');
        // print_r($data['staff']);
        // die();
        $this->load->view('user/staff', $data);
    }
}