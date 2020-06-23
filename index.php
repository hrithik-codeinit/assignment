<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script src="js/scripts.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    </head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ">
            <a class="navbar-brand" href="index.html">Welcome</a><button class="btn btn-link btn-sm " id="sidebarToggle" href="#"><i class="fa fa-bars" aria-hidden="true"></i></button
            ><!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto">
			    <li class="nav-item hide-xl">
				  <a class="nav-link" href="#">test@gamil.com</a>
				</li>
				<li class="nav-item hide-xl">
				  <a class="nav-link" href="#">dashboard</a>
				</li>
                <li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					User<span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{url('logout')}}">
					Logout
					</a>
                    <a class="dropdown-item show-xl" href="#">test@gamil.com</a>
                     <a class="dropdown-item show-xl" href="#">dashboard</a>
					</div>
				</li>
            </ul>
 </nav>
         <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion  sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
						   <div class="aerch-box">
						    <b>Search for keywords</b>
                            <form class="d-none d-md-inline-block form-inline">
								<div class="input-group">
								    <div class="input-group-append">
										<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
									<input id="seacrh" class="search form-control" type="text" placeholder="Filter Courses" aria-label="Search" aria-describedby="basic-addon2" />									
								</div>
							</form>
							</div>
							<div class="selct-optn">
							    <b>Category</b>
								<label><input class="radio" id="one" type="radio" name="category" value="red">All</label><br>
								<label><input class="radio" id="two" type="radio" name="category" value="green">Computer</label><br>
								<label><input class="radio" id="three" type="radio" name="category" value="blue">Engineering</label><br>
								<label><input class="radio" id="four" type="radio" name="category" value="blue">Mathematics</label>
							</div>
                        </div>
                    </div>                   
                </nav>
            </div>
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Courses</h3>
                        
                        <div class="row">
                            <div class="one all col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
										<div class="instru-main">
										  <div class="icon-dv">
										      <img src="img/instructor.png" alt="professor" />
										  </div>
										  <div class="instru-info">
											<h5>Course 1 Hello</h5>
											<p class="inst-name">Instructor</p>
										  </div>	
										</div>
                                        <div class="card-details mg-10">
										    <div class="icon-dv">
										      <i class="fa fa-info-circle" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										  </div>
										</div>
									</div>
                                    <div class="card-footer d-flex">
                                           <div class="icon-dv">
										      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											   <b class="wdth-fl">Pre-registration</b>
											   <b class="wdth-fl">March-August</b>
											   <span class="course-tm">22 Weeks Course Duration</span>
										  </div>
                                    </div>
                                </div>
                            </div>
							<div class="two all col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
										<div class="instru-main">
										  <div class="icon-dv">
										      <img src="img/instructor.png" alt="professor" />
										  </div>
										  <div class="instru-info">
											<h5>Course 2 World</h5>
											<p class="inst-name">Instructor</p>
										  </div>	
										</div>
                                        <div class="card-details mg-10">
										    <div class="icon-dv">
										      <i class="fa fa-info-circle" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										  </div>
										</div>
									</div>
                                    <div class="card-footer d-flex">
                                           <div class="icon-dv">
										      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											   <b class="wdth-fl">Pre-registration</b>
											   <b class="wdth-fl">March-August</b>
											   <span class="course-tm">22 Weeks Course Duration</span>
										  </div>
                                    </div>
                                </div>
                            </div>
							<div class="three all col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
										<div class="instru-main">
										  <div class="icon-dv">
										      <img src="img/instructor.png" alt="professor" />
										  </div>
										  <div class="instru-info">
											<h5>Course 3 Hello</h5>
											<p class="inst-name">Instructor</p>
										  </div>	
										</div>
                                        <div class="card-details mg-10">
										    <div class="icon-dv">
										      <i class="fa fa-info-circle" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										  </div>
										</div>
									</div>
                                    <div class="card-footer d-flex">
                                           <div class="icon-dv">
										      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											   <b class="wdth-fl">Pre-registration</b>
											   <b class="wdth-fl">March-August</b>
											   <span class="course-tm">22 Weeks Course Duration</span>
										  </div>
                                    </div>
                                </div>
                            </div>
							<div class="four all col-xl-4 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
										<div class="instru-main">
										  <div class="icon-dv">
										      <img src="img/instructor.png" alt="professor" />
										  </div>
										  <div class="instru-info">
											<h5>Course 4 World</h5>
											<p class="inst-name">Instructor</p>
										  </div>	
										</div>
                                        <div class="card-details mg-10">
										    <div class="icon-dv">
										      <i class="fa fa-info-circle" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										  </div>
										</div>
									</div>
                                    <div class="card-footer d-flex">
                                           <div class="icon-dv">
										      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
										    </div>
											<div class="instru-info">
											   <b class="wdth-fl">Pre-registration</b>
											   <b class="wdth-fl">March-August</b>
											   <span class="course-tm">22 Weeks Course Duration</span>
										  </div>
                                    </div>
                                </div>
                            </div>
                            
                                                       
                        </div>
                    </div>
                </main>
            </div>
        </div>
		
</body>
</html>		