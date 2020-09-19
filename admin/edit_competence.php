<?php 

include "section/admin_header.php";
 ?>
<?php 

if (isset($_GET['edit'])) {
    $competences_id = $_GET['edit']; 
}

$edit_query = "SELECT * FROM competences WHERE competences_id = '$competences_id' ";
$load_competences_query = mysqli_query($connection,$edit_query);

$row = mysqli_fetch_array($load_competences_query);
$competences_id = $row['competences_id'];
$competence_title = $row['competence_title'];
$competence_percent = $row['competence_percent'];



if (isset($_POST['edit_competence'])) {
    $competence_title = $_POST['competence_title'];
    $competence_percent = $_POST['competence_percent'];


    $query = "UPDATE `competences` SET `competence_title`='$competence_title' ,`competence_percent`= '$competence_percent' WHERE  competences_id = '$competences_id'";

    $edit_projet_query = mysqli_query($connection,$query);

    if (!$edit_projet_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
    if($edit_projet_query){
        echo " <script>alert('competence has been edit successfully')</script>";
        echo " <script>window.open('view_competence.php','_self')</script>";
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
             <form action="edit_competence.php?edit=<?php echo $competences_id; ?>" method="post" enctype="multipart/form-data">    
     
     
                    
             <div class="form-group">
                        <label for="title"> Title de competence</label>
                        <input type="text" value = "<?php echo $competence_title; ?>" class="form-control" name="competence_title">
                    </div>

                    <div class="form-group">
                        <label for="coupons_price">competence percent</label>
                        <input type="number" min="0" max="100" class="form-control" value = "<?php echo $competence_percent; ?>" name="competence_percent">
                    </div>
                  

                   
                </div>
      
                    

                <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="edit_competence" value="Edit competence">
                    </div>


            </form>


            </div>
            <!-- /.container-fluid -->


            <script src="js/tinymce/tinymce.min.js" ></script>
            <script>tinymce.init({selector: 'textarea'});</script> 
        

    <?php include "section/admin_footer.php" ?>