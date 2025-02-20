
    <footer class="footer pt-5">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link pe-0 text-muted" target="_blank">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Main JavaScript -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom1.js"></script>
    <!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        <?php
        if (isset($_SESSION['message'])) { ?>
            alertify.success('<?php echo $_SESSION['message']; ?>');
        <?php 
            unset($_SESSION['message']);
        } 
        ?>
    </script>
</body>
</html>
