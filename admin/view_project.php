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
                            Coupon List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>portfolio Title</th>
                      
                        <th>portfolio_img</th>
                        <th>portfolio_link</th>
                        <th>portfolio_option</th>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM portfolio   " ;
                            $load_portfolio_query = mysqli_query($connection,$query);

                            if (!$load_portfolio_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_portfolio_query)) {
                                $portfolio_id = $row['portfolio_id'];
                           
                                $portfolio_title = $row['portfolio_title'];
                                $portfolio_img = $row['portfolio_img'];
                                $portfolio_link = $row['portfolio_link'];
                                $portfolio_option = $row['portfolio_option'];
                                

                                

                                echo "<tr>";
                                echo "<td>$portfolio_id</td>";
                                echo "<td>$portfolio_title</td>";
                                echo "<td><img class= 'img-responsive' src='../img/$portfolio_img' alt='' width='100' height='100'></td>";


                                echo "<td>$portfolio_link</td>";
                                if ($portfolio_option==1) {
                                    echo "<td>Back-END</td>";

                                } 
                                elseif ($portfolio_option==2) {
                                    echo "<td>Front-end</td>";

                                 
                                } elseif ($portfolio_option==3) {
                                    echo "<td>Back-END - Front-End</td>";

                                 }

                                
                                echo "<td> <a href='edit_portfolio.php?edit=$portfolio_id '><i class='fa fa-pencil'>&nbsp Edit</i></a></td>";
                                echo "<td><a href='view_project.php?delete=$portfolio_id '><i class='fa fa-trash'>&nbsp Delete</i></a></td>";
                                echo "</tr>";
                            }
                            
                            if (isset($_GET['delete'])) {
                                $deleted_portfolio_id = $_GET['delete'];

                                $delete_query = "DELETE FROM portfolio WHERE portfolio_id = '$deleted_portfolio_id'";
                                $deleted_portfolio_id_query = mysqli_query($connection,$delete_query);

                                header('Location: view_project.php');
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