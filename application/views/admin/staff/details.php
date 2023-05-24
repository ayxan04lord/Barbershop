<?php $this->load->view('admin/includes/header_style'); ?>
<?php $this->load->view('admin/includes/left_menu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTablea" width="100%" cellspacing="0">
            
            <tr>
                <th>Name Surname</th>
                <td><?php echo $single_data['s_name_az'];?> <?php echo $single_data['s_surname_az'];?></td>
            </tr>

            <tr>
                <th></th>
                <td><?php echo $single_data['s_name_az'];?></td>
            </tr>

            <tr>
                <th>Name Surname</th>
                <td><?php echo $single_data['s_name_az'];?></td>
            </tr>

            <tr>
                <th>Name Surname</th>
                <td><?php echo $single_data['s_name_az'];?></td>
            </tr>




            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_scripts'); ?>