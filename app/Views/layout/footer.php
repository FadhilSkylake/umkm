</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
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

<script src="https://kit.fontawesome.com/e24ca0ff2a.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>/js/jquery.dataTables.min.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="<?= base_url(); ?>/public/jquery-easing/jquery.easing.min.js"></script> -->

<!-- Custom scripts for all pages-->
<!-- <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script> -->

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/js/jquery.dataTables.min.js"></script>
<!-- <script src="<?= base_url(); ?>/public/datatables/dataTables.bootstrap4.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script> -->

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</body>

</html>