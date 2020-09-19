<?php include "db.php" ?>

<?php 

if (isset($_POST['add_projet'])) {
    $portfolio_title = $_POST['portfolio_title'];
    $portfolio_link  = $_POST['portfolio_link'];
    $portfolio_option = $_POST['portfolio_option'];

    
   
   
    $portfolio_img = $_FILES['portfolio_img']['name'];
   
    $temp_img = $_FILES['portfolio_img']['tmp_name'];

  
   

    move_uploaded_file($temp_img, "../img/portfolio/$portfolio_img");


    $add_projet = "INSERT INTO `portfolio`( `portfolio_title`, `portfolio_img`, `portfolio_link`, `portfolio_option`) VALUES ('$portfolio_title','$portfolio_img','$portfolio_link','$portfolio_option')";
    $add_projet_query = mysqli_query($connection,$add_projet);

  

    

    if($add_projet_query){
        
        echo " <script>alert('product_detail has been added successfully')</script>";
            echo " <script>window.open('add_project.php','_self')</script>";

    }
    else{
        echo " <script>alert('product_detail erreur')</script>";
        echo " <script>window.open('add_project.php','_self')</script>";
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
                        Ajoute projet
                              
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
             <form action="add_project.php" method="post" enctype="multipart/form-data">    
     
     
             <div class="form-group">
                        <label for="title"> Title de projet</label>
                        <input type="text" class="form-control" name="portfolio_title">
                    </div>
                  

                    <div class="form-group">

                        <label for="title">type de projet</label>
                        <!-- <input type="text" class="form-control" name="projet_title"> -->
                        <select name="portfolio_option" class="form-control" >
                        
                        <option value=1 >Back-END </option>
                        <option value=2 >Front-end </option>
                        <option value=3 >Back-END - Front-End </option>
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title"> link de projet</label>
                        <input type="text" class="form-control" name="portfolio_link">
                    </div>


                   
                    <div class="form-group">
                    <div >
                        <label for="projet_image"> image de projet  </label>
                        <input type="file"  name="portfolio_img" class="form-control">
                    </div>
                </div>

                
                  
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="add_projet" value="Add projet">
                    </div>


            </form>
           
            </div>
            </main>

           
            </div>

            <!-- /.container-fluid -->

    <script src="js/tinymce/tinymce.min.js" ></script>
    <script>tinymce.init({selector: 'textarea'});</script> 

   
