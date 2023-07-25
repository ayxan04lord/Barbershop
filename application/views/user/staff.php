<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/navbar'); ?>
<style>
    .pagination a,
    .pagination strong {
        padding: 10px 10px;
        border: 1px solid #D7B56D !important;
        margin-left: 5px;
        text-decoration: none;
        box-shadow: 0 0 8px rgba(5, 5, 5, 0.3);
    }
    .pagination strong {
        background: #D7B56D !important;
        color: white;
        border: 1px solid #D7B56D !important;
    }

    .pagination {
        margin: 20px 0px;
        justify-content: center;
    }

    a:visited {
        color: white;
    }
    a:link {
        color: white;
    }
</style>


<!-- Team Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız</p>
                <h2>Ustalarımızla tanış olun:</h2>
            </div>
            <div class="row g-4">
                <?php
                foreach ($staff as $item) { ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="team-img position-relative overflow-hidden">
                                <?php if($item['s_img']){ ?>
                                <img class="img-fluid" style="height: 425px!important;width:100%!important; object-fit;hover;" src="<?php echo base_url('uploads/staff/' . $item['s_img']); ?>" alt="">
                                <?php } else{ ?>
                                <img class="img-fluid" style="height: 425px!important;width:100%!important; object-fit:contain;" src="http://localhost/barbershop/public/assets/img/image-07-08-22-10-34.png" alt="">
                                <?php }  ?>
                                <div class="team-social">
                                    <?php if ($item['s_email']) { ?>
                                    <a target="_blank" class="btn btn-square" href="mailto:<?php echo $item['s_email']; ?>"><i style="color: #D7B56D !important" class="fas fa-envelope"></i></a>
                                    <?php   } ?>
                                    <?php if ($item['s_whatsApp']) { ?>
                                    <a target="_blank" class="btn btn-square" href="https://wa.me/<?php echo $item['s_whatsApp']; ?>"><i style="color: #D7B56D !important" class="fab fa-whatsapp"></i></a>
                                    <?php   } ?>
                                    <?php if ($item['s_facebook']) { ?>
                                    <a target="_blank" class="btn btn-square" href="<?php echo $item['s_facebook']; ?>"><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                    <?php   } ?>
                                    <?php if ($item['s_instagram']) { ?>
                                        <a target="_blank" class="btn btn-square" href="<?php echo $item['s_instagram']; ?>"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                                    <?php   } ?>
                                    <?php if ($item['s_telegram']) { ?>
                                        <a target="_blank" class="btn btn-square" href="https://t.me/<?php echo $item['s_telegram']; ?>"><i style="color: #D7B56D !important" class="fab fa-telegram"></i></a>
                                    <?php   } ?>
                                    <?php if ($item['s_youtube']) { ?>
                                        <a target="_blank" class="btn btn-square" href="<?php echo $item['s_youtube']; ?>"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                    <?php   } ?>
                                </div>
                            </div>
                            <div class="bg-secondary text-center p-4">
                                <h5><a href="<?php echo base_url('staff_single/'.$item['s_id']) ?>"><?php echo $item['s_name_az']; ?></a></h5>
                                <span style="color: #D7B56D !important" class="text-primary"><?php echo $item['p_name_az']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php  } ?>

            </div>
            <p class="pagination wow fadeInUp"><?php echo $links; ?></p>
        </div>
    </div>
    <!-- Team End -->


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>