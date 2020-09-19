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

if (isset($_POST['add_cv'])) {

    $cv_title = $_POST['cv_title'];

    $portfolio_cv = $_FILES['cv_file']['name'];

    $temp_cv = $_FILES['cv_file']['tmp_name'];
    move_uploaded_file($temp_cv, "../img/cv/$portfolio_cv");                   
    
   
   
    


    $add_cv = "UPDATE `cv` SET `cv_file`='$portfolio_cv' , `cv_title`='$cv_title'  ";

    $add_cv_query = mysqli_query($connection,$add_cv);

  

    

    if($add_cv_query){
        
        echo " <script>alert('cv has been added successfully')</script>";
           

    }
    else{
        echo " <script>alert('cv erreur')</script>";
        echo " <script>window.open('add_CV.php','_self')</script>";
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
                        add cv
                              
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_CV.php" method="post" enctype="multipart/form-data"> 


             <div class="form-group">
                        <label for="CV_title"> Title de CV</label>
                        <input type="text" class="form-control" name="cv_title">
                    </div>  
     
     
             <div class="form-group">
                  <div>
                        <label for="title">ajoute CV</label>
                        <input type="file" class="form-control" name="cv_file">
                    </div>

                    
                   
                </div>

                
                  
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_cv" value="Add cv">
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