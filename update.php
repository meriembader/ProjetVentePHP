<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO reclamation VALUES ( ?, ?, ?, ?)');
    $stmt->execute([ $titre, $description, $role, $created]);
    // Output message
    $msg = 'Created Successfully!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          Now Ui Kit
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Download</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p>Components</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="./index.html">
                <i class="now-ui-icons business_chart-pie-36"></i> All components
              </a>
              <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
                <i class="now-ui-icons design_bullet-list-67"></i> Documentation
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral" href="https://www.creative-tim.com/product/now-ui-kit-pro" target="_blank">
              <i class="now-ui-icons arrows-1_share-66"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="./assets/img/now-logo.png" alt="">
          <h1 class="h1-seo">Now UI Kit.</h1>
          <h3>A beautiful Bootstrap 4 UI kit. Yours free.</h3>
        </div>
        <h6 class="category category-absolute">Designed by
          <a href="http://invisionapp.com/" target="_blank">
            <img src="./assets/img/invision-white-slim.png" class="invision-logo" />
          </a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">
            <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo" />
          </a>.</h6>
      </div>
    </div>
    <div class="main">
      <div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="hero-images-container">
                <img src="assets/img/hero-image-1.png" alt="">
              </div>
              <div class="hero-images-container-1">
                <img src="assets/img/hero-image-2.png" alt="">
              </div>
              <div class="hero-images-container-2">
                <img src="assets/img/hero-image-3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <h3 class="title">Basic Elements</h3>

          <div class="space-70"></div>
          <div id="inputs">
      
            <p class="category">Creer Reclamation</p>
            <div class="row">
            <form action="index.php?id=<?=$reclamation['id']?>" method="post">
              <div class="col-sm-6 col-lg-8">
                <div class="form-group has-successform-group has-success">
                  <input type="text" value="<?=$reclamation['titre']?>" name="titre" placeholder="titre reclamation" class="form-control" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-8">
                <div class="form-group has-success">
                  <input type="text"value="<?=$reclamation['description']?>" name="description" placeholder="description reclamation" class="form-control form-control-success" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-8">
                <div class="form-group has-success">
                  <input type="texte" value="<?=$reclamation['role']?>" name="role" placeholder="gest / host"  class="form-control form-control-danger" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-8">
                <div class="input-group">
                  <div class="input-group-prepend has-success">
                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                  </div>
                  <input type="datetime-local" name="created"value="<?=date('Y-m-d\TH:i', strtotime($reclamation['created']))?>" class="form-control" placeholder="Left Font Awesome Icon">
                </div>
              </div>
            
            </div>
              
            <button class="btn btn-success">Success</button>
           
           <button class="btn btn-danger">Danger</button>
   
          </div>
       
      </div>
    
    
  
      <div class="section section-notifications">
        <div class="alert alert-success" role="alert">
          <div class="container">
            <div class="alert-icon">
              <i class="now-ui-icons ui-2_like"></i>
            </div>
            <strong>Well done!</strong> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </span>
            </button>
          </div>
        </div>
        <div class="alert alert-info" role="alert">
          <div class="container">
            <div class="alert-icon">
              <i class="now-ui-icons travel_info"></i>
            </div>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </span>
            </button>
          </div>
        </div>
        <div class="alert alert-warning" role="alert">
          <div class="container">
            <div class="alert-icon">
              <i class="now-ui-icons ui-1_bell-53"></i>
            </div>
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </span>
            </button>
          </div>
        </div>
        <div class="alert alert-danger" role="alert">
          <div class="container">
            <div class="alert-icon">
              <i class="now-ui-icons objects_support-17"></i>
            </div>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </span>
            </button>
          </div>
        </div>
      </div>
      <!--  end notifications -->
   
      <div class="section" id="carousel">
        <div class="container">
          <div class="title">
            <h4>Carousel</h4>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block" src="assets/img/bg1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nature, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Somewhere Beyond, United States</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/img/bg4.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Yellowstone National Park, United States</h5>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
 
   
      <div class="section section-examples" data-background-color="black">
        <div class="space-50"></div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <a href="examples/landing-page.html" target="_blank">
                <img src="assets/img/landing.jpg" alt="Image" class="img-raised">
              </a>
              <a href="examples/landing-page.html" class="btn btn-outline-default btn-primary btn-round">View Landing Page</a>
            </div>
            <div class="col">
              <a href="examples/profile-page.html" target="_blank">
                <img src="assets/img/profile.jpg" alt="Image" class="img-raised">
              </a>
              <a href="examples/profile-page.html" class="btn btn-outline-default btn-primary btn-round">View Profile Page</a>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
              <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD format. Start a new project or give an old Bootstrap project a new look!</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                Download HTML
              </a>
              <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-lg btn-outline-primary btn-round" role="button">
                Download PSD/Sketch
              </a>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row text-center mt-5">
            <div class="col-md-8 ml-auto mr-auto">
              <h2>Want more?</h2>
              <h5 class="description">We've just launched
                <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h5>
            </div>
            <div class="col-md-12">
              <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">
                <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
              </a>
            </div>
          </div>
          <br>
          <br>
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                <i class="fab fa-linkedin"></i>
              </a>
              <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default">Nice Button</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
            <p>Always have an access to your profile</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral">Back</button>
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>