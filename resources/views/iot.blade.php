<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TCE CLUB PORTFOLIO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Normal Header (static) -->
    <div style="
  width: 100%;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  /* NO position: fixed or sticky */
  height: max-content;
">
        <div class="container d-flex align-items-center justify-content-between py-3">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                <img src="{{asset('img/logo.jpg')}}" alt="Logo" style="height: 60px;">
            </a>

            <!-- Navigation Links -->
            <div style="display: flex; gap: 40px;">
                <a href="{{ url('/') }}" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="home" style="stroke:#2A5D9F; width:36px; height:36px;"></i><br>Home
                </a>
                <a href="{{ url('iot') }}" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="users" style="stroke:#E76F51; width:36px; height:36px;"></i><br>Clubs
                </a>
                <a href="index.html" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="calendar" style="stroke:#E9C46A; width:36px; height:36px;"></i><br>Events
                </a>
                <a href="index.html" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="log-in" style="stroke:#2A9D8F; width:36px; height:36px;"></i><br>Login
                </a>
            </div>

        </div>
    </div>

    <!-- No extra padding needed because header is static -->
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
    feather.replace()
    </script>


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">IOT CLUB</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-secondary">Clubs</li>
                    <li class="breadcrumb-item"><a href="about.html" class="text-white">Events</a></li>

                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="{{asset('img/IOT.png')}}" class="img-fluid w-100" style="margin-bottom: -7px;"
                            alt="Image">

                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">About the club</h5>
                    <h1 class="display-5 mb-4">IoT Club: Bridging the Physical and Digital Worlds</h1>
                    <p class="mb-4">The IoT Club is a student-driven community focused on exploring, innovating, and
                        developing smart technologies by connecting the physical and digital worlds. The club empowers
                        students to build IoT-based solutions through hands-on projects, workshops, and collaboration
                    </p>
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                            <h5 class="ms-4">MISION</h5>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-passport fa-3x text-secondary"></i>
                            <h5 class="ms-4">VISION</h5>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="bg-light text-center rounded p-3">
                                <div class="mb-2">
                                    <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                                </div>
                                <h1 class="display-5 fw-bold mb-2">12</h1>
                                <p class="text-muted mb-0">Years</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-9">
                            <div class="mb-5">
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i>
                                    Promote Learning</p>
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i>
                                    Encourage Innovation</p>
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i>
                                    Build Community</p>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                    <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                        <div class="position-absolute" style="top: 0; left: 25px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-primary">Faculty incharge:</span>
                                    <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Ms.C.V.Nisha
                                        Angeline: 98421 75694</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Counter Facts Start -->
    <div class="container-fluid counter-facts py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Events conducted</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">31</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Team Members</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">377</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Participants</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">4.9</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">k</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="counter-content">
                            <h3>Started year</h3>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="counter-value" data-toggle="counter-up">2013</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->

    <!-- Countries We Offer Start -->
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container py-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">IOT CLUB</h5>
                </div>
                <h1 class="display-5 mb-4">STAFFS AND STUDENT CO-ORDINATOR</h1>
                <p class="mb-0">The IoT Club brings together tech enthusiasts passionate about connecting the world
                    through smart devices. Here's a glimpse of our vibrant team of students and faculty driving
                    innovation forward.</p>
            </div>
            <div class="row g-4 text-center">

                <style>
                .country-item .rounded img {
                    height: 250px;
                    width: 100%;
                    object-fit: cover;
                }
                </style>

                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{asset('img/cvnait.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{asset('img/professional.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Ms.C.V.Nisha Angeline</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{asset('img/girl1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{asset('img/specsgirl.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Ms. R. Thanishka</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{asset('img/boy.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{asset('img/boys.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Mr. B. Aravind</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{asset('img/girl2.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{asset('img/curlygirlr.webp')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Ms. K. Varsha</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">More members</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Countries We Offer End -->



    <!-- Training Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">OUR EVENTS</h5>
                </div>
                <h1 class="display-5 mb-4">Driving Innovation Through Engaging Events</h1>
                <p class="mb-0">The IoT Club actively organizes and conducts workshops, seminars, and hands-on sessions
                    to spark creativity and technical skills among students. These events provide a platform to explore
                    real-world applications of IoT and foster collaborative learning.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{asset('img/eve1.png')}}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <a href="#" class="h4 text-white mb-0">Sensor</a>
                                <a href="#" class="h4 text-white mb-0">Hunt</a>
                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">Sensor Hunt</h4>
                            </a>
                            <p class="text-white-50">Date: Jun 10 <br> Team size: 2-3 <br> Register before: Jun 7</p>
                            <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{asset('img/eve3.png')}}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <a href="#" class="h4 text-white mb-0">Nexus'25</a>

                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">Nexus'25</h4>
                            </a>
                            <p class="text-white-50">Date: Apr 3 <br> Team size: 3-5 <br> Register before: Mar 29</p>
                            <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{asset('img/eve4.png')}}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <a href="#" class="h4 text-white mb-0">Connexions</a>

                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">Connexions</h4>
                            </a>
                            <p class="text-white-50">Date: Feb 4 <br> Team size: 2-3 <br> Register before: Jan 2</p>
                            <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{asset('img/eve5.png')}}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <a href="#" class="h4 text-white mb-0">What if</a>
                                <a href="#" class="h4 text-white mb-0">with Tech</a>
                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">What if with Tech</h4>
                            </a>
                            <p class="text-white-50">Date: Nov 18 <br> Team size: 1-2 <br> Register before: Nov 17</p>
                            <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Training End -->

    <!-- Footer Start -->
    <div class="container-fluid" style="background-color: #800000; color: white; padding: 40px 0;">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-md-6 col-lg-4">
                    <h4 style="color: #B34747; margin-bottom: 20px;">Contact Info</h4>
                    <p><i class="fa fa-map-marker-alt me-2" style="color: #B34747;"></i>123 College Road, Chennai, India
                    </p>
                    <p><i class="fas fa-envelope me-2" style="color: #B34747;"></i>info@tce.edu.in</p>
                    <p><i class="fas fa-phone me-2" style="color: #B34747;"></i>+91 44 1234 5678</p>
                </div>

                <!-- Opening Time -->
                <div class="col-md-6 col-lg-4">
                    <h4 style="color: #B34747; margin-bottom: 20px;">Opening Time</h4>
                    <p>Monday - Friday: 9:00 AM to 5:00 PM</p>
                    <p>Saturday: 9:00 AM to 1:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>

                <!-- Social Media -->
                <div class="col-md-12 col-lg-4 d-flex flex-column">
                    <h4 style="color: #B34747; margin-bottom: 20px;">Connect With Us</h4>
                    <div>
                        <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color: #B34747; margin: 30px 0;">
            <div class="text-center" style="color: white; font-size: 0.9rem;">
                &copy; 2025 TCE College. All Rights Reserved.
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>