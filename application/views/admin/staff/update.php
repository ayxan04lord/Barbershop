<?php $this->load->view('admin/includes/header_style'); ?>
<?php $this->load->view('admin/includes/left_menu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
<?php $this->load->view('admin/includes/statistics'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff Edit<a href="<?php echo base_url('a_staff_list'); ?>"><button type="button" style="float:right" class="btn btn-primary">To list</button></a></h6>
    </div>
    <div class="card-body">

        <br>
        <h3 class="text-center text-white bg-warning py-2 rounded">Contact Information</h3>
        <br>
        <form action="<?php echo base_url('a_edit_staff_act/'.$single_data['s_id']); ?>" method="post" enctype="multipart/form-data">

            <!-- Nav pills -->
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">AZE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">ENG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">RUS</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active mx-0 px-0" id="home">
                    <div class="form-group row mt-3">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name</b></label>
                            <input type="text" name="FirstName_az" class="form-control" id="FirstName" placeholder="First Name" value="<?php echo $single_data['s_name_az']; ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="LastName"><b>Last Name</b></label>
                            <input type="text" name="LastName_az" class="form-control" id="LastName" placeholder="Last Name" value="<?php echo $single_data['s_surname_az']; ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="Email"><b>Email</b></label>
                            <input type="text" name="Email" class="form-control" id="Email" placeholder="Email" value="<?php echo $single_data['s_email']; ?>">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description</b></label>
                            <textarea name="user_description_az" id="description" cols="30" rows="5" class="form-control"><?php echo $single_data['s_description_az']; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu1">
                    <div class="form-group row mt-3">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name EN</b></label>
                            <input type="text" name="FirstName_en" class="form-control" id="FirstName" placeholder="First Name" value="<?php echo $single_data['s_name_en']; ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="LastName"><b>Last Name EN</b></label>
                            <input type="text" name="LastName_en" class="form-control" id="LastName" placeholder="Last Name" value="<?php echo $single_data['s_surname_en']; ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="Email"><b>Email</b></label>
                            <input type="text" name="Email" class="form-control" id="Email" placeholder="Email" value="<?php echo $single_data['s_email']; ?>">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description EN</b></label>
                            <textarea name="user_description_en" id="description" cols="30" rows="5" class="form-control"><?php echo $single_data['s_description_en']; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container fade mx-0 px-0" id="menu2">
                    <div class="form-group row mt-3">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="FirstName"><b>First Name RU</b></label>
                            <input type="text" name="FirstName_ru" class="form-control" id="FirstName" placeholder="First Name" value="<?php echo $single_data['s_name_ru'] ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="LastName"><b>Last Name RU</b></label>
                            <input type="text" name="LastName_ru" class="form-control" id="LastName" placeholder="Last Name" value="<?php echo $single_data['s_surname_ru'] ?>">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="Email"><b>Email</b></label>
                            <input type="text" name="Email" class="form-control" id="Email" placeholder="Email" value="<?php echo $single_data['s_email'] ?>">
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                            <label for="description"><b>Description RU</b></label>
                            <textarea name="user_description_ru" id="description" cols="30" rows="5" class="form-control"><?php echo $single_data['s_description_ru'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="Position"><b>Position</b></label>
                        <select name="position" id="Position" class="form-control">
                            <option value="">-SELECT-</option>
                            <option <?php if($single_data['s_position'] == "Director"){ echo "SELECTED";}?> value="Director">Director</option>
                            <option <?php if($single_data['s_position'] == "Manager"){ echo "SELECTED";}?> value="Manager">Manager</option>
                            <option <?php if($single_data['s_position'] == "Master"){ echo "SELECTED";}?> value="Master">Master</option>
                            <option <?php if($single_data['s_position'] == "Asistent"){ echo "SELECTED";}?> value="Asistent">Asistent</option>
                            <option <?php if($single_data['s_position'] == "Other"){ echo "SELECTED";}?> value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="mob"><b>Mobile</b></label>
                        <input type="text" name="mobile" class="form-control" id="mob" placeholder="+994-- --- -- --" value="<?php echo $single_data['s_mobile']; ?>">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="WhatsApp"><b>WhatsApp</b></label>
                        <input type="text" name="WhatsApp" class="form-control" id="WhatsApp" placeholder="+994-- --- -- --" value="<?php echo $single_data['s_whatsApp']; ?>">
                    </div>
                </div>
            </div>




            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Social Network</h3>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Facebook"><b>Facebook</b></label>
                        <input type="text" name="Facebook" class="form-control" id="Facebook" placeholder="Facebook" value="<?php echo $single_data['s_facebook']; ?>">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Instagram"><b>Instagram</b></label>
                        <input type="text" name="Instagram" class="form-control" id="Instagram" placeholder="Instagram" value="<?php echo $single_data['s_instagram']; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Telegram"><b>Telegram</b></label>
                        <input type="text" name="Telegram" class="form-control" id="Telegram" placeholder="https://www....." value="<?php echo $single_data['s_telegram'] ?>">
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Youtube"><b>Youtube</b></label>
                        <input type="text" name="Youtube" class="form-control" id="Youtube" placeholder="Youtube" value="<?php echo $single_data['s_youtube'] ?>">
                    </div>
                </div>
            </div>
            <br>

            <br>
            <h3 class="text-center text-white bg-warning py-2 rounded">Extra</h3>
            <br>

            <div class="form-group">
                <div class="row">


                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="Status"><b>Status</b></label>
                        <select name="Status" id="Status" class="form-control">
                            <option value="">-SELECT-</option>
                            <option <?php if($single_data['s_status'] == "Active"){ echo "SELECTED";}?> value="Active">Active</option>
                            <option <?php if($single_data['s_status'] == "Deactive"){ echo "SELECTED";}?> value="Deactive">Deactive</option>
                        </select>
                    </div>

                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="Experience"><b>Experience</b></label>
                        <input type="text" name="experience" class="form-control" id="Experience" placeholder="Enter Experience" value="<?php echo $single_data['s_experience'] ?>">
                    </div>

                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <label for="ProfilePhoto"><b>Profile Photo</b></label>
                        <input type="file" name="file" class="form-control" id="ProfilePhoto">
                    </div>

                    <div class="col-sm-3 mb-3 mb-sm-0" style="margin-top: 32px;">
                    <button type="submit" style="width:100%" class="btn btn-warning">Update</button>
                    </div>

                    <a target="_blank" href="<?php echo base_url('uploads/staff/'.$single_data['s_img']); ?>">
                    <img style="margin-left:14px;" width="150px" src="<?php echo base_url('uploads/staff/'.$single_data['s_img']); ?>" alt="">
                    </a>

                </div>
            </div>
            <br>

        </form>



    </div>
</div>



<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/footer_scripts'); ?>