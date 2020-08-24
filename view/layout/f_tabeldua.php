</div>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../assets/js/sb-admin-2.min.js"></script>
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/datatables/dataTables.buttons.min.js"> </script>
<script src="../assets/datatables/buttons.flash.min.js"> </script>
<script src="../assets/datatables/jszip.min.js"> </script>

<script src="../assets/datatables/pdfmake.min.js"> </script>
<script src="../assets/datatables/vfs_fonts.js"> </script>

<script src="../assets/datatables/buttons.html5.min.js"> </script>
<script src="../assets/datatables/buttons.print.min.js"> </script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        dom: 'Blfrtip',
        pageLength: 20,
        buttons: [{
                extend: 'pdf',
                title: 'Data Pemesanan',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6]
                }
            },
            {
                extend: 'excel',
                title: 'Data Pemesanan',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6]
                }
            },
            {
                extend: 'print',
                title: 'Data Pemesanan',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6]
                }
            },
        ],
    });
});
</script>

</body>

</html>