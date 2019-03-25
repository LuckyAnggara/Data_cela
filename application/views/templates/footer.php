<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?= date('Y');?> Lucky Anggara.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?=base_url('assets/');?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets/');?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url('assets/');?>bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url('assets/');?>bower_components/morris.js/morris.min.js"></script>
<script src="<?=base_url('assets/');?>bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets/');?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url('assets/');?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets/');?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets/');?>bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url('assets/');?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url('assets/');?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/');?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url('assets/');?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url('assets/');?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


<!-- SlimScroll -->
<!-- FastClick -->
<script src="<?=base_url('assets/');?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/');?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/');?>dist/js/demo.js"></script>
<script src="<?=base_url('assets/');?>dropzone.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
    	dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
