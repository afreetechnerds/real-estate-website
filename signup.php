<?php include ( "inc/connect.inc.php" ); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Find MyHome</title>
    <meta content="" name="description" /> 
    <meta content="" name="keywords" />
    
<!--Linking external css files-->
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets\css\style.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ======= Property Search Section/Search Filters ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input
                  type="text"
                  class="form-control form-control-lg form-control-a"
                  placeholder="Keyword"
                />
              </div>
            </div>
            <!--Types of property-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select
                  class="form-control form-select form-control-a"
                  id="Type"
                >
                  <option>All Type</option>
                  <option>Apartment</option>
                  <option>House</option>
                  <option>Commercial property</option>
                  <option>Land</option>
                </select>
              </div>
            </div>
            <!--Regions-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">City</label>
                <select
                  class="form-control form-select form-control-a"
                  id="city"
                >
                  <option>Kiambu</option>
                  <option>Nairobi</option>
                  <option>Thika</option>
                  <option>Nyeri</option>
                  <option>Muranga</option>
                </select>
              </div>
            </div>
            <!--Bedrooms-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select
                  class="form-control form-select form-control-a"
                  id="bedrooms"
                >
                  <option>Any</option>
                  <option>Single/Double</option>
                  <option>Bedsitter</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                  <option>5+</option>
                </select>
              </div>
            </div>
             <!--Garages-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="garages">Garages</label>
                <select
                  class="form-control form-select form-control-a"
                  id="garages"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <!--Bathrooms-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Bathrooms</label>
                <select
                  class="form-control form-select form-control-a"
                  id="bathrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <!--Price filter-->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Min Price</label>
                <select
                  class="form-control form-select form-control-a"
                  id="price"
                >
                  <option>Unlimited</option>
                  <option>KSH 50,000</option>
                  <option>KSH 100,000</option>
                  <option>KSH 150,000</option>
                  <option>KSH 200,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Property</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Property Search Section -->>

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarDefault"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ><!--attributes for menu button-->
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!--Logo and Title-->
        <a class="navbar-brand text-brand" href="index.html"
          ><img src="Assets/img/logo.png" class="logo" alt="">FIND MY<span class="color-b">HOME</span></a
        >
        <!--Navigation items-->
        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
<!--property types dropdown-->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Properties</a
              >
              <div class="dropdown-menu">
                <a class="dropdown-item" href="apartments.html"
                  >Apartments</a
                >
                <a class="dropdown-item" href="houses.html">House</a>
                <a class="dropdown-item" href="commercialspaces.html">Commercial Spaces</a>
                <a class="dropdown-item" href="universityaccomodation.html"
                  >University Accomodation</a
                >
                <a href="land.html" class ="dropdown-item">Land</a>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="blog-grid.html">Blog</a>
            </li>
<!--pages dropdown menu-->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Pages</a
              >
              <div class="dropdown-menu">
                <a class="dropdown-item" href="agents-grid.php">Agents Grid</a>
                <a href="enlistproperty.php" class ="dropdown-item">Enlist Property</a>
                <a href="advertisewithus.php" class = "dropdown-item"> Advertise with us</a>
                <a href="signup.php" class ="dropdown-item">Sign Up</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>

        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
        >
          <i class="bi bi-search"></i>
        </button>
      </div>
    </nav>
    <!-- End Header/Navbar -->


    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">SIGN UP</h1>
                <span class="color-text-a"
                  >CREATE AN ACCOUNT</span
                >
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Sign Up
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Contact Single ======= -->
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 section-t8">
              <div class="row">
                <div class="col-md-7">
                  <form
                    action="forms/contact.php"
                    method="post"
                    role="form"
                    class="php-email-form"
                  >
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input
                            type="text"
                            name="name"
                            class="form-control form-control-lg form-control-a"
                            placeholder="Your Name"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input
                            name="email"
                            type="email"
                            class="form-control form-control-lg form-control-a"
                            placeholder="Your Email"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input
                            type="text"
                            name="subject"
                            class="form-control form-control-lg form-control-a"
                            placeholder="Phone Number(optional)"
                            required
                          />
                        </div>
                      </div>
                     
                      <div class="col-md-12 my-3">
                        <div class="mb-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">
                            An email has been sent to verify your account
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-a">
                          Sign Up
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-5 section-md-t3">
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="bi bi-envelope"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">Reach out</h4>
                      </div>
                      <div class="icon-box-content">
                        <p class="mb-1">
                          Email.
                          <span class="color-a">lewiskiganjo@gmail.com</span>
                        </p>
                        <p class="mb-1">
                          Phone.
                          <span class="color-a">0790632234</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="bi bi-geo-alt"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">Find us in</h4>
                      </div>
                      <div class="icon-box-content">
                        <p class="mb-1">
                          Makongeni
                          <br />
                          Thika
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="icon-box">
                    <div class="icon-box-icon">
                      <span class="bi bi-share"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">Social networks</h4>
                      </div>
                      <div class="icon-box-content">
                        <div class="socials-footer">
                          <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i
                                  class="bi bi-facebook"
                                  aria-hidden="true"
                                ></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="bi bi-twitter" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i
                                  class="bi bi-instagram"
                                  aria-hidden="true"
                                ></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i
                                  class="bi bi-linkedin"
                                  aria-hidden="true"
                                ></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Single-->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Find MyHome</h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                  Find my home avails a variety of property for people to choose from. <br>It eliminates the need for a physical presence when looking for property.
                </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                  <li class="color-a">
                    <span class="color-text-a">Phone .</span>
                    0790632234
                  </li>
                  <li class="color-a">
                    <span class="color-text-a">Email .</span> lewiskamau@gmail.com
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">SOCIAL MEDIA</h3>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i>
                      <a href="https://twitter.com">Twitter</a>
                    </li>
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i> <a href="https://linkedIn.com">LinkedIn</a>
                    </li>
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i>
                      <a href="https://instagram.com">Instagram</a>
                    </li>
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i>
                      <a href="https://youtube.com">YouTube</a>
                    </li>
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i>
                      <a href="https://tiktok.com">Tiktok</a>
                    </li>
                    <li class="item-list-a">
                      <i class="bi bi-chevron-right"></i>
                      <a href="https://facebook.com">Facebook</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">Site nav</h3>
              </div>
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="about.html">About us</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="about.html">FAQs</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="enlistproperty.html">Enlist Property</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="universityaccomodation.html">University accomodation</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>
                    <a href="agents-grid.html">Find an Agent</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="https://facebook.com">
                    <i class="bi bi-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com">
                    <i class="bi bi-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://instagram.com">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://linkedin.com">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">Find MyHome</span> All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>