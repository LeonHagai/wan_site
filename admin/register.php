<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="../images/favicon.png" type="">

  <title> Admin | Fintech </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="sub_page">
  <?php
  if (isset($_GET['res'])) {
    if ($_GET['res'] == 'userexist') {
      echo "
      <script>  
      alert('Account with that Username Exists!');
      </script>
      ";
    }
  }
  ?>
  <script>
    $(document).ready(function() {
      $('#').submit(function(e) {
        e.preventDefault(); // Prevent form submission

        var username = $('#username').val();
        var email = $('#email').val();

        // Send AJAX request to check username availability
        $.ajax({
          type: 'POST',
          url: 'check_username.php',
          data: {
            username: username
          },
          success: function(response) {
            $('#usernameError').text(response);
          }
        });

        // Send AJAX request to check email availability
        $.ajax({
          type: 'POST',
          url: 'check_email.php',
          data: {
            email: email
          },
          success: function(response) {
            $('#emailError').text(response);
          }
        });
      });
    });
  </script>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Fintech || Admin
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="../app.apk">Download App</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">Home </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- why section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Register
        </h2>
        <hr>
      </div>

      <div class="team_container container">
        <form action="../api/users.php" method="post" style="margin-left: 20%;margin-right: 20%; margin-top:10px;" id="registrationForm">
          <input type="hidden" name="action" value="REG_ADMIN">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="mail" class="form-control" name="email" required>
          </div>
          <div class="form-group">
            <label for="f_name">First Name</label>
            <input type="text" class="form-control" name="f_name" required>
          </div>
          <div class="form-group">
            <label for="l_name">Last Name</label>
            <input type="text" class="form-control" name="l_name" required>
          </div>
          <div class="form-group">
            <label for="pswd">Password</label>
            <input type="password" class="form-control" name="pswd" required>
          </div>
          <div class="form-group">
            <label for="pswd">Confirm Password</label>
            <input type="password" class="form-control" name="cnfm_pswd" required>
          </div>
          <button class="btn btn-sm btn-outline-success" type="submit">Register</button>
        </form>
      </div>
    </div>
  </section>
  <!-- end why section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  info@mail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="../index.php">
                Home
              </a>
              <a class="" href="../about.php">
                About
              </a>
              <a class="" href="../service.php">
                Services
              </a>
              <a class="" href="../why.php">
                Why Us
              </a>
              <a class="" href="../team.php">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Powered By
        <a href="https://introtech.co.ke/" target="_blank">Introtech</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="../js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>