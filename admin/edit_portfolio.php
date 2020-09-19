<?php 

include "section/admin_header.php";
session_start();
 ?>
<?php 

if (isset($_GET['edit'])) {
    $portfolio_id = $_GET['edit']; 
}

$edit_query = "SELECT * FROM portfolio WHERE portfolio_id = $portfolio_id ";
$load_blog_query = mysqli_query($connection,$edit_query);

$row = mysqli_fetch_array($load_blog_query);
    $portfolio_id = $row['portfolio_id'];
                           
    $portfolio_title = $row['portfolio_title'];
    $portfolio_img = $row['portfolio_img'];
    $portfolio_link = $row['portfolio_link'];
    $portfolio_option = $row['portfolio_option'];
    



if (isset($_POST['edit_projet'])) {
    $portfolio_title = $_POST['portfolio_title'];
    $portfolio_link  = $_POST['portfolio_link'];
    $portfolio_option = $_POST['portfolio_option'];

   
    $portfolio_img = $_FILES['portfolio_img']['name'];
   
    $temp_img = $_FILES['portfolio_img']['tmp_name'];
    move_uploaded_file($temp_img, "../img/portfolio/$portfolio_img");


    $portfolio_title = mysqli_real_escape_string($connection,$portfolio_title);
    $portfolio_img = mysqli_real_escape_string($connection,$portfolio_img);
    $portfolio_option = mysqli_real_escape_string($connection,$portfolio_option);

    $query = "UPDATE `portfolio` SET `portfolio_title`='$portfolio_title' ,`portfolio_img`= '$portfolio_img',`portfolio_link`= '$portfolio_link',`portfolio_option`= '$portfolio_option' WHERE portfolio_id = $portfolio_id";

    $edit_projet_query = mysqli_query($connection,$query);

    if (!$edit_projet_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
    if($edit_projet_query){
        echo " <script>alert('blog has been edit successfully')</script>";
        echo " <script>window.open('view_project.php','_self')</script>";
    }
    
}

?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit portfolio
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
             <form action="edit_portfolio.php?edit=<?php echo $portfolio_id; ?>" method="post" enctype="multipart/form-data">    
     
     
      
                    <div class="form-group">
                        <label for="title"> Title de projet</label>
                        <input type="text" class="form-control" value = "<?php echo $portfolio_title; ?>" name="portfolio_title">
                    </div>
                  

                    <div class="form-group">

                        <label for="title">type de projet</label>
                        <!-- <input type="text" class="form-control" name="projet_title"> -->
                        <select name="portfolio_option" class="form-control" >
                        
                        <option value=1 >Back-END </option>
                        <option value=2 >Front-end </option>
                        <option value=3 >Back-END - Front-End</option>
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title"> link de projet</label>
                        <input type="text" value = "<?php echo $portfolio_link; ?>" class="form-control" name="portfolio_link">
                    </div>


                   
                    <div class="form-group">
                    <div >
                        <label for="projet_image"> image de projet  </label>
                        <input type="file"  value = "<?php echo $portfolio_img; ?>" name="portfolio_img" class="form-control">
                    </div>
                </div>

                
                  
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="edit_projet" value="Edit projet">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->


            <script src="js/tinymce/tinymce.min.js" ></script>
            <script>tinymce.init({selector: 'textarea'});</script> 
        

    <?php include "section/admin_footer.php" ?>