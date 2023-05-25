<?php $this->load->view('admin/includes/header_style'); ?>
<?php $this->load->view('admin/includes/left_menu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<style>
    .success_st, .danger_st{
        width: 100px;
        height: 20px;
        padding: 5px;
        background: green;
        color:white;
        border-radius: 4px;
    }

    .danger_st{
        background: red;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail <a href="<?php echo base_url('a_staff_list'); ?>"><button type="button" style="float:right" class="btn btn-primary">Back</button></a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTablea" width="100%" cellspacing="0">
            
            <tr>
                <th style="width: 200px;">Name Surname az</th>
                <td><?php echo $single_data['s_name_az'];?> <?php echo $single_data['s_surname_az'];?></td>
            </tr>

            <tr>
                <th>Name Surname en</th>
                <td><?php echo $single_data['s_name_en'];?> <?php echo $single_data['s_surname_en'];?>?></td>
            </tr>

            <tr>
                <th>Name Surname ru</th>
                <td><?php echo $single_data['s_name_ru'];?> <?php echo $single_data['s_surname_ru'];?></td>
            </tr>

            <tr>
                <th>Description az</th>
                <td><?php echo $single_data['s_description_az'];?></td>
            </tr>

            <tr>
                <th>Description en</th>
                <td><?php echo $single_data['s_description_en'];?></td>
            </tr>

            <tr>
                <th>Description ru</th>
                <td><?php echo $single_data['s_description_ru'];?></td>
            </tr>

            <tr>
                <th>Position</th>
                <td><?php echo $single_data['s_position'];?></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><?php echo $single_data['s_email'];?></td>
            </tr>

            <tr>
                <th>Experience</th>
                <td><?php echo $single_data['s_experience'];?></td>
            </tr>

            <tr>
                <th>Mobile</th>
                <td><?php echo $single_data['s_mobile'];?></td>
            </tr>

            <tr>
                <th>WhatsApp</th>
                <td><?php echo $single_data['s_whatsApp'];?></td>
            </tr>

            <tr>
                <th>Facebook</th>
                <td><?php echo $single_data['s_facebook'];?></td>
            </tr>

            <tr>
                <th>Telegram</th>
                <td><?php echo $single_data['s_telegram'];?></td>
            </tr>

            <tr>
                <th>YouTube</th>
                <td><?php echo $single_data['s_youtube'];?></td>
            </tr>

            <tr>
                <th>Status</th>
                <?php if($single_data['s_status'] == "Active"){ ?>
                    <td><span class="success_st"><?php echo $single_data['s_status'];?></span></td>
              <?php  }else{ ?>
                <td><span class="danger_st"><?php echo $single_data['s_status'];?></span></td>

             <?php } ?>            
            </tr>

            <tr>
            <th>Profile</th>
                <?php if($single_data['s_img']){ ?>
                    <td><img width="150px" src="<?php echo base_url('uploads/staff/'.$single_data['s_img']) ;?>" alt=""></td>
                <?php }else{ ?>
                    <td><img width="150px" src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt=""></td>
               <?php } ?>
            </tr>

            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_scripts'); ?>