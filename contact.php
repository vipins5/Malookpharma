<?php 
if(isset($_POST['submit'])){
    $to = "shailesh12sharma@gmail.com, vipin.05sharma@yahoo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $subject = "Online Order" . " from:" . "\n" . $from;
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . "\n" . $from . "\n" . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    #echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: thankyou.html');
    // You can also use header('Location: thankyou.html'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Malook Pharmaceuticals Pvt Ltd &mdash; Pharma Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="icon" type="images/ico" href="images/favicon.ico"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KJRZBCQ9ND"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KJRZBCQ9ND');
</script>

<!--End-->

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

    <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <script async src="https://cse.google.com/cse.js?cx=6a925b85704288964"></script>
          <div class="gcse-search">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active"><a href="index.html">Home</a></li>
                <li><a href="shop.html">Store</a></li>
                <li class="has-children">
                  <a href="#">Our Products</a>
                  <ul class="dropdown">
                    <li><a href="Distributors.html">Distributors</a></li>
                    <li class="has-children">
                      <a href="#">All Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="Carnimet_E.html">Carnimet - E</a></li>
                        <li><a href="Dexomega_Omega3_Capsule.html">Dexomega Omega 3 Capsule</a></li>
                        <li><a href="HEALOCAL_K.html">Healocal - K</a></li>
                        <li><a href="Liplac_600_tab.html">Liplac - 600 Tablets</a></li>
                        <li><a href="Magnano_D3.html">Magnano-D3 Nano Shots</a></li>

                      </ul>
                    </li>

                    
                  </ul>
                </li>
                
                <li class="has-children">
                  <a href="about.html">About</a>
                  <ul class="dropdown">
                    <li><a href="about.html">About Us</a></li>
                    <li class="has-children">
                      <li><a href="Awards.html">Awards</a></li>
                  </ul>

                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>

            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">

<form action="" method="post">
<div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                  <label for="first_name" class="text-black">First Name: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                  <div class="col-md-6">
                  <label for="last_name" class="text-black">Last Name: <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                  <label for="email" class="text-black">Email: <span class="text-danger">*</span></label>
                    <input type="email" required class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="phone" class="text-black">Phone Number: <span class="text-danger">*</span></label>
                        <input type="tel" pattern="^\d{10}$" required class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">

                  <label for="message" class="text-black">Message: </label>
                      <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
 </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
<input type="submit" name="submit" value="Submit">
</div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <!--<div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
      </div>
      
    </div> -->


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p><small>Welcome to Malook Pharmaceuticals Pvt Ltd. Online Store — the place where the health of your loved ones is our main priority!
                We are here to make you and your family fun and happy, hale and hearty, fresh and active.</small></p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
            <li><a href="Distributors.html">Our Distributors</a></li>
              <li><a href="Carnimet_E.html">Vitamins</a></li>
              <li><a href="Awards.html">Awards</a></li>
              <li><a href="PrivacyCookiesPolicy.html">Privacy &amp; Cookies Policy</a></li>
              <li><a href="TermsandConditions.html">Terms &amp; Conditions</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">F-21 Third Floor, Vishwakarma Colony, New Delhi, Delhi 110044</li>
                <li class="phone"><a href="tel://9911009592">+91 9911009592</a></li>
                <li class="email"> <a href="mailto:shailesh12sharma@gmail.com" target="_blank"
                  class="text-primary">shailesh12sharma@gmail.com</a></li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
           <p>
              <!--Google Maps--> 
            <iframe width="100%" height="200" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=F-21%20,%20Vishwakarma%20Colony,%20New%20Delhi,%20Delhi%20110044+(Malook%20Pharmaceuticals%20Pvt%20Ltd.)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </p>
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is editied
              by <i class="icon-heart" aria-hidden="true"></i> <a href="mailto:vipin.05sharma@yahoo.com" target="_blank"
                class="text-primary">Vipin Sharma</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>