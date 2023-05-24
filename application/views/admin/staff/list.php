<?php $this->load->view('admin/includes/header_style'); ?>
<?php $this->load->view('admin/includes/left_menu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
<?php $this->load->view('admin/includes/statistics'); ?>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">My Tables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name Surname</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Experience</th>
                        <th>Status</th>
                        <th>Profile</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($get_all_data as $get_all_data_key) { ?>
                        <tr>
                            <td><?php echo $get_all_data_key['s_name_az']; ?> <?php echo $get_all_data_key['s_surname_az']; ?></td>
                            <td><?php echo $get_all_data_key['s_position'] ?></td>
                            <td><?php echo $get_all_data_key['s_email'] ?></td>
                            <td><?php echo $get_all_data_key['s_experience'] ?></td>
                            <td><?php echo $get_all_data_key['s_status'] ?></td>
                            <td><?php echo $get_all_data_key['s_img'] ?></td>
                            <td>
                                <a href="#" style="text-decoration: none;">
                                    <button type="button" class="btn  btn-warning" title="Update">
                                        <i class="fas fa-fw fa-pen"></i>
                                    </button>
                                </a>
                                <a href="#" style="text-decoration: none;">
                                    <button type="button" class="btn btn-danger" title="Delete">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_scripts'); ?>