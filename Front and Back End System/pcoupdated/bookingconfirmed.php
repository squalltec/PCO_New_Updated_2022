<?php
session_start();


$bookingnumber=$_SESSION['bookingnumber'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
    <link rel="stylesheet" href="styles/app.css">
    <title>Confirmed</title>
</head>
<body>
    <div class = "main-holder">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="index.php">
                  <img src="img/logo.png" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mx-auto mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                  </ul>

                  <div class = "navbar-contact-info">
                    <img src = "img/header-contact-img.png">
                  </div>
              </div>
            </div>
          </nav>
    </header>
    <section class="page_title">
        <div class="container">
            <h1>Hotel Booking Success</h1>
        </div>
    </section>
    
    <div class = "container px-3">
        <div class="confirmed_booking w-100">
            <div class="booking_card mx-auto">
                <div class="banner_card">
                    <i class="bi bi-check-circle-fill"></i>
                    <h2>Thank You.</h2>
                    <p>Your Hotel Booking Confirmed</p>
                </div>
                <div class="card_meta">
                    <a href="" class = "mb-5"><i class="bi bi-printer"></i>&nbsp;Print Booking</a>
                    <div class="booking_num py-4">Booking number: <?php echo $bookingnumber; ?></div>
                    <span class = "mt-5 d-block">We wish you a pleasant journey
                        PCO-connect team</span>
                </div>
            </div>
            <a href="" class="back_to">Back to Homepage</a>
        </div>
    </div>
    
   
    <section class="footer">
        <div class="mainfooter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 px-0 mb-4 mb-lg-0">
                        <div class="footer_col about">
                            <h2>About</h2>
                            <p>In 2009, founder & CEO Dilan Fernando saw the need for a simpler more streamlined, secure and optimal way for Congress organizers to book and manage events. His vision was a simple but powerful one to create a tool for professionals to access, manage, and share event information from anywhere in real time. Not a novel concept today, but it was for the early 2000’s. In those days, no one was using 100% web-based software or “cloud based” as we know it today.
                                PCO Connect not only survived the “dot com” burst of the early 2000s but steadily grew, Today, PCO Connect has serves over 100,000 customers and companies.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 px-0 mb-4 mb-lg-0">
                        <div class="footer_col m-0">
                            <h2>Testinomials</h2>
                            <div class = "footerslides owl-carousel owl-theme">
                                <div class = "footerslides-item">
                                    <img src="img/quote.png" alt="">
                                    <p class = "mb-4">Excellent pre- and during-event results. Well-planned customer service solved all problems. I'd recommend the Services to any event organizer in Dubai or the Gulf Region. Thanks for attending.</p>
                                    <hr>
                                    <div class = "footerslides-item-info mt-4">
                                        <h6>Drew Donavan</h6>
                                        <p class = "mb-0">International Telecommuication Union Head, Safety and Security Division</p>
                                    </div>
                                </div>
                                <div class = "footerslides-item">
                                    <img src="img/quote.png" alt="">
                                    <p>Excellent pre- and during-event results. Well-planned customer service solved all problems. I'd recommend the Services to any event organizer in Dubai or the Gulf Region. Thanks for attending.</p>
                                    <hr>
                                    <div class = "footerslides-item-info">
                                        <h6>Drew Donavan</h6>
                                        <p class = "mb-0">International Telecommuication Union Head, Safety and Security Division</p>
                                    </div>
                                </div>
                                <div class = "footerslides-item">
                                    <img src="img/quote.png" alt="">
                                    <p>Excellent pre- and during-event results. Well-planned customer service solved all problems. I'd recommend the Services to any event organizer in Dubai or the Gulf Region. Thanks for attending.</p>
                                    <hr>
                                    <div class = "footerslides-item-info">
                                        <h6>Drew Donavan</h6>
                                        <p class = "mb-0">International Telecommuication Union Head, Safety and Security Division</p>
                                    </div>
                                </div>
                                <div class = "footerslides-item">
                                    <img src="img/quote.png" alt="">
                                    <p>Excellent pre- and during-event results. Well-planned customer service solved all problems. I'd recommend the Services to any event organizer in Dubai or the Gulf Region. Thanks for attending.</p>
                                    <hr>
                                    <div class = "footerslides-item-info">
                                        <h6>Drew Donavan</h6>
                                        <p class = "mb-0">International Telecommuication Union Head, Safety and Security Division</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-0 m-0">
                        <div class="footer_col info m-0">
                            <h2>Connect with us</h2>
                            <ul class="socialmedia">
                                <li>
                                    <a href="">
                                        <img src="img/social/facebook.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/social/linkedin.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/social/twitter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/social/instagram.png" alt="">
                                    </a>
                                </li>
                            </ul>
                            <h6 class="address_title">Travel Synergies Tourism LLC</h6>
                            <ul class="addresses">
                                <li>
                                    Al Nassima Towers
                                </li>
                                <li>Sheikh Zayed Road
                                </li>
                                <li>Dubai, UAE</li>
                            </ul>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quickLinks">
            <div class="container px-0">
                <nav class="nav">
                    <a class="nav-link active" aria-current="page" href="#">About us</a>
                    <a class="nav-link" href="#">Add your property</a>
                    <a class="nav-link" href="#">customer Service</a>
                    <a class="nav-link" href="#">FAQ</a>
                    <a class="nav-link" href="#">Careers</a>
                    <a class="nav-link" href="#">Terms & Conditions</a>
                    <a class="nav-link" href="#">Privacy and Cookies</a>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copylayout">
                    <div class="copy_text">Copyright 2022 PCO Connect | Design and Developed By</div>
                    <div class="copy_text">A Sub Division Of</div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>

</body>
</html>