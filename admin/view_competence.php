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
                        competence List
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                
                        <th>Id</th>
                        <th>competence Title</th>
                      
                        <th>competence percent</th>
                      
                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                      <tbody>
                      <?php 
                            $query = "SELECT * FROM competences   " ;
                            $load_portfolio_query = mysqli_query($connection,$query);

                            if (!$load_portfolio_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_portfolio_query)) {
                                $competences_id = $row['competences_id'];
                                $competence_title = $row['competence_title'];
                                $competence_percent = $row['competence_percent']; 
                                

                                

                                echo "<tr>";
                                echo "<td>$competences_id</td>";
                                echo "<td>$competence_title</td>";

                                echo "<td>$competence_percent</td>";
                                
                                echo "<td> <a href='edit_competence.php?edit=$competences_id '><i class='fa fa-pencil'>&nbsp Edit</i></a></td>";
                                echo "<td><a href='view_competence.php?delete=$competences_id '><i class='fa fa-trash'>&nbsp Delete</i></a></td>";
                                echo "</tr>";
                            }
                            
                            if (isset($_GET['delete'])) {
                                $deleted_competences_id = $_GET['delete'];

                                $delete_query = "DELETE FROM competences WHERE competences_id = '$deleted_competences_id'";
                                $deleted_competences_id_query = mysqli_query($connection,$delete_query);

                                header('Location: view_competence.php');
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