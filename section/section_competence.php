<div class="container">
<?php 
$query = "SELECT * FROM competences ";
                            $load_competences_query = mysqli_query($connection,$query);

                            if (!$load_competences_query) {
                              die("QUERY FAILED". mysqli_error($connection));
                          }

                          while ($row = mysqli_fetch_array($load_competences_query)) {
                            $competences_id = $row['competences_id'];
                            $competence_title = $row['competence_title'];
                            $competence_percent = $row['competence_percent']; 
                           
                            ?>

  <div class="graphique" data-percent="<?php echo $competence_percent ?>"><?php echo $competence_title ?></div>

                         <?php
                          }
                         ?>

</div>

  


