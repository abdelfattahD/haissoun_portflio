<?php 

include "section/admin_header.php";
 ?>
<?php 


$edit_query = "SELECT * FROM about  ";
$load_competences_query = mysqli_query($connection,$edit_query);

$row = mysqli_fetch_array($load_competences_query);
$about_title = $row['title_about'];
$about_text = $row['about_text'];



if (isset($_POST['edit_about'])) {
    $about_title = $_POST['title_about'];
    $about_text = $_POST['about_text'];

     
    $about_img = $_FILES['about_img']['name'];
   
    $temp_img = $_FILES['about_img']['tmp_name'];
    move_uploaded_file($temp_img, "../img/portfolio/$about_img");


    $query = "UPDATE `about` SET `title_about`='$about_title' ,`about_text`= '$about_text'  ,`about_img`= '$about_img' ";

    $edit_projet_query = mysqli_query($connection,$query);

    if (!$edit_projet_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
    if($edit_projet_query){
        echo " <script>alert('about page has been edit successfully')</script>";
        echo " <script>window.open('view_about.php','_self')</script>";
    }
    
}

?>




            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit about
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
             <form action="edit_about.php" method="post" enctype="multipart/form-data">    
     
     
                    
             <div class="form-group">
                        <label for="title"> Title about</label>
                        <input type="text" value = "<?php echo $about_title; ?>" class="form-control" name="title_about">
                    </div>

                    <div class="form-group">
                        <label for="coupons_price">about text</label>
                        <textarea name="about_text" rows="4" cols="50" class="form-control" ><?php echo $about_text; ?>
                        </textarea>

                    </div>
                  

                    <div class="form-group">
                    <div >
                        <label for="projet_image"> image de about  </label>
                        <input type="file"  name="about_img" class="form-control">
                    </div>
                </div>
      
                </div>
               
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="edit_about" value="Edit about">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->


            <script src="js/tinymce/tinymce.min.js" ></script>
            <script>tinymce.init({selector: 'textarea'});</script> 
        

    <?php include "section/admin_footer.php" ?>