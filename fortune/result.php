<?php include_once("./header.php"); ?>
<?php
$fortune = $_POST['fortune']; ?>

<body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">占い</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#page-top">Home</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <?= "名前:" . $fortune; ?>
            <h3 class="mb-1">あなたは...</h3>
            <h1 class="mb-5">「大吉」</h1>
            <h3 class="mb-1">です。</h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="../fortune/index.php">再度占う</a>
        </div>
        <div class="overlay"></div>
    </header>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</body>

</html>