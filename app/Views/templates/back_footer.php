 <!-- /.content-wrapper -->
 <footer class="main-footer">
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.1.0
     </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="/backoffice/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="/backoffice/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="/backoffice/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="/backoffice/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="/backoffice/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="/backoffice/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="/backoffice/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="/backoffice/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="/backoffice/plugins/moment/moment.min.js"></script>
 <script src="/backoffice/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="/backoffice/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="/backoffice/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="/backoffice/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="/backoffice/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="/backoffice/dist/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="/backoffice/dist/js/pages/dashboard.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="/backoffice/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="/backoffice/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="/backoffice/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="/backoffice/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="/backoffice/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="/backoffice/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="/backoffice/plugins/jszip/jszip.min.js"></script>
 <script src="/backoffice/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="/backoffice/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="/backoffice/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="/backoffice/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="/backoffice/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <script src="/backoffice/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- SweetAlert2 -->
 <script src="/backoffice/plugins/sweetalert2/sweetalert2.min.js"></script>
 <!-- Toastr -->
 <script src="/backoffice/plugins/toastr/toastr.min.js"></script>
 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
 </script>
 <script src="/assets/js/customJS/recipe/ingredient.js"></script>
 <script>
     var Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 3000
     });
 </script>
 </body>

 </html>