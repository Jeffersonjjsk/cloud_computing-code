<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
    html {
    min-height: 100%;
        }

        body {
            
            background: -webkit-linear-gradient(left, rgb(33, 37, 41),  rgb(33, 37, 41));
            
            background: -o-linear-gradient(right, rgb(33, 37, 41),  rgb(33, 37, 41));
            
            background: -moz-linear-gradient(right, rgb(33, 37, 41),  rgb(33, 37, 41));
            
            background: linear-gradient(to right, rgb(33, 37, 41),  rgb(33, 37, 41));
            
            background-color: rgb(33, 37, 41);
        }   
    </style>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title style="color: #FFFF">Cloud Computing Solutions for Remote Mine Sites</title>

        <!-- Website icon for mining-->
        <link rel="icon" type="image/x-icon" href="assets/mining_38202.ico" />
        <!-- CSS Stylesheet-->
        <link href="styles_modified.css" rel="stylesheet" />
        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
            <div class="container px-4 px-lg-5" style="font-size: 1rem; text-decoration: none; color: #FFFF">
                <a class="navbar-brand" href="#page-top">HATCH: Project Proposal</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <p style="font-size: 1rem; text-decoration: none; color: #FFFF"><li class="nav-item"><a class="nav-link" href="#PROPOSAL">PROPOSAL</a></li>
                        <li class="nav-item"><a class="nav-link" href="#TOOLS">TOOLS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#LOGIN">LOGIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#INFO">INFO</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- HEAD-->
        <header class="masthead">
        <center>
            <div class="container px-4 px-lg-5 h-100" style="color:#FFFF">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold" style="color:brown; font-size:4rem" >Cloud Computing Solutions for Remote Mine Site</h1>
                        <hr class="divider" />
                    </div>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                        <p style="margin: auto; text-align:center; font-size:3rem;  color: white">Project: Cloud Bridge Between Miner, Engineer and Data Analyst</p>
                        <p class="text-white-75 mb-5" style="color: #FFFF;font-size: 1.5rem;">Problem to Solve: How can engineers update the information on remote mine sites? How can miners log-in to the database and access the information? How can data analysts get a better understanding of data?</p>


                        <p class="text-white-75 mb-5" style="color: #FFFF"></p>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                    </div>
                </div>
            </div>
        </center>
        </header>
        <!-- PROPOSAL-->
        <center>
        <section class="page-section bg-primary" id="PROPOSAL" style="background-color: orangered;">
            <div class="container px-4 px-lg-5">
                <hr class="divider divider-light" />
                <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: white">------</a>

                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <a class="btn btn-primary btn-xl" style="font-size: 3rem; text-decoration: none;color: #FFFF" href="#PROPOSAL">Project Proposal</a>
                        <h2 class="text-white mt-0" style="color: #FFFF;font-size: 2rem;">Cloud Container/Pod + Starlink</h2>
                        
                        <p class="text-white-75 mb-4" style="color: #FFFF;font-size: 1.5rem;">In the mining industry, it is a common problem that data analysts do not understand the meaning of provided data, and engineers have to spend a lot of unnecessary time explaining the purpose of data. It would be nice if engineers could update the data in real-time on-site and front of the project. The data analyst team can then review the data in real time and ask questions about the data. However, many remote mine sites only have limited internet connection, and engineers can do only limited jobs and data updates on site in front of the project. This proposal focuses on providing a solution to this problem.  </p>
                        <p class="text-white-75 mb-5" style="color: #FFFF;font-size: 1.5rem;">Cloud computing can resolve this issue using satellite internet, virtual instance, and Kubernetes. The platform includes "Virtual instances (Docker-compose)(Container)" or "Kubernetes (POD)". The micro-services include PHP-FPM, Nginx, Myphpadmin and Mysql. The engineers do not have to wait until returning to the mine site office and update the data afterwards. The data analyst can obtain the information and raise any possible questions about the data so that the data analyst can interpret the data easily.  </p>
                        <p class="text-white-75 mb-5" style="color: #FFFF;font-size: 1.5rem;">Furthermore, while engineers and data analysts update the container and project information, the miner can also log in to the database and learn more about the project. Miners can report to the engineer instantly if there is any concern or problem. While there are many projects and miners, Kubernetes also plays an essential role in scalability and reliability. 
                            </p>
                        <p class="text-white-75 mb-5" style="color: #FFFF;font-size: 1.5rem;">The mining industry can achieve all these features thanks to modern satellite internet and Cloud Computing(virtual instance/Kubernetes)! </p>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: white">------</a>

                    </div>
                </div>
            </div>
        </section>
        </center>
        <!-- TOOL-->
        <center>
        <section class="page-section" id="TOOLS">
            <hr class="divider" />
            <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
            <div class="container px-4 px-lg-5">
                
                <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: #FFFF" href="#TOOLS">Tools</a>
                <h2 class="text-center mt-0" style="color: #FFFF;">Cloud Computing Tools</h2>
                <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2" style="color: #FFFF;font-size: 2rem;">Starlink</h3>
                            <p class="text-muted mb-0" style="color: #FFFF;font-size: 1.5rem;">Starlink is an earth orbit satellite internet provider for remote mine site. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2" style="color: #FFFF;font-size: 2rem;">Micro-service Architecture & Orchestration</h3>
                            <p class="text-muted mb-0" style="color: #FFFF;font-size: 1.5rem;">Kubernetes can provide scalability, reliability and orchestration.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2" style="color: #FFFF;font-size: 2rem;">Frontend & Backend</h3>
                            <p class="text-muted mb-0" style="color: #FFFF">PHP-FPM (CSS+HTML), NginX, MySQL and MyPHPAdmine (Databases).</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2" style="color: #FFFF;font-size: 2rem;">Containerisation </h3>
                            <p class="text-muted mb-0" style="color: #FFFF;font-size: 1.5rem;">Kubernetes (pods) and virtual instance (docker/container) are available platforms.</p>
                        </div>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                    </div>
                </div>
            </div>
        <!-- LOGIN  -->
        </section>
        </center>
        <center>
        <section class="page-section bg-dark container-fluid p-0" id="LOGIN">
            <div >
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    
                    <div class="col-lg-8 align-self-baseline" style="margin: auto; text-align:center; font-size:5rem; color: #FFFF">
                        <hr class="divider"  />
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                        <p class=" mb-5"  style="color: orangered">Please start here!</p>
                        <a class="btn btn-primary btn-xl" style="font-size: 3rem; text-decoration: none; color: #FFFF" href="login.php">[Login]</a>
                        <p class=" mb-5"  style="color: orangered"></p>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                        <hr class="divider" />
                    </div>
                </div>
            </div>
        </section>
        </center>
        <!-- HATCH-->
        <center>
        <section class="page-section bg-white">
            <div class="container px-4 px-lg-5 text-center">
                <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                <h2 class="mb-4" style="color: orangered; font-size: 3rem;">Projects in Real Life: HATCH</h2>
                <p class="text-muted mb-5"  style="color: #FFFF; font-size: 1.5rem;">The example projects are from HATCH, a mining consulting company.</p>
                <a class="btn btn-dark btn-xl" href="https://www.hatch.com/"  style="color: #FFFF; text-decoration: none; font-size: 3rem;">[HATCH Website]</a>
                <div >
                    <a class="PROJECTS-box" href="HATCH.jpg" title="Project Name">
                        <img src="https://raw.githubusercontent.com/Jeffersonjjsk/cloud_computing-code/main/HATCH.jpg" alt="..." />
                        
                        <div class="PROJECTS-box-caption">
                            <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                    
                        </div>
                    </a>
                </div>
            </div>
        </section>
        </center>
        <!-- INFO-->
        <center>
        <section class="page-section bg-dark text-white" id="INFO">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <hr class="divider" />
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                        <h2 class="mt-0"  style="color: orangered; font-size: 3rem;">About the website:</h2>
                        

                        <p class="text-muted mb-5"  style="color: #FFFF; font-size: 1.5rem;">This website is created as part of individual assignment for University of Queensland INFS3208 Cloud Computing. The website is created as project proposal within HATCH mining consulting company.</p>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                        <i class="col-lg-4 bi-phone fs-2 mb-3 text-muted"></i>
                        <h2 style="color: orangered; font-size: 4rem;" >Jefferson's Project</h2>
                        <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: #FFFF"href="https://www.linkedin.com/in/jefferson-lee-b46889101/?originalSubdomain=aum">[LinkedIN!]</a>
                        
                    </div>
                    <a class="btn btn-light btn-xl" style="font-size: 3rem; text-decoration: none; color: orangered">------</a>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="mb-5 mb-lg-0" style="color: #FFFF; font-size: 1rem; text-align: left">
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
        </center>
    </body>
</html>
