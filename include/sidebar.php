<?php
session_start();
require_once("database.php");
session_regenerate_id(true);
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: Admin Login.php");
    exit();
}
$page = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="path/to/your/css">
    <script src="path/to/your/js" crossorigin="anonymous"></script>
</head>
<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
                <span class="ms-1 font-weight-bold text-white">PHP Ecom</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "index.php" ? 'active bg-gradient-primary' : ''; ?>" href="index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <?php if ($_SESSION['role'] == 1): ?>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "category.php" ? 'active bg-gradient-primary' : ''; ?>" href="category.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">All Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "add-category.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-category.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "orders.php" ? 'active bg-gradient-primary' : ''; ?>" href="orders.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "product.php" ? 'active bg-gradient-primary' : ''; ?>" href="product.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">All Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "add-product.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-product.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Products</span>
                    </a>
                </li>
                <?php elseif ($_SESSION['role'] == 0): ?>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "orders.php" ? 'active bg-gradient-primary' : ''; ?>" href="orders.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "product.php" ? 'active bg-gradient-primary' : ''; ?>" href="product.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">All Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $page == "add-product.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-product.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Add Products</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100" href="Admin Logout.php" type="button">LOG OUT</a>
            </div>
        </div>
    </aside>
</body>
</html>
