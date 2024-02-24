<!----------header------------------>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BotScan</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{Asset("css/style.css")}}">

</head>

<body>



  <!---------heading--------->
  <section class="bg">
    <div class=" text-white p-6 text-center">
      <h1 class="m-0">BotScan - Research Journal</h1><br>
      <p>"Empowering Ideas, Enriching Minds: Where Knowledge Meets Publication."</p>
    </div>


    <!--Navbar-------------------------------------------------------------------------->
    
    <div>
      <nav class="navbar navbar-expand-lg">
        <img id="logo" src="{{Asset("image/logo2.png")}}" alt="logo" height="120px" width="130px" class="mr-3">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active  text-white" aria-current="page" href="#"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-white" href="#"><b>About Journal</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-white" href="#"><b>Archives</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Editorial Board</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editor</a></li>
                  <li><a class="dropdown-item" href="#">Publisher</a></li>
                  <li><a class="dropdown-item" href="#">Editorial Board</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Policy Details</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Policy Details</a></li>
                  <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                  <li><a class="dropdown-item" href="#">Terms and Conditions</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Duties & Guidelines</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Reviewers</a></li>
                  <li><a class="dropdown-item" href="#">Authors</a></li>
                  <li><a class="dropdown-item" href="#">Ethical Guidelines</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <b>Journal Subscription</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Conference Proceedings</a></li>
                  <li><a class="dropdown-item" href="#">Article Processing Charges (APC)</a></li>
                  <li><a class="dropdown-item" href="#">Journal Subscriptions</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link  text-white" href="#"><b>Register</b></a>
              </li>

          </div>
        </div>
      </nav>

    </div>
  </section>



  @yield('webcontent')



  <!------------footer----------------->

  <!--------Footer--------->
  <!--footer starts from here-->
  <footer class="footer">
    <div class="container bottom_border">
      <div class="row">
        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
          <!--headin5_amrc-->
          <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s</p>
          <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
          <p><i class="fa fa-phone"></i> +91-9999878398 </p>
          <p><i class="fa fa fa-envelope"></i> info@example.com </p>


        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="#">Image Rectoucing</a></li>
            <li><a href="#">Clipping Path</a></li>
            <li><a href="#">Hollow Man Montage</a></li>
            <li><a href="#">Ebay & Amazon</a></li>
            <li><a href="#">Hair Masking/Clipping</a></li>
            <li><a href="#">Image Cropping</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
          <!--headin5_amrc-->
          <ul class="footer_ul_amrc">
            <li><a href="#">Remove Background</a></li>
            <li><a href="#">Shadows & Mirror Reflection</a></li>
            <li><a href="#">Logo Design</a></li>
            <li><a href="#">Vectorization</a></li>
            <li><a href="#">Hair Masking/Clipping</a></li>
            <li><a href="#">Image Cropping</a></li>
          </ul>
          <!--footer_ul_amrc ends here-->
        </div>


        <div class=" col-sm-4 col-md  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
          <!--headin5_amrc ends here-->

          <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
            </li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
              <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
            </li>
          </ul>
          <!--footer_ul2_amrc ends here-->
        </div>
      </div>
    </div>


    <div class="container">
      <ul class="foote_bottom_ul_amrc">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

      <ul class="social_footer_ul">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <!--social_footer_ul ends here-->
    </div>

  </footer>

  <script  src="{{Asset("js/script.js")}}"> </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    

</body>

</html>