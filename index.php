<!-- <?php
ob_start();
?> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Detecto</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php">
              <img src="img/logo.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <div class="row ml-0 w-100">
                <div class="col-lg-12 pr-0">
                  <ul class="nav navbar-nav center_nav pull-right">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="#register">Sign Up</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="team.html">Team</a>
                    </li>

                    <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >About Us</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="about.html"
                            >About Detecto</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content row">
            <div class="col-lg-12">
              <h1>
                We Care for Your Health Every Moment
              </h1>
              <p>
                Never take medicine randomly or without consulting a doctor.
                Everytime it is not possible to find a doctor near you. So Here
                we made this for you. Just put your symptoms and we will detect
                it. Our powerfull Machine Learning Algorithm detect your Disease
                and according to suggest medicine.
              </p>
              <div class="col-lg-6">
              <a class="main_btn mr-10" href="templates/query.php">Get Started</a> </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
    <!--================ Start Offered Services Area =================-->
    <section class="service_area section_gap">
      <div class="container">
        <div class="row justify-content-center section-title-wrap">
          <div class="col-lg-12">
            <h1>What we have done?</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="single_service">
              <span class="lnr lnr-keyboard"></span>
              <a href="#">
                <h4>Give your symptoms</h4>
              </a>
              <p>
                Fill up the form and in the given textarea enter your symptoms.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="single_service">
              <span class="lnr lnr-cloud-sync"></span>
              <a href="#">
                <h4>We Predict Disease</h4>
              </a>
              <p>
                We predict your Disease using our Machine Learning Algorithm
                (NLP and Decision Tree)
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="single_service">
              <span class="lnr lnr-heart-pulse"></span>
              <a href="#">
                <h4>Take care of you</h4>
              </a>
              <p>
                We will display your Disease and give corresponding medicine.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Offered Services Area =================-->

    <!--================ Procedure Category Area =================-->
    <section class="procedure_category section_gap">
      <div class="container">
        <div class="row justify-content-center section-title-wrap">
          <div class="col-lg-12">
            <h1>How we have done?</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="categories_post">
              <img src="img/procedure/p1.jpg" alt="Procedure" />
              <div class="categories_details">
                <div class="categories_text">
                  <div class="border_line"></div>
                  <a href="#">
                    <h5>Symptoms as Input</h5>
                  </a>
                  <div class="border_line"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="categories_post">
              <img src="img/procedure/p2.jpg" alt="Procedure" />
              <div class="categories_details">
                <div class="categories_text">
                  <div class="border_line"></div>
                  <a href="#">
                    <h5>Process in Cloud</h5>
                  </a>
                  <div class="border_line"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="categories_post">
              <img src="img/procedure/p3.jpg" alt="Procedure" />
              <div class="categories_details">
                <div class="categories_text">
                  <div class="border_line"></div>
                  <a href="#">
                    <h5>Display Result</h5>
                  </a>
                  <div class="border_line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================ Start Appointment Area =================-->
    <section class="appointment-area" id="register">
      <div class="container">
        <div
          class="row justify-content-between align-items-center"
        >
          <div class="col-lg-5 col-md-6 appointment-left">
            <h1>
              User Manual
            </h1>
            <b style="color:#d42222">
              Please Read this manual carefully to know how to use.
            </b>
            <ul class="time-list">
              <li>
                First Fill up your Name, Phone, Email Address, DOB, Blood group.
              </li>
              <li>
                Clearly Mention your problem, issues details clearly in proper
                english.
              </li>
              <li>Enter The Submit Button.</li>
              <li>Wait for some moment while we diagonise your problem.</li>
              <li>Get your result.</li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 pt-60 pb-60">
            <div class="appointment-right" id="mainnn">
              <form
                class="form-wrap"
                action=""
                method="post"
              >
                <h3 class="pb-20 text-center mb-20">Register Now</h3>
                <input
                  type="text"
                  class="form-control"
                  name="Name"
                  autocomplete="off"
                  placeholder="Your Name"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Patient Name'"
                />
                <input
                  type="text"
                  class="form-control"
                  name="Phone"
                  autocomplete="off"
                  placeholder="Phone "
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Phone'"
                />
                <input
                  type="email"
                  class="form-control"
                  name="Email"
                  autocomplete="off"
                  placeholder="Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Email Address'"
                />
                <input type="password" class="form-control" name="password" placeholder="Enter Password" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter Password'"/>
                  <input type="password" class="form-control" name="rpw" placeholder="Repeat Password" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Repeat Password'"/>
                <input
                  id="datepicker1"
                  name="Age"
                  class="dates form-control"
                  placeholder="Your Age"
                  type="text"
                />
                <div class="form-select" id="service-select">
                <select name="blood">
                  <option data-display="">Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
              <div class="form-select" id="service-select">
                <select name="gender">
                <option data-display="">Select Gender</option>
                <option value="M"> Male</option>
                <option value="F"> Female</option>
              </select>
              </div>

                <!-- <textarea
                  name="symptoms"
                  class=""
                  rows="5"
                  placeholder="Clearly Enter your symptoms"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Clearly Enter your symptoms'"
                ></textarea> -->
                <div class="text-center confirm_btn_box">
                  <button
                    type="submit"
                    name="submit"
                    class="main_btn text-uppercase"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    include 'dbconnect.php';
    if (isset($_POST['submit']))
    {

       $Name= $_POST["Name"];
       $Phone= $_POST["Phone"];
       $Email= $_POST["Email"];
       $Age= $_POST["Age"];
       $blood= $_POST["blood"];
       $gender=$_POST["gender"];
       $password= $_POST["password"];
       $passwordRepeat=$_POST["rpw"];
      //  $symptoms= $_POST["symptoms"];

      //  if($Name !=''||$Email !=''){

      //   $query = mysqli_query($conn,"insert into model(Name, Phone, Email, Age, blood, password) values ('$Name', '$Phone', '$Email', '$Age', '$blood', '$password')");
      //   header("Location: http://localhost:5000/?symptoms=".$symptoms);
      //   ob_enf_fluch();
      //   }
      //   else{
      //   echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
      //   }
      if (empty($Name) || empty($Phone) || empty($Email) || empty($password) || empty($passwordRepeat))
      {
          header("Location: index.php?error=emptyfields&uid=".$Name."&mail=".$email);
          exit();
      }


      // else if (!preg_match("/^[a-zA-Z0-9]*$/", $Email))
      // {
      //     header("Location: index.php?error=invaliduid&mail=".$Email);
      //     exit();
      // }
      else if ($password !== $passwordRepeat)
      {
          header("Location: index.php?error=&mail=".$Email);
          exit();
      }
      else{
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $query = mysqli_query($conn,"insert into model(Name, Phone, Email, Age, blood, gender, password) values ('$Name', '$Phone', '$Email', '$Age', '$blood', '$gender', '$hashedPwd')");
         // header("Location: http://localhost:5000/?symptoms=".$symptoms);
         header("Location: index.php?index=success");
          ob_enf_fluch();
      }
}
?>
    <!--================ End Appointment Area =================-->

    <!--================ start footer Area =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="single-footer-widget">
              <h6>About Team X</h6>
              <p>
                inappropriate behavior is often laughed off as “boys will be
                boys,” women face higher conduct women face higher conduct.
                inappropriate behavior is often laughed off as “boys will be
                boys,” women face higher conduct women face higher conduct.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-footer-widget">
              <h6>About Detecto</h6>
              <p>
                inappropriate behavior is often laughed off as “boys will be
                boys,” women face higher conduct women face higher conduct.
                inappropriate behavior is often laughed off as “boys will be
                boys,” women face higher conduct women face higher conduct.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <a href="#" class="icon-button twitter"
                ><i class="fa fa-twitter"></i><span></span
              ></a>
              <a href="#" class="icon-button facebook"
                ><i class="fa fa-facebook"></i><span></span
              ></a>

              <a href="#" class="icon-button youtube"
                ><i class="fa fa-youtube"></i><span></span
              ></a>
              <a href="#" class="icon-button pinterest"
                ><i class="fa fa-github"></i><span></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!------------Copyright---------------->

    <div class="copyright">
      <div class="container">
        <p class="cp-text">
          © Copyright
          <script>
            document.write(new Date().getFullYear());
          </script>
          Detecto. All rights reserved. Designed & Maintaine by
          <a href="#" style="color: rgb(51, 199, 112);">Kousik Sen</a>
        </p>
      </div>
    </div>

    <!--================ End footer Area =================-->

    <!--================ Optional JavaScript =================-->
    <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
