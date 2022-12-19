<?php include "include/header.php"?>
         <!--Header End--> 
         <!--Sub Header Start-->
         <section class="wf100 subheader">
            <div class="container">
               <h2> User Register </h2>
               <ul>
                  <li> <a href="index.php">Home</a> </li>
                  <li> User Register </li>
               </ul>
            </div>
         </section>
         <!--Sub Header End--> 
         <!--Main Content Start-->
         <div class="main-content p80" STYLE="background: url(images/job_bgimg1.png) no-repeat bottom; background-size: cover;">
            <div class="my-account">
               <div class="container">
                  <div class="row ">
                     <div class="col-md-4 col-sm-5">
                       <div class="login-account job_user_account">
                          
						  <!-- profile image upload-->
						  <div class="use_profle ">
							<div class="profile_picture">
						  <img src="images/rp1.jpg" class="img-fluid picture-src" alt=""> 
						    <input type="file" id="wizard-picture" />
							</div>
							</div>
							<!-- profile iamge upload-->
						  
						   
						   <div class="profile-usertitle">
						   <p class="text-center  fw-bold mb-1 text-dark">Edit Profile </p>
						    <h6 class=" mb-1 fw-bold">On registering, you can</h6>
							<ul>
							<li class="text-dark mb-0"> <img src="images/icons/checked.png" class="img-fluid mr-1" alt="images/icons/checked.png">  Build your profile and let recruiters find you</li>
							<li class="text-dark mb-0"> <img src="images/icons/checked.png" class="img-fluid mr-1" alt="images/icons/checked.png"> Get job postings delivered right to your email</li>
							<li class="text-dark mb-0"> <img src="images/icons/checked.png" class="img-fluid mr-1" alt="images/icons/checked.png"> Find a job and grow your career</li>
							</ul>
							
						   </div>
						   <hr class="bg-info">
						   <div class="user_skiils">
						   <h6 class="text-left fw-bold">  Skills </h6>
						   
						   <div class="user_sk mt-2">
						   <span class="badge badge-pill"> User Interface Design  </span>
						   <span class="badge badge-pill">UX</span>
						   <span class="badge badge-pill">UI</span>
						    <span class="badge badge-pill">Adobe XD</span>
							 <span class="badge badge-pill">Mobile App</span>
						   </div>
						 
						   
						   </div>
						
                        </div>
                     </div>
					 
					
                     <div class="col-md-8 col-sm-7">
                        <div class="row m-0">
						<!-- user details-->
						<div class="job_add_form">
                           <div class="register-account">
                            
							<div class="col-md-6">
							<div class="form-group">
							<label>Enter Name <span class="text-danger">*</span> </label>
							<input type="text" class="form-control" placeholder="Enter Name">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label>Enter Number <span class="text-danger">*</span> </label>
							<input type="number" class="form-control" placeholder="Enter Number">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label>Enter Email <span class="text-danger">*</span> </label>
							<input type="email" class="form-control" placeholder="Enter Email">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> Gender <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> Select Gender</option>
							<option>Male</option>
							<option>Female</option>
							</select>
							</div>
							</div>
							
							
							
							
							<!--<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> select State <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> select state</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							</select>
							</div>
							</div>-->
						
							
							
                           </div>
                        </div>
						<!-- user details end-->
						
						
						
						<!-- Work Status -->
						<div class="job_add_form">
						
						
                           <div class="register-account">
						   <div class="row mb-1">
						<div class="col-md-12">
						<p class="fw-bold"> Work Status</p>
						</div>
						</div>
						
						<div class="user_riguserType_user_right">
						<div class="user_riguserType">
						<div class="radioWrap">
						<div class="iconWrap">
						<img src="images/icons/handbag.png" alt="" class="img-fluid">
						</div>
						
						<div class="textWrap">
						<h6>I'm Experienced</h6>
						<p>  I have work experience (excluding internships)</p>
						</div>
						</div>
						</div>
						
						<div class="user_riguserType">
						<div class="radioWrap">
						<div class="iconWrap">
						<img src="images/icons/fresher.png" alt="" class="img-fluid">
						</div>
						
						<div class="textWrap">
						<h6>I'm Fresher</h6>
						<p> I am a student/ Haven't worked after graduation </p>
						</div>
						</div>
						</div>
						</div>
                            
							
							
                           </div>
                        </div>
						<!-- user details end-->
						
						<!-- user details-->
						<div class="job_add_form">
                           <div class="register-account">
						   <div class="col-md-12">
							<div class="form-group ">
							<label>Resume Uplaod <span class="text-danger">*</span> </label>
							<input type="file" class="form-control-file form-control" id="exampleFormControlFile1">
							</div>
							</div>
                            
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> Select Qualification  <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> select Qualification </option>
							<option>BA</option>
							<option>MA</option>
							</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> Job Profile <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> select profile</option>
							<option>it</option>
							<option>mobile repair</option>
							</select>
							</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
							<label>Key Skills<span class="text-danger">*</span> </label>
							<input type="text" class="form-control" placeholder="Total Experience">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label>Total Experience<span class="text-danger">*</span> </label>
							<input type="number" class="form-control" placeholder="Total Experience">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> Select State <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> Select state</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleFormControlSelect1"> Select City <span class="text-danger">*</span> </label>
							<select class="form-control" >
							<option> Select City</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							<label>Pincode<span class="text-danger">*</span> </label>
							<input type="number" class="form-control" placeholder="Total Pincode">
							</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
							<label>Enter Address <span class="text-danger">*</span> </label>
							 <textarea class="form-control" aria-label="With textarea"></textarea>
							</div>
							</div>
							
							<div class="col-md-12 mb-2">
                                 <input type="submit" value="User Register">
                            </div>
							
						
                           </div>
                        </div>
						<!-- user details end-->
						
						
						</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Main Content End--> 
         <!--Footer Start-->
         
		 <?php include "include/footer.php"?>