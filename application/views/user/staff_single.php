<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/navbar'); ?>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <?php if($single_staff['s_img']){ ?>
                        <img class="img-fluid w-75 align-self-end" src="<?php echo base_url('uploads/staff/'.$single_staff['s_img']); ?>" alt="">
                    <?php }else{ ?>
                                <img class="img-fluid" style="height: 425px!important;width:100%!important; object-fit:contain;" src="http://localhost/barbershop/public/assets/img/image-07-08-22-10-34.png" alt="">
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4"><?php echo $single_staff['p_name_az']; ?></p>
                <h2 class="mb-4"><?php echo $single_staff['s_name_az']; ?> <?php echo $single_staff['s_surname_az']; ?></h2>
                <p>İş təcrübəsi: <?php echo $single_staff['s_experience']; ?> il</p>
                <p><?php echo $single_staff['s_description_az']; ?></p>
                <style>
                    .team-social a{
                        float: left;
                    }
                </style>
                <div class="team-social">
                    <?php if ($single_staff['s_email']) { ?>
                    <a target="_blank" class="btn btn-square" href="mailto:<?php echo $item['s_email']; ?>"><i style="color: #D7B56D !important" class="fas fa-envelope"></i></a>
                    <?php   } ?>
                    <?php if ($single_staff['s_whatsApp']) { ?>
                        <a target="_blank" class="btn btn-square" href="https://wa.me/<?php echo $single_staff['s_whatsApp']; ?>"><i style="color: #D7B56D !important" class="fab fa-whatsapp"></i></a>
                    <?php   } ?>
                    <?php if ($single_staff['s_facebook']) { ?>
                        <a target="_blank" class="btn btn-square" href="<?php echo $single_staff['s_facebook']; ?>"><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                    <?php   } ?>
                    <?php if ($single_staff['s_instagram']) { ?>
                        <a target="_blank" class="btn btn-square" href="<?php echo $single_staff['s_instagram']; ?>"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                    <?php   } ?>
                    <?php if ($single_staff['s_telegram']) { ?>
                        <a target="_blank" class="btn btn-square" href="https://t.me/<?php echo $single_staff['s_telegram']; ?>"><i style="color: #D7B56D !important" class="fab fa-telegram"></i></a>
                    <?php   } ?>
                    <?php if ($single_staff['s_youtube']) { ?>
                        <a target="_blank" class="btn btn-square" href="<?php echo $single_staff['s_youtube']; ?>"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                    <?php   } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>