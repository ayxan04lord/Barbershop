<?php 

class Admin_controller extends CI_Controller{


    public function index(){
        $this->load->view("admin/login");
    }

    public function login_action(){
        
    }

    public function dashboard(){
        $this->load->view("admin/index");
    }

    public function staff_list(){
        $this->load->view("admin/staff/list");
    }
    
    public function staff_create(){
        $this->load->view("admin/staff/create");
    }

    public function staff_create_act(){
        $firstName_az   = $_POST['FirstName_az'];
        $lastName_az    = $_POST['LastName_az'];
        $description_az = $_POST['user_description_az'];

        $position       = $_POST['position'];
        $status         = $_POST['Status'];

        $firstName_en   = $_POST['FirstName_en'];
        $lastName_en    = $_POST['LastName_en'];
        $description_en = $_POST['user_description_en'];

        $firstName_ru   = $_POST['FirstName_ru'];
        $lastName_ru    = $_POST['LastName_ru'];
        $description_ru = $_POST['user_description_ru'];

        $email          = $_POST['Email'];
        $mobile         = $_POST['mobile'];
        $whatsApp       = $_POST['WhatsApp'];
        $facebook       = $_POST['Facebook'];
        $telegram       = $_POST['Telegram'];
        $youtube        = $_POST['Youtube'];
        
        
        if(!empty($firstName_az) && !empty($lastName_az) && !empty($description_az) && !empty($status) && !empty($position)){
            

            $data = [
                's_name_az'        => $firstName_az,
                's_surname_az'     => $lastName_az,
                's_description_az' => $description_az,

                's_name_en'        => $firstName_en,
                's_surname_en'     => $lastName_en,
                's_description_en' => $description_en,

                's_name_ru'        => $firstName_ru,
                's_surname_ru'     => $lastName_ru,
                's_description_ru' => $description_ru,

                's_position'       => $position,
                's_status'         => $status,
                's_email'          => $email,
                's_mobile'         => $mobile,
                's_whatsApp'       => $whatsApp,
                's_facebook'       => $facebook,
                's_telegram'       => $telegram,
                's_youtube'        => $youtube,
                's_create_date'    => date("Y-m-d H:i:s"),
                's_creater_id'     => "",
            ];

            $this->db->insert('staff',$data);
            redirect(base_url('a_staff_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }             
    }

}