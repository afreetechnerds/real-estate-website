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
                <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                <a href="enlistproperty.html" class ="dropdown-item">Enlist Property</a>
                <a href="advertisewithus.html" class = "dropdown-item"> Advertise with us</a>
                <a href="signup.html" class ="dropdown-item">Sign Up</a>

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
                <h1 class="title-single">LIVING IN A GATED COMMUNITY</h1>
                <span class="color-text-a">News Single.</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    LIVING IN A GATED COMMUNITY
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Blog Single ======= -->
      <section class="news-single nav-arrow-b">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="news-img-box">
                <img src="assets/img/gated-1.jpg" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <div class="post-information">
                <ul class="list-inline text-center color-a">
                  <li class="list-inline-item mr-2">
                    <strong>Author: </strong>
                    <span class="color-text-a">Margaret Njoki</span>
                  </li>
                  <li class="list-inline-item mr-2">
                    <strong>Category: </strong>
                    <span class="color-text-a">GATED COMMUNITIES</span>
                  </li>
                  <li class="list-inline-item">
                    <strong>Date: </strong>
                    <span class="color-text-a">19 Oct. 2022</span>
                  </li>
                </ul>
              </div>
              <div class="post-content color-text-a">
                <p class="post-intro">
                  The demand for gated community properties has increased in the recent
                  years. This can be attributed to the security and privact attributed to
                  living in these areas. <br/>In 2017 alone, the number of gated real estate communities
                  rocketed to 10 per county from 5 in the previous year.
                  <strong>Merits</strong>and demerits associated with living in a gated community
                  include but are not limited to:
                </p>
                <p>
                 <h4>Security</h4>
                 <p>Security agencies e.g G4S provide the much needed infrastructure
                  to protect you and your family. The provision of security guards, surveillance
                  systems and watchdogs comes as an added advantage to living in a gated community.
                 </p>
                 <h4>Privacy and exclusivity</h4>
                 <p>Feel free to go about yout business without worrying about what people will say.
                  Gated communities tend to value privacy and are really friendly.
                 </p>
                </p>
                <p>
                 <h4>Status Symbol</h4>
                 Due to the fact that as humans we are social beings and there is always the need to show off, 
                 acquiring property in a gated community helps to elevate ones social status.
                </p>
                <blockquote class="blockquote">
                  <p class="mb-4">
                    "It's Not a home unless you feel at home. Security is paramount."
                  </p>
                  <footer class="blockquote-footer">
                    <strong>Lewis</strong>
                    <cite title="Source Title">Author</cite>
                  </footer>
                </blockquote>
                <p>
                 <h4>Integrated Facilities</h4>
                 Availability of education centers, entertainment centers, shopping centers, religious places, hospitals all serve as 
                 hot commodities that are found in these communities. <br>
                 These places have proven to be great for kids and anyone alike as the services in these facilities is always top tier.
                </p>
                <p>
                  <h4>Sense of community</h4>
                  There is a certain feeling of unity and a sense of belonging that comes with this type of living.
                   As they say no man is an island and no one can survive alone.
                </p>
                <p>
                <strong>DEMERITS</strong>
                <h4>Really expensive</h4>
                The number one downside of properties in gated communities is the expenses that tag along when trying to acquire them. 
                Not everyone is capable of finding the exaggerated amounts of cash that the agencies ask for in order to be able to live in such places.
                </p>
                <p>
                <h4>Long waiting periods</h4>
                Due to the growing and high demand for gated estates in Kenya the waiting
                times tend to be a long and tedious and process that results in a lot of people giving up.
                </p>
              </div>
              <div class="post-footer">
                <div class="post-share">
                  <span>Share: </span>
                  <ul class="list-inline socials">
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
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
              <div class="title-box-d">
                <h3 class="title-d">Comments (4)</h3>
              </div>
              <div class="box-comments">
                <ul class="list-comments">
                  <li>
                    <div class="comment-avatar">
                      <img src="assets/img/author-2.jpg" alt="" />
                    </div>
                    <div class="comment-details">
                      <h4 class="comment-author">Alex Maina</h4>
                      <span>18 Sep 2022</span>
                      <p class="comment-description">
                       Hawa waseee wako fity. Just got the keys to my new house.
                      </p>
                      <a href="3">Reply</a>
                    </div>
                  </li>
                  <li class="comment-children">
                    <div class="comment-avatar">
                      <img src="assets/img/author-1.jpg" alt="" />
                    </div>
                    <div class="comment-details">
                      <h4 class="comment-author">Jose Githaiti</h4>
                      <span>18 Sep 2022</span>
                      <p class="comment-description">
                        Vivian help me find my dream home in 22 hours, damn they are fast.
                      </p>
                      <a href="3">Reply</a>
                    </div>
                  </li>
                  <li>
                    <div class="comment-avatar">
                      <img src="assets/img/author-2.jpg" alt="" />
                    </div>
                    <div class="comment-details">
                      <h4 class="comment-author">Lesley </h4>
                      <span>18 Sep 2022</span>
                      <p class="comment-description">
                        The blog was really helpful. Really good information.
                      </p>
                      <a href="3">Reply</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="form-comments">
                <div class="title-box-d">
                  <h3 class="title-d">Leave a Reply</h3>
                </div>
                <form class="form-a">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="inputName">Enter name</label>
                        <input
                          type="text"
                          class="form-control form-control-lg form-control-a"
                          id="inputName"
                          placeholder="Name *"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="inputEmail1">Enter email</label>
                        <input
                          type="email"
                          class="form-control form-control-lg form-control-a"
                          id="inputEmail1"
                          placeholder="Email *"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <label for="inputUrl">Enter website</label>
                        <input
                          type="url"
                          class="form-control form-control-lg form-control-a"
                          id="inputUrl"
                          placeholder="Website"
                        />
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <label for="textMessage">Enter message</label>
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
                    <div class="col-md-12">
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
      </section>
      <!-- End Blog Single-->
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