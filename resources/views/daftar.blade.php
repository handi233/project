
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Incare Medical and Health HTML Template" />
    <meta name="description" content="Incare - Medical and Health HTML Template" />

    <!-- title  -->
    <title>Daftar Online</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="" />
      <link rel="icon" type="image/x-icon" href="img/logos/favicon/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="quform/css/base.css">

    <!-- theme core css -->
    <link href="css/styles.css" rel="stylesheet">

      <style>
    .square-button {
      margin-top: 30px;
      margin-left: 15%;
      width: 150px;
      height: 120px;s
      font-size: 14px;
      text-align: center;
      vertical-align: middle;
      display: flex;
      align-items: center;
      justify-content: center;
      white-space: normal;
    }
  </style>

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style1 menu_area-light">

            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search bg-secondary">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type &amp; hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="" class="navbar-brand"><img id="logo" src="img/logos/logoo.png" alt="" width="95px"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-secondary"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        
                                        </li>
                                        <li><a href="/">Home</a>
                                        <li><a href="#">Tentang Kami</a>
                                          <!--   <ul> -->
                                                <!-- <li><a href="about.html">About Us</a></li>
                                                <li><a href="#!">Our Team</a> -->
                                                  <!--   <ul>
                                                        <li><a href="our-team.html">Our Team</a></li>
                                                        <li><a href="team-single.html">Team Single</a></li>
                                                    </ul> -->
                                               <!--  </li> -->
                                               <!--  <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="appointment.html">Appointment</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                                <li><a href="#!">Others</a> -->
                                                  <!--   <ul>
                                                        <li><a href="404-page.html">404 Page</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    </ul> -->
                                               <!--  </li> -->
                                           <!--  </ul> -->
                                        <!-- </li> -->
                                        <li><a href="#">Dokter Kami</a>
                                      <!--       <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="vaccination.html">Vaccination</a></li>
                                                <li><a href="cardiology.html">Cardiology</a></li>
                                                <li><a href="family-physician.html">Family Physician</a></li>
                                                <li><a href="emergency-care.html">Emergency Care</a></li>
                                                <li><a href="expert-surgeon.html">Expert Surgeon</a></li>
                                                <li><a href="operation-theatre.html">Operation Theatre</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#">Informasi</a>
                                        <!--     <ul>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="#">Kontak</a>
                                           <li><a href="{{ route('daftar') }}">Daftar Online</a>                               
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <h1 style="margin-left: 10%">Silahkan memilih salah satu opsi yang ada dibawah ini</h1>
<div class="container d-flex gap-3 mb-20">
    <a href="{{ route('pasienbaru') }}" class="btn btn-primary square-button">
        PASIEN BARU
    </a>
    <a href="{{ route('pasienlama') }}" class="btn btn-success square-button">
        PASIEN LAMA
    </a>
    <a href="{{ route('pasienbpjs') }}" class="btn btn-danger square-button">
       PASIEN BPJS
    </a>
</div>

 
             <!-- FOOTER
        ================================================== -->
        <footer class="bg-dark-blue position-relative">
            <div class="container">
                <div class="row mt-n2-6 py-8 py-lg-9">
                    <div class="col-lg-5 mt-2-6">
                        <h2 class="h1 text-white mb-0">Kesehatan Anda adalah prioritas kami</h2>
                    </div>
                    <div class="col-lg-3 offset-lg-1 mt-2-6">
                        <h3 class="text-white mb-4 h5">Email Kami</h3>
                        <p class="text-secondary">klinikutamaarafahhusada@gmail.com</p>
                        <h4 class="mb-4 text-white font-weight-500">(+62) 85932253025</h4>
                        <ul class="footer-social-style1">
                            <li>
                                <a href="#!" class="rounded"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="rounded"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="rounded"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="rounded"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mt-2-6">
                        <div>
                            <h3 class="text-white mb-4 h5">Alamat Kami</h3>
                            <p class="mb-4 border-bottom pb-4 text-white border-color-light-white"> Jl. Nusa Indah, RT.02/RW.01, Gampeng, Kec. Gampengrejo, Kabupaten Kediri, Jawa Timur 64182</p></span> Copyright<a href="#!" class="text-white"></a></p>
                            <p class="mb-0 text-white">© <span class="current-year">
                        </div>
                    </div>
                </div>
            </div>
         
                                    <!-- End Submit button -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <img src="img/content/shape-03.png" class="position-absolute right-5 bottom-10 d-none d-sm-block z-index-0 opacity3" alt="...">
        </footer>

    </div>



    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- core.min.js -->
    <script src="js/core.min.js"></script>

    <!-- search -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- form plugins js -->
    <script src="quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="quform/js/scripts.js"></script>

    <!-- all js include end -->
    
</body>

</html>