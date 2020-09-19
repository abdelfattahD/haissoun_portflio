<?php
 $query = "SELECT * FROM about " ;
                            $load_about_query = mysqli_query($connection,$query);

                            if (!$load_about_query) {
                              die("QUERY FAILED". mysqli_error($connection));
                          }

                         $row = mysqli_fetch_array($load_about_query);
                        
                         $title_about = $row['title_about'];
                         $about_text = $row['about_text'];
                         $about_img = $row['about_img'];

                           
                            ?>

<div class="flex-container ">
				
		<div >
			<img src="img/<?php echo $about_img ?>" alt="">
		</div>
		<div class="about-container"  >
			<div >
					<p><span><?php echo $title_about ?></span></p>
			</div>
			<div >
                    <?php echo $about_text ?>
			</div>
         </div>	
 </div>