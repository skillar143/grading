<?php
session_start();

if (isset($_SESSION['username'])) {

    include_once '../adminlayout/head.admin.php' ?>

        
                <?php if(isset($_GET['success'])){ ?> <div class="alert alert-success text-center">
                        <strong>Success!</strong> <?php echo $_GET['success'];?> 
                        </div> <?php } ?>
                        <div class="brand-icon text-center">
            <img class="img-fluid rounded mx-auto d-block w-75" alt="Responsive image" src="../../assets/img/logo.png">
        </div>

<?php include_once '../adminlayout/footer.admin.php';
} else {
    header("Location: ../canossa/master.blade.php");
    exit();
} ?>