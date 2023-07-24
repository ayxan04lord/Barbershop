<?php $segment = $this->uri->segment(1); ?>

<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <!-- <h1 class="mb-0 text-primary text-uppercase">XL-BARBERSHOP</h1> -->
        <img style="width: 90px; height: 90px !important" src="<?php echo base_url('public/assets/'); ?>img/image-07-08-22-10-34.png">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="<?php echo base_url('home'); ?>" class="nav-item nav-link <?php if ($segment == 'home' || $segment == '') { ?> active <?php } ?> ">
            <?php echo $this->lang->line('home'); ?>
            </a>
            <a href="<?php echo base_url('staff'); ?>" class="nav-item nav-link <?php if ($segment == 'staff') { ?> active <?php } ?> "><?php echo $this->lang->line('staff'); ?></a>
            <a href="<?php echo base_url('about'); ?>" class="nav-item nav-link <?php if ($segment == 'about') { ?> active <?php } ?>"><?php echo $this->lang->line('about'); ?></a>
            <a href="<?php echo base_url('service'); ?>" class="nav-item nav-link <?php if ($segment == 'service') { ?> active <?php } ?>"><?php echo $this->lang->line('services'); ?></a>
                        <!--   <a href="price.html" class="nav-item nav-link">Qiymətlər</a> -->
            <!-- <a href="team.html" class="nav-item nav-link">Ustalar</a> -->
            <a href="<?php echo base_url('gallery'); ?>" class="nav-item nav-link <?php if ($segment == 'gallery') { ?> active <?php } ?>"><?php echo $this->lang->line('gallery'); ?> </a>
            <a href="<?php echo base_url('contact'); ?>" class="nav-item nav-link <?php if ($segment == 'contact') { ?> active <?php } ?>"><?php echo $this->lang->line('contact'); ?></a>

            <select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                <option value="az" <?php if ($this->session->userdata('site_lang') == 'az') echo 'selected="selected"'; ?>>AZE</option>
                <option value="en" <?php if ($this->session->userdata('site_lang') == 'en') echo 'selected="selected"'; ?>>ENG</option>
                <option value="ru" <?php if ($this->session->userdata('site_lang') == 'ru') echo 'selected="selected"'; ?>>RUS</option>
            </select>
        </div>
    </div>
</nav>