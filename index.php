<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>




<!--Find my home is a real estate website that avails property to people. It is authored using HTML by Lewis Kamau Kiganjos-->
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
    <link href="assets\css\style.css" type="text/css" rel="stylesheet" />

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
    <!-- End Property Search Section -->

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
        <a class="navbar-brand text-brand" href="index.php"
          ><img src="" class="logo.svg" alt="">FIND MY<span class="color-b">HOME</span></a
        >
        <!--Navigation items-->
        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
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
                <a class="dropdown-item" href="apartments.php"
                  >Apartments</a
                >
                <a class="dropdown-item" href="houses.php">House</a>
                <a class="dropdown-item" href="commercialspaces.php">Commercial Spaces</a>
                <a class="dropdown-item" href="universityaccomodation.php"
                  >University Accomodation</a
                >
                <a href="land.php" class ="dropdown-item">Land</a>

              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="blog-grid.php">Blog</a>
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

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
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

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">
      <div class="swiper-wrapper">
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/slide-1.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        Home page <br />
                      
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">EXPLORE </span> Beautiful<br />
                      Apartments
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="apartments.html"
                          ><span class="price-a">Apartments</span></a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/slide-2.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        University Accomodation <br />
                        
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">Get </span> Quality <br />
                        Hostels
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="universityaccomodation.html"
                          ><span class="price-a">Uni Hostels</span></a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
        class="swiper-slide carousel-item-a intro-item bg-image"
        style="background-image: url(assets/img/house-1.jpg)"
      >
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      HOUSES <br />
                      
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Explore </span> Quality <br />
                      Bungalows
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="houses.html"
                        ><span class="price-a">View</span></a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
      class="swiper-slide carousel-item-a intro-item bg-image"
      style="background-image: url(assets/img/office-1.jpg)"
    >
      <div class="overlay overlay-a"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">
                    COMMERCIAL SPACES <br />
                    
                  </p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">Explore</span> Quality <br />
                    Offices<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
                     and warehouses
                  </h1>
                  <p class="intro-subtitle intro-price">
                    <a href="commercialspaces.html"
                      ><span class="price-a">Office spaces</span></a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/slide-3.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                         <br />
                        
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">LAND </span> for <br />Sale and Rent
                        
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="land.html"
                          ><span class="price-a">Land page</span></a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- End Intro Section -->

    <main id="main">
      <!-- ======= Services Section ======= -->
      <section class="section-services section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Our Services</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi bi-camera2"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Enlist Property</h4>>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Post Your property to get tenants/buyers quick. It is absolutely free.
                     You will need to upload quality images and proof of ownership.

                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="enlistproperty.html" class="link-c link-icon"
                    >Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-camera-video"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Advertise</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Enlarge your reach and get more clients with Find MyHome marketing. We will help your agency get there.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="advertisewithus.html" class="link-c link-icon"
                    >Read more
                    <span class="bi bi-camera-video"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi  bi-person"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Get An Agent</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Take advantage of our agents working 24 hours a day. A report should be delivered in 48 hours.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="agents-grid.html" class="link-c link-icon"
                    >Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Latest Properties Section ======= -->
      <section class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">RECENTLY ENLISTED</h2>
                </div>
                <div class="title-link">
                  <a href="property-grid.html"
                    >All Property
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-6.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Mountain Mall <br />
                            Kiambu</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | KSH 20000</span>
                        </div>
                        <a href="#" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-3.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Moi Avenue <br />
                            Nairobi</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | KSH 25000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-7.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Majengo <br />
                            Naivasha </a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | ksh 30000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-10.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Nairobi<br />
                            South C</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | ksh 50000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End Latest Properties Section -->
      <!--Start Featured Properties Section-->
       <section class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">FEATURED LISTINGS</h2>
                </div>
                <div class="title-link">
                  <a href="property-grid.html"
                    >All Property
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-6.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Limuru <br />
                            Kiambu</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">Rent | KSH 20000</span>
                        </div>
                        <a href="#" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/mombasa.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Mombasa Road <br />
                            Nairobi</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | KSH 25000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-6.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Mtwapa <br />
                            Lamu </a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | ksh 40000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/property-6.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html"
                            >Chaka Ranch<br />
                            Nyeri</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">for sale | ksh 70000</span>
                        </div>
                        <a href="property-single.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span
                              >340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!--End Feature Properties Section-->

      <!-- ======= Agents Section ======= -->
      <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Find MyHome Agents</h2>
                </div>
                <div class="title-link">
                  <a href="agents-grid.html"
                    >All Agents
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img
                    src="assets/img/agent-4.jpg"
                    alt=""
                    class="img-d img-fluid"
                  />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two"
                          >Maggie <br />
                          </a
                        >
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Find your perfect residential or commercial space in 48 hours. Yvonne guarantees results with a variety of options in less than 48hours.
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 0795456789</p>
                      <p><strong>Email: </strong> yvonnewambui@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img
                    src="assets/img/agent-1.jpg"
                    alt=""
                    class="img-d img-fluid"
                  />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two"
                          >Yvonne <br />
                          Wambui</a
                        >
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Looking for a place to bring up your family? Jeniffer comes highly recommended from other customers.
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 076898789</p>
                      <p><strong>Email: </strong> jeniffer@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img
                    src="assets/img/agent-4.jpg"
                    alt=""
                    class="img-d img-fluid"
                  />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two"
                          >Vivian Wanjiru <br />
                          Kamau</a
                        >
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                        Vivian is perfect for finding commercial spaces for companies and individuals alike.
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 073456789</p>
                      <p><strong>Email: </strong> viviankamau@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
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
      </section>
      <!-- End Agents Section -->

      <!-- ======= Latest News Section ======= -->
      <section class="section-news section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Real Estate Blogs</h2>
                </div>
                <div class="title-link">
                  <a href="blog-grid.html"
                    >All blogs
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="news-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img
                      src="assets/img/post-2.jpg"
                      alt=""
                      class="img-b img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Investment</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html"
                            >Should You invest in<br />
                            Real Estate</a
                          >
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">25 Aug. 2022</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img
                      src="assets/img/post-5.jpg"
                      alt=""
                      class="img-b img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Konza</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html"
                            >President Uhuru opens <br />
                            Konza City</a
                          >
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">25 Aug. 2022</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img
                      src="assets/img/post-7.jpg"
                      alt=""
                      class="img-b img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Rates</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html"
                            >Government increases land <br />
                            Rates</a
                          >
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">25 Aug. 2022</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img
                      src="assets/img/post-3.jpg"
                      alt=""
                      class="img-b img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b"> Real Estate Companies</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="#"
                            >Find trustworthy real estate <br />
                            companies</a
                          >
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">25 Aug. 2022</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
            </div>
          </div>

          <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End Latest News Section -->

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