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


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        about
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>about Title</th>
                        <th>about img</th>

                      
                        <th>about text</th>
                        
                        
                        <th>Edit</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM about " ;
                            $load_about_query = mysqli_query($connection,$query);

                            if (!$load_about_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_about_query)) {
                              
                           
                                $title_about = $row['title_about'];
                                $about_text = $row['about_text'];
                                $about_img = $row['about_img'];

                              
                                

                                

                                echo "<tr>";
                                echo "<td>$title_about</td>";
                                echo "<td><img class= 'img-responsive' src='../img/$about_img' alt='' width='400' height='500'></td>";

                                echo "<td>$about_text</td>";
                                
                                
                                echo "<td> <a href='edit_about.php '><i class='fa fa-pencil'>&nbsp Edit</i></a></td>";
                                echo "</tr>";
                            }
                            
                            

                        ?>

                      </tbody>
            </table>
            
            </form>

            </div>
            <!-- /.container-fluid -->

        

    <?php include "section/admin_footer.php" ?>

    <?php
}
else {
    header("location:admin.php");
}
?>