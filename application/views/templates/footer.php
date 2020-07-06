            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIPOR Bandung <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <!-- Data table -->
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable({
                        "scrollX": true
                    });
                });

                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });


                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });

                });


                $(document).ready(function() {
                    $(document).on('click', '#detailModel', function() {
                        let gambar = $(this).attr('data-gambar');
                        let alamat = $(this).attr('data-alamat');
                        let email = $(this).attr('data-email');
                        let jenis = $(this).attr('data-jenis');
                        let keter = $(this).attr('data-ket');
                        let lati = $(this).attr('data-latt');
                        let longi = $(this).attr('data-longi');
                        let sts = $(this).attr('data-sts');
                        let tgl = $(this).attr('data-tgl');
                        let type = $(this).attr('data-type');

                        $('#gbr').attr("src", "<?= base_url('assets/img/laporan/') ?>" + gambar);
                        $('#alamat').text(alamat);
                        $('#email').text(email);
                        $('#jenis').text(jenis);
                        $('#ket').text(keter);
                        $('#latt').text(lati);
                        $('#longi').text(longi);
                        $('#sts').text(sts);
                        $('#tgl').text(tgl);
                        $('#type').text(type);
                    });

                });
                $(document).ready(function() {
                    $(document).on('click', '#detailPesanModel', function() {
                        let nama = $(this).attr('data-nama');
                        let email = $(this).attr('data-email');
                        let subjek = $(this).attr('data-subjek');
                        let pesan = $(this).attr('data-pesan');

                        $('#nama').text(nama);
                        $('#email').text(email);
                        $('#subjek').text(subjek);
                        $('#pesan').text(pesan);
                    });

                });



                // Update status
                $(document).on("click", "#updateStatus", function() {
                    var id = $(this).data('id');
                    $("#id").val(id);
                });
            </script>





            </body>

            </html>