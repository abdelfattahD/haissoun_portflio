<!-- start work experience -->

<?php 
                            $query = "SELECT * FROM cv " ;
                            $load_cv_query = mysqli_query($connection,$query);

                            if (!$load_cv_query) {
                                die("QUERY FAILED". mysqli_error($connection));
							}

							$row_cv = mysqli_fetch_array($load_cv_query);
							$cv_file = $row_cv['cv_file'];
							$cv_title = $row_cv['cv_title'];


							?>
<section id="experience">
		<div class="container">
			
			<div class="experience-ct">
				<div class="row">
					<div class="col-md-6 timeline-label">
						<h4><?php echo $cv_title ?></h4>
						<a href="http://localhost:8080/haissoun_portflio/version4/img/cv/<?php echo $cv_file ?>" download="CV_haissoun" alt="LinkedIn profile" target="_blank">
							<div class="button-group-li">
								<div class="text-timeline">download CV</div>
								<div class="icon-li"><span class="fa fa-linkedin" aria-hidden="true"></span></div>
							</div>
						</a>
					</div>
					<div class="col-md-6 timeline col-exp">
						<div class="timeline-year">
						<?php 
                            $query = "SELECT * FROM study   " ;
                            $load_portfolio_query = mysqli_query($connection,$query);

                            if (!$load_portfolio_query) {
                                die("QUERY FAILED". mysqli_error($connection));
                            }

                            while ($row = mysqli_fetch_array($load_portfolio_query)) {
                                $study_id = $row['id_study'];
                                $study_title = $row['study_title'];
                                $studt_detail = $row['studt_detail']; 
								$study_date = $row['study_date']; 
								?>



							<time datetime="<?php echo $study_date ?>"><?php echo $study_date ?></time>
							<div class="timeline-experience">
								<span class="timeline-circle"></span>
								<div class="timeline-experience-img"><img src="http://marinamarques.pt/img/bnp_paribas.png" alt="BNP Paribas"></div>
								<div class="timeline-experience-info clear-after">
									<h5>	<?php echo $study_title ?></h5>
									<div class="timeline-role"><?php echo $studt_detail ?></div>
									<p>January 2016 - Present</p>
								</div>
								<!-- experience-info -->
							</div>
							<!-- experience -->
							<?php } ?>
							
				</div>
				<!-- end row of two columns -->
			</div>
			<!-- end experience container of two columns -->
		</div>
		<!-- end container experience -->
	</section>
	<!-- end work experience -->