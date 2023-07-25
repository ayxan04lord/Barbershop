<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>js/demo/chart-pie-demo.js"></script>


<!-- Page level plugins -->
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('public/admin/assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('public/admin/assets/'); ?>js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            fixedHeader: true,
            responsive : true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script src="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('public\admin\ckeditor\ckeditor.js');?>"></script>
<script src="<?php echo base_url('public\admin\ckeditor\styles.js');?>"></script>


</body>

</html>