<?php include "db.php"; ?>


<?php

session_start();
if (isset($_SESSION['id_admin'])) {
    $fname = $_SESSION['Fname_admin'];
    $lname = $_SESSION['lname_admin'];

    $full_name = $fname . " " . $lname;
?>


<?php include "section/admin_header.php" ?>



              <!-- /.container-fluid -->
              <?php include "section/dashbord.php" ?>

        

    <?php include "section/admin_footer.php" ?>
    <?php

}
else {
    header("location:admin.php");
    

}

?>