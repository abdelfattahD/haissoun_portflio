<?php

session_start();
if (isset($_SESSION['id_admin'])) {
    $fname = $_SESSION['Fname_admin'];
    $lname = $_SESSION['lname_admin'];

    $full_name = $fname . " " . $lname;
?>


<?php
 include "section/admin_header.php";
?>


<?php include "db.php" ?>

<?php 

if (isset($_POST['add_competencet'])) {
                                $competence_title = $_POST['competence_title'];
                                $competence_percent = $_POST['competence_percent']; 
                                
    
   
   
    


    $add_projet = "INSERT INTO `competences`( `competence_title`, `competence_percent`) VALUES ('$competence_title','$competence_percent')";
    $add_projet_query = mysqli_query($connection,$add_projet);

  

    

    if($add_projet_query){
        
        echo " <script>alert('view_competence has been added successfully')</script>";
            echo " <script>window.open('view_competence.php','_self')</script>";

    }
    else{
        echo " <script>alert('product_detail erreur')</script>";
        echo " <script>window.open('add_competence.php','_self')</script>";
    }

}
?>




<div id="layoutSidenav_content">

<main>
    <div  class="container-fluid">

                <!-- Page Heading -->
                <div >
                    <div >
                        <h1 >
                        add projet
                              
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_competence.php" method="post" enctype="multipart/form-data">    
     
     
             <div class="form-group">
                        <label for="title"> Title de competence</label>
                        <input type="text" class="form-control" name="competence_title">
                    </div>

                    <div class="form-group">
                        <label for="coupons_price">competence percent</label>
                        <input type="number" min="0" max="100" class="form-control" name="competence_percent">
                    </div>
                  

                   
                </div>

                
                  
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_competencet" value="Add competence">
                    </div>


            </form>
           
            </div>
            </main>

           
            </div>

            <!-- /.container-fluid -->



   






    <?php include "section/admin_footer.php" ?>
   
    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 
    <?php
}
else {
    header("location:admin.php");
}
?>