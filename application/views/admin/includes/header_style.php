<?php 
if(!isset($_SESSION['admin_id'])){
    $this->session->set_flashdata('err','Şifrə yığ, sonra daxil ol, artist!');
    redirect(base_url('a_adminka'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="<?php echo base_url('public/admin/assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('public/admin/assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


           <!-- Custom styles for this template-->
    <link href="<?php echo base_url('public/admin/assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body id="page-top">