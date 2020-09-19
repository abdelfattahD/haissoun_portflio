<main id="main">
  <nav class="nav">
    <a href="#" class="nav-item active" data-rel="project">Tous</a>
    <a href="#" class="nav-item" data-rel="option-1">Back-END</a>
    <a href="#" class="nav-item" data-rel="option-2">Front-end</a>
    <a href="#" class="nav-item" data-rel="option-3">Back-END - Front-End</a>
  </nav>

  <ul class="portfolio">
  <?php 
$query = "SELECT * FROM portfolio ";
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
                           
                            ?>
    <li class="project option-<?php echo $portfolio_option ?>">
      <div class="project-image"><img src="img/portfolio/<?php echo $portfolio_img ?>" alt="<?php echo $portfolio_img ?>" /></div>
      <div class="project-info">
        <h2 class="project-info-title"><?php echo $portfolio_title ?></h2>
        <a class="project-info-button" href="<?php echo $portfolio_link ?>">View Project</a>
      </div>
    </li>
    <?php
                          }
                         ?>

  </ul>
</main>