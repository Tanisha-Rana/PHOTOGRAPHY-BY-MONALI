<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salone - Beauty Salon Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:wght@500&family=Work+Sans&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
   <?php
include_once('header.php');
?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">Our Team</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Team Members</h1>
                <h1 class="mb-5">Our Experienced Specialists</h1>
            </div>
            <div class="row g-4 team mb-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Hair Specialist</p>
                            <h4>Lily Taylor</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Nail Designer</p>
                            <h4>Olivia Smith</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Beauty Specialist</p>
                            <h4>Ava Brown</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Spa Specialist</p>
                            <h4>Amelia Jones</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 team">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Hair Specialist</p>
                            <h4>Lily Taylor</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Nail Designer</p>
                            <h4>Olivia Smith</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Beauty Specialist</p>
                            <h4>Ava Brown</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Spa Specialist</p>
                            <h4>Amelia Jones</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php
   include_once('footer.php');
   ?>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white border-top border-secondary py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>.
                    Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>