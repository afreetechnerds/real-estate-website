<?php include ( "inc/connect.inc.php" ); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Real Estate</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    

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
    <!-- ======= Property Search Section ======= -->
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
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select
                  class="form-control form-select form-control-a"
                  id="Type"
                >
                  <option>All Type</option>
                  <option>For Rent</option>
                  <option>For Sale</option>
                  <option>Open House</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">City</label>
                <select
                  class="form-control form-select form-control-a"
                  id="city"
                >
                  <option>All City</option>
                  <option>Nairobi</option>
                  <option>Thika</option>
                  <option>Murang'a</option>
                  <option>Mombasa</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select
                  class="form-control form-select form-control-a"
                  id="bedrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
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
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html"
          >Real<span class="color-b">Estate</span></a
        >

        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="property-grid.html">Property</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="blog-grid.html">Blog</a>
            </li>

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
                <a class="dropdown-item active" href="property-single.html"
                  >Property Single</a
                >
                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                <a class="dropdown-item" href="agent-single.html"
                  >Agent Single</a
                >
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
                <h1 class="title-single">4 bedroom</h1>
                <span class="color-text-a">Mombasa</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="property-grid.html">Properties</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    4 BEDROOM HOUSE
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Property Single ======= -->
      <section class="property-single nav-arrow-b">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div id="property-single-carousel" class="swiper">
                <div class="swiper-wrapper">
                  <div class="carousel-item-b swiper-slide">
                    <img src="assets/img/property-6.jpg" style="width: 100%;" alt="" />

                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img src="assets/img/property-6.jpg" style="width: 100%;" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="property-single-carousel-pagination carousel-pagination"
              ></div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="row justify-content-between">
                <div class="col-md-5 col-lg-4">
                  <div class="property-price d-flex justify-content-center foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="bi bi-cash">ksh</span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h5 class="title-c">15000</h5>
                      </div>
                    </div>
                  </div>
                  <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4">
                          <h3 class="title-d">Property Description</h3>
                        </div>
                      </div>
                    </div>
                    <div class="summary-list">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Property ID:</strong>
                          <span>1134</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Location:</strong>
                          <span>Mombasa</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Property Type:</strong>
                          <span>House</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Status:</strong>
                          <span>Sale</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Area:</strong>
                          <span
                            >340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Beds:</strong>
                          <span>4</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Baths:</strong>
                          <span>2</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Garage:</strong>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 section-md-t3">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Property Description</h3>
                      </div>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a">
                     This property is located in a calm serene environment 60km from the 
                     country's capital city. The security in this place is provided by G4S guaranteeing
                     your safety. It also comes with farming land for your various farming projects.
                    </p>
                    <p class="description color-text-a no-margin">
                     It has 4 bedrooms, a swimming pool and a separate Servant's Quarters. 
                    </p>
                  </div>
                  <div class="row section-t3">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Amenities</h3>
                      </div>
                    </div>
                  </div>
                  <div class="amenities-list color-text-a">
                    <ul class="list-a no-margin">
                      <li>Balcony</li>
                      <li>Outdoor Kitchen</li>
                      <li>Cable Tv</li>
                      <li>Deck</li>
                      <li>Tennis Courts</li>
                      <li>Internet</li>
                      <li>Parking</li>
                      <li>Sun Room</li>
                      <li>Concrete Flooring</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-10 offset-md-1">
              <ul
                class="nav nav-pills-a nav-pills mb-3 section-t3"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="pills-video-tab"
                    data-bs-toggle="pill"
                    href="#pills-video"
                    role="tab"
                    aria-controls="pills-video"
                    aria-selected="true"
                    >Video</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-plans-tab"
                    data-bs-toggle="pill"
                    href="#pills-plans"
                    role="tab"
                    aria-controls="pills-plans"
                    aria-selected="false"
                    >Floor Plans</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-map-tab"
                    data-bs-toggle="pill"
                    href="#pills-map"
                    role="tab"
                    aria-controls="pills-map"
                    aria-selected="false"
                    >Ubication</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-video"
                  role="tabpanel"
                  aria-labelledby="pills-video-tab"
                >
                  <iframe
                    src="https://player.vimeo.com/video/73221098"
                    width="100%"
                    height="460"
                    frameborder="0"
                    webkitallowfullscreen
                    mozallowfullscreen
                    allowfullscreen
                  ></iframe>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-plans"
                  role="tabpanel"
                  aria-labelledby="pills-plans-tab"
                >
                  <img src="assets/img/plan2.jpg" alt="" class="img-fluid" />
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-map"
                  role="tabpanel"
                  aria-labelledby="pills-map-tab"
                >
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                    width="100%"
                    height="460"
                    frameborder="0"
                    style="border: 0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Contact Agent</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <img src="assets/img/agent-4.jpg" alt="" class="img-fluid" />
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="property-agent">
                    <h4 class="title-agent">Maggie</h4>
                    <p class="color-text-a">
                      Maggie is our month's leading agent managing to get four quality  properties with an average of 4 stars.
                    </p>
                    <ul class="list-unstyled">
                      <li class="d-flex justify-content-between">
                        <strong>Phone:</strong>
                        <span class="color-text-a">07893456789</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Mobile:</strong>
                        <span class="color-text-a">0789456789</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Email:</strong>
                        <span class="color-text-a">Maggie@gmail.com</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Skype:</strong>
                        <span class="color-text-a">maggie.skype</span>
                      </li>
                    </ul>
                    <div class="socials-a">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <div class="property-contact">
                    <form class="form-a">
                      <div class="row">
                        <div class="col-md-12 mb-1">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control form-control-lg form-control-a"
                              id="inputName"
                              placeholder="Name *"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-md-12 mb-1">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control form-control-lg form-control-a"
                              id="inputEmail1"
                              placeholder="Email *"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-md-12 mb-1">
                          <div class="form-group">
                            <textarea
                              id="textMessage"
                              class="form-control"
                              placeholder="Comment *"
                              name="message"
                              cols="45"
                              rows="8"
                              required
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <button type="submit" class="btn btn-a">
                            Send Message
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Property Single-->
    </main>

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