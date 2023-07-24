<?php 
class User_controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('pagination');
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
        $config['base_url'] = base_url('staff');
        $config['total_rows']  = $this->db->count_all("staff");
        $config['uri_segment'] = 2;
        $config['per_page'] = 3;
        $config['num_links'] = 4;

        // $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        // $config['next_link'] = 'Əvvəl';
        // $config['last_link'] = 'Son';


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['links'] = $this->pagination->create_links();


        $data['staff'] = $this->User_model->u_get_all_staff($config,$page);

        if(!$data['staff']){
            redirect(base_url('home'));
        }

        // print_r('<pre>');
        // print_r($data['staff']);
        // die();
        $this->load->view('user/staff', $data);
    }

    public function staff_single($id){
        $id = $this->security->xss_clean($id);
        $data['single_staff'] = $this->User_model->get_single_staff($id);

        if($data['single_staff']){
            $this->User_model->get_single_staff($id);
        }else{
            redirect(base_url('staff'));
        }
        // print_r('<pre>');
        // print_r($data['single_staff']);
        // die();
        $this->load->view('user/staff_single',$data);

    }
}