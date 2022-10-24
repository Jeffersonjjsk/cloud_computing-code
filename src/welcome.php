<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/styles_modified.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
  <section class="page-section bg-dark text-white">
    <h1 class="my-5">Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> to HATCH:Remote mine site project!</h1>
    <p>
        <a href="reset-password.php" class="btn btn-light btn-x1">Reset Password</a>
	<a href="logout.php" class="btn btn-primary btn-x1">Sign Out</a>
	
    </p>
	<h1 style="margin: auto: text-align:center; font-size:1rem">This page lists company projects for the miner in the database. The remote mine site engineers can update the page through Kubernetes or Virtual instances on the mine site. Mine site usually does not have a stable internet signal, and it is hard to carry bulky laptops on the site, so it is convenient to have cloud computing. A data analyst can also obtain the latest data for analysis through the website. </a>
     <p>
	<hr class="divider" />
	<a href="index.html" class="btn btn-primary btn-x1">Back to the home page</a>
	<h1 style="margin: auto: text-align:center; font-size:1rem">Please click the projects below for detailed project information.</a>
     <p>
  </section>
	<!-- PROJECTS-->
        <div id="PROJECTS">
            <div class="container-fluid p-0">
                <div >
                    <div >
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/OPgoldmineWA-filter_project.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/OPgoldmineWA-filter_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption">
                                <div class="project-category text-white-50">Gold Mine</div>
                                <div class="project-name">West Australia</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/Ranger-Brine-Concentrator_project.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Ranger-Brine-Concentrator_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption">
                                <div class="project-category text-white-50">Brine Concentrator</div>
                                <div class="project-name">Classified Location</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/Coal-fired-power-station-maintenance-outage_project.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Coal-fired-power-station-maintenance-outage_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption">
                                <div class="project-category text-white-50">Power Station</div>
                                <div class="project-name">Classified Location</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/Grosvenor-Underground-Coal-Mine-Execution_project.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Grosvenor-Underground-Coal-Mine-Execution_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption">
                                <div class="project-category text-white-50">Coal Mine</div>
                                <div class="project-name">Grosvenor</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/Dalrymple-Bay-Coal-Terminal-7X_project.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Dalrymple-Bay-Coal-Terminal-7X-Project_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption">
                                <div class="project-category text-white-50">Coal Terminal</div>
                                <div class="project-name">Dalrymple Bay</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="PROJECTS-box" href="assets/img/portfolio/fullsize/'Drayton-South-Open-Cut-Coal-Mine_project.jpg'" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/Drayton-South-Open-Cut-Coal-Mine_thumbnails.jpg" alt="..." />
                            <div class="PROJECTS-box-caption p-3">
                                <div class="project-category text-white-50">Coal Mine</div>
                                <div class="project-name">Drayton South</div>
                            </div>
                        </a>
                    </div>
                </div>
	    </div>
        </div>
       
  </section>
  <section class="page-section bg-dark text-white" id="INFO">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">About the website:</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">This website is created as part of individual assignment for University of Queensland INFS3208 Cloud Computing. The website is created as project proposal within HATCH mining consulting company.</p>
                        <i class="col-lg-4 bi-phone fs-2 mb-3 text-muted"></i>
                        <h2 >Jefferson's Project</h2>
                        <a class="btn btn-light btn-xl" href="https://www.linkedin.com/in/jefferson-lee-b46889101/?originalSubdomain=aum">LinkedIN!</a>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="mb-5 mb-lg-0">
                        <hr class="divider" />
                        <p class="text-white ">Project: INFS3208 Cloud Computing</p>
                        <p class="text-white ">Student: TSE-WEI LEE s4315049</p>
                        <p class="text-white ">Email: jefferson.lee.tw@gmail.com</p>
                        <p class="text-white ">Reference(Projects): Hatch Ltd</p>
                        <p class="text-white ">Reference(Drawing): Imaging Solutions Group - Aqua Cooler: Cooling solutions</p>
                        <p class="text-white ">Reference(Website Style): stylesheet - Style.css </p>
                    </div>
                </div>
            </div>
  </section>
</body>
</html>
