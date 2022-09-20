<?php

include('../comman.php');
?>


<?php include('../gen/header.php') ?>

		<div class=" banner" style="background-image:url('../img/banner.jpg');">
			<div style="height: 100%; width: 100%; background-color: rgba(0, 0, 0, .6);">

				<div class="container pt-md-5">


					<div class="row text-light pt-md-5 pt-sm-3 ">
						<div class="col-sm-12 px-5 mt-5 mb-md-4">
							<span class="h1 " style="font-weight: bold;">Get Your <span class="text-color">Prefer</span> Job</span>
						</div>
						<div class="col-sm-12 mt-4 px-5 mb-md-4">
							<span class="h6 ">Jobs, Employment & Future Career Opportunities</span>
						</div>
						<div class="col-sm-12 mt-3 ">
							<div class="wbor">
								<div style="background-color: white;">




									<div class="row">

										<div class="col-md-10 py-2">

											<div class="row">
												<div class="col-md-4 col-12">
													<span class="outer">
														<div class="row">
															<div class="col-md-10 col-10">
																<input class="inp" type="text" placeholder="Job Title">
															</div>
															<div class="col-md-2 col-2 border-right">
																<span class="inp1 fa fa-search  text-color"></span>
															</div>
														</div>

													</span>


												</div>
												<div class="col-md-4">
													<span class="outer">

														<div class="row">
															<div class="col-md-10 col-10">
																<input class="inp" type="text" placeholder="Job Title">
															</div>
															<div class="col-md-2 col-2 border-right">
																<span class="inp1 fa fa-map-marker text-color"></span>
															</div>
														</div>
													</span>

												</div>
												<div class="col-md-4">
													<span class="outer">
														<div class="row">
															<div class="col-sm-12 ">
																<select class="inp" style="color: gray;">
																	<option disableds>Job Category</option>
																</select>
															</div>

														</div>

													</span>

												</div>
											</div>
										</div>

										<div class="col-md-2">
											<button class="btn1 bg-color"><span class="h5">Search</span></button>

										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div>



			</div>
		</div>

		<div class="container-fluid" style="background: #F7FAF7;">
			<div class="container">
				<div class="row ">
					<div class="col-12 " style="background-color: rgba(252, 252, 252, .6); transform: translateY(-100px);">
						<div class="row mar">
							<div class="col-sm-6 ">
								<div class="row mr-1">
									<div class="col-sm-12 box1 p-5">
										<div class="row">
											<div class="col-sm-2 mt-2">
												<img src="../img/icon/job-search (1).png" class="iconimg">

											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">

														<span class="h6 text-light" style="font-size: 17px;">Jobseeker</span>
													</div>
													<div class="col-sm-12 mt-2">
														<span class="h5 text-light font-weight-bold">Looking For a Job ?</span>
													</div>
												</div>

											</div>
											<div class="col-sm-4 mt-3">
												<a href="#" class="btn2 h6 " style="font-size: 17px;">Apply Now <span class="fa fa-arrow-right text-light"></span></a>

											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-sm-6 ">
								<div class="row ml-1">
									<div class="col-sm-12 box1 p-5">
										<div class="row">
											<div class="col-sm-2 mt-2">
												<img src="../img/icon/recruitment (1).png" class="iconimg">

											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">

														<span class="h6 text-light" style="font-size: 17px;">Recruiter</span>
													</div>
													<div class="col-sm-12 mt-2">
														<span class="h5 text-light font-weight-bold">Are You Recruiting ?</span>
													</div>
												</div>

											</div>
											<div class="col-sm-4 mt-3">
												<a href="#" class="btn2 h6 " style="font-size: 17px;">Post a Job <span class="fa fa-arrow-right text-light"></span></a>

											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="row pb-5">
					<div class="col-sm-12 mb-4 text-center">
						<span class="text-dark h1">Choose Your Desire Category</span>
					</div>

          <div class="owl-carousel my-4 bg-light">

				<?php
				if ($com1) {
					  while($comp1 = mysqli_fetch_assoc($com1))
{
?>
<div class="row m-4">
  <div class="col-sm-12 bg-light1 p-4">
    <div class="row  my-1">
      <div class="col-sm-12 ">
      <center>
          <img src="../admin/img/cat/<?php echo $comp1['cimage'];?>" style="height:75px; width:auto;"/>
      </center>
      </div>
      <div class="col-sm-12 text-center mt-4">
        <span class="h5 text-dark pp">
          <?php echo $comp1['cname'];?>
        </span>
      </div>
    </div>
  </div>
</div>
<?php
}

}	else {
  echo "<span class='h6'>No Record Found</span>";
}?>

					</div>

				</div>

			</div>


			<div style="background:white;">
				<div class="container ">
					<div class="row pt-5">
						<div class="col-sm-12 text-center">
							<span class="text-dark h1">Recent Jobs</span>
						</div>
						<div class="col-sm-12">

							<div class="row my-5">
								<div class="col-md-9 mx-auto my-3 py-3 rounded" style="box-shadow:0px 0px 8px 1px rgba(0,0,0,.2);">
									<center>
										<button class="btn px-4 py-2 mx-2 my-2 bg-color" style=" border-radius:0px;  color: white;">All</button>
										<button class="btn px-4 py-2 mx-2 btn-3 text-dark my-2 ">New</button>
										<button class="btn px-4 py-2 mx-2 btn-3 text-dark  my-2 ">Featured</button>
										<button class="btn px-4 py-2 mx-2 btn-3 text-dark  my-2 ">Recent</button>
										<button class="btn px-4 py-2 mx-2 btn-3 text-dark  my-2 ">Full Time</button>
										<button class="btn px-4 py-2 mx-2 btn-3 text-dark  my-2 ">Part Time</button>
									</center>
								</div>
							</div>

							<div class="row">
                <?php
                if ($job) {
                    while($job2 = mysqli_fetch_assoc($job))
        {
        ?>
        <div class="col-md-6">
          <div class="row p-3">
            <div class="col-sm-12" style="border:1px solid rgba(0,0,0,.3)">
              <div class="row py-4 ">
                <div class="col-sm-2 pt-md-5">
                  <img src="../img/jobs/1.png">
                </div>
                <div class="col-sm-6">
                  <div class="h4 mb-2"><?php echo $job2['title']; ?></div>
                  <div><a href="" class="h6 text-color" style="text-decoration:none;outline:none; "><?php echo $job2['category']; ?></a></div>


                  <div class="row  my-2 h6">
                    <div class="col-1">
                      <img src="../img/1.png" style="height:15px;">
                    </div>
                    <div class="col-10">
                      <span style="font-size:14px; color:gray;"><?php echo $job2['salary']; ?></span>
                    </div>
                  </div>

                  <div class="row  my-2 h6">
                    <div class="col-1">
                      <img src="../img/icon/pin.png" style="height:15px;">
                    </div>
                    <div class="col-10">
                      <span style="font-size:14px; color:gray;"><?php echo $job2['location']; ?></span>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4">
                  <button class="btn px-4 py-2 my-2 btn-3 text-dark" style="width:100%">Apply</button>

                  <div class="btn px-3 py-2 my-2 bg-color" style="width:100%;border-radius: 0px;  color: white;">Full Time</div>




                </div>
              </div>

            </div>
          </div>

        </div>


        <?php
        }

        }	else {
          echo "<span class='h6'>No Record Found</span>";
        }?>
							</div>




						</div>
					</div>

				</div>


			</div>


		</div>

		<div class="mt-5 bg-color">

			<div class="container ">
				<div class="row">
					<div class="  p-5 mx-auto" style="margin-top :60px">

						<div class="">
							<div class="bor-1">
								<img src="../img/icon/approved.png" style="width:100%">
							</div>
							<div class="bor-line"></div>
							<div class="bor-1">
								<img src="../img/icon/cv.png" style="width:100%">
							</div>
							<div class="bor-line"></div>
							<div class="bor-1">
								<img src="../img/icon/cs.png" style="width:100%">
							</div>


						</div>



					</div>

				</div>

				<div class="row " style="padding-bottom:30px; margin-top:-25px;">
					<div class=" mx-auto">

						<div class="h5">
							<div class="bor-text mx-2">
								Register Your Account
							</div>

							<div class="bor-text mx-5">
								Upload Your Resume
							</div>
							<div class="bor-text mx-2">
								Apply for Dream Job
							</div>
						</div>

					</div>

				</div>
				<div class="row" style="padding-bottom:100px; margin-top:25px;">
					<div class=" mx-auto ">

						<a href="candidate_register.php" class="btn btn-4 text-color mx-3"><span class="h6">Create Your Profile</span></a>

						<a href="candidate_register.php" class="btn btn-4 text-color mx-3"><span class="h6">Upload Your CV</span></a>

					</div>

				</div>



			</div>



		</div>

	<div style="background:white;" class="pt-3">
		<div class="container py-5 my-5">
			<div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-7">
							<img src="../img/home/1.jpg" style="width:100%">

						</div>
						<div class="col-md-4">
							<div class="row">
								<img src="../img/home/2.jpg" style="width:100%">
							</div>
							<div class="">
								<div class=" btnn bg-color h3 font-weight-bold">100% Trusted</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-12 h1 font-weight-bold text-dark py-3">
							Trusted & Popular Job Portal
						</div>
						<div class="col-12 p mb-3">
							Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.
						</div>

						<div class="col-12 mt-5">
							<div class="row">
								<div class="col-sm-4 ">
									<div class="row">
										<div class="col-12  h3 font-weight-bold text-center text-color">
											14K+
										</div>
									</div>
									<div class="row  ">
										<div class="col-12  h6 font-weight-normal text-center">
											Job Available
										</div>

									</div>

								</div>

								<div class="col-sm-4 ">
									<div class="row">
										<div class="col-12  h3 font-weight-bold text-center text-color">
											18K+

										</div>
									</div>
									<div class="row  ">
										<div class="col-12  h6 font-weight-normal text-center">
											Submitted CV
										</div>

									</div>

								</div>

								<div class="col-sm-4 ">
									<div class="row">
										<div class="col-12  h3 font-weight-bold text-center text-color" >
											9K+

										</div>
									</div>
									<div class="row  ">
										<div class="col-12  h6 font-weight-normal text-center">
											Company
										</div>

									</div>

								</div>
							</div>
						</div>

						<div class="col-12 ">
							<div class="row mx-5">
								<div class="col-sm-6 ">
									<div class="row">
										<div class="col-12  h3 font-weight-bold text-center text-color">
											22K+

										</div>
									</div>
									<div class="row  ">
										<div class="col-12  h6 font-weight-normal text-center">
											Registered Member
										</div>

									</div>

								</div>

								<div class="col-sm-6 ">
									<div class="row">
										<div class="col-12  h3 font-weight-bold text-center text-color" >
											55K+


										</div>
									</div>
									<div class="row  ">
										<div class="col-12  h6 font-weight-normal text-center">
											Appointed to Job
										</div>

									</div>

								</div>


							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
	<div class="container py-3">
	<div class="row mb-5">
		<div class="col-sm-12 text-center">
			<span class="text-dark h1">Popular Companies</span>
		</div>
	</div>
					<div class="owl-carousel bg-light">

				<?php
				if ($com) {
					  while($comp = mysqli_fetch_assoc($com))
{
?>
<div class="row m-4">
  <div class="col-sm-12 bg-light1 p-4">
    <div class="row">
      <div class="col-sm-12 ">
        <center>
          <img src="../admin/img/profile/<?php echo $comp['logo']; ?>" style="height:65px;width:auto;">
        </center>
      </div>
      <div class="col-sm-12 text-center mt-3">
        <span class="h6 font-weight-bold text-dark pp">
          <?php echo $comp['company_name']; ?>
        </span>
      </div>
      <div class="col-sm-12 text-center mt-3" style="color:gray;">
        <span class="fa fa-map-marker"></span><span class="p  pp" >
          <?php echo $comp['location']; ?>
        </span>
      </div>
      <div class="col-sm-12 text-center mt-3" style="color:gray;">
        <a href="#" class="btn btn-3 px-3 mr-2 waves-effect waves-light">Hiring</a>
      </div>
    </div>
  </div>
</div>

<?php
}

}	else {
  echo "<span class='h6'>No Record Found</span>";
}?>

					</div>
	</div>

<div class="container-fluid" style="background:white;">

	<div class="container py-5 mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-sm-7">

						<img src="../img/home/3.jpg" style="width:100%">

					</div>
					<div class="col-sm-5">
						<div class="row ">
							<div class="col-12">
								<img src="../img/home/4.jpg" style="width:100%">
							</div>
							<div class="col-12 mt-4">
								<img src="../img/home/5.jpg" style="width:100%">
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row ml-2">
					<div class="col-12 text-dark h1 font-weight-bold mt-3">
						Why We are Most Popular
					</div>
					<div class="col-12 h6 text-secondary mt-4">
						Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida
					</div>
					<div class="col-12 mt-5">
						<div class="row">
							<div class="col-sm-6 border-bottom border-right py-3">
								<div class="row ">
									<div class="col-sm-2">

										<div class="p-2 " style="background:#e3f2fd; border-radius:10px;  height:50px; width:50px;"> <img style="width:100%" src="../img/icon/approved1.png"></div>


									</div>
									<div class="col-sm-10 pl-5  h5 font-weight-bold">
										Trusted & Quality Job

									</div>
								</div>

							</div>
							<div class="col-sm-6 border-bottom  py-3">
								<div class="row ">
									<div class="col-sm-2">

										<div class="p-2" style="background:#e3f2fd; border-radius:10px;  height:50px; width:50px;"> <img style="width:100%" src="../img/icon/enterprise.png"></div>


									</div>
									<div class="col-sm-10 pl-5 mt-2 h5 font-weight-bold">
										Top Companies

									</div>
								</div>

							</div>
							<div class="col-sm-6 border-right  py-3">
								<div class="row ">
									<div class="col-sm-2">

										<div class="p-2" style="background:#e3f2fd; border-radius:10px;  height:50px; width:50px;"> <img style="width:100%" src="../img/icon/no-money.png"></div>


									</div>
									<div class="col-sm-10 pl-5 mt-2 h5 font-weight-bold">
										No Extra Charge

									</div>
								</div>

							</div>
							<div class="col-sm-6   py-3">
								<div class="row">
									<div class="col-sm-2">

										<div class="p-2" style="background:#e3f2fd; border-radius:10px;  height:50px; width:50px;"> <img style="width:100%" src="../img/icon/employee.png"></div>


									</div>
									<div class="col-sm-10 pl-5 mt-2 h5 font-weight-bold">
										International Job

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>



<?php include('../gen/footer.php') ?>
