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
      <h1 class="m-0">BotScan --- Research Journal</h1><br>
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
                  <li><a class="dropdown-item" href="/leadership">Editor</a></li>
                  <li><a class="dropdown-item" href="/leadership">Publisher</a></li>
                  <li><a class="dropdown-item" href="/editeam">Editorial Board</a></li>
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
                  <li><a class="dropdown-item" href="/conference">Conference Proceedings</a></li>
                  <li><a class="dropdown-item" href="/apc">Article Processing Charges (APC)</a></li>
                  <li><a class="dropdown-item" href="/journalsubscription">Journal Subscriptions</a></li>
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

  <!-----------------Slider------------------>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="slogan">We are global <br>Publisher</h1><br><br>
              <p>Focused to publishing significant research. Let's make a positive change. togrther,Are you in?</p>
              <br><br>
              <form>
                <button type="submit " class="btn  submit-btn">Submit Article</Article></button>
              </form>
            </div>
            <div class="col-md-6">
              <img src="{{Asset("image/pic3.png")}}" class="d-block w-100 img1">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="slogan">Peer Reviewed<br>Journal</h3><br><br>
              <p>Scholarly Peer Review high indexed international journals in various streams.</p>
              <form>
                <button type="submit" class="btn  submit-btn">Submit Article</button>
              </form>
            </div>
            <div class="col-md-6">
              <img src="{{Asset("image/pic4.jpg")}}" class="d-block w-100">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="slogan">Promote your work</h3><br><br>
              <p>Red our advice on increasing the impact and visibility of your publication</p>
              <form>
                <button type="submit" class="btn  submit-btn">Submit Article</button>
              </form>
            </div>
            <div class="col-md-3">
              <img src="{{Asset("image/pic2.jpg")}}" class="d-block img3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!------------------container----------------->
  <div class="container">
    <div class="row content">
      <div class="col-sm-4">
        <img src="{{Asset("image/about journal.jpg")}}" alt="Placeholder Image" class="img-fluid">
      </div>
      <div class="data col-sm-8" >
        <h2 class="heading">About Journal</h2>
        <p>The BotScan as an international journal offers the most affordable
          self-publishing services in all over the world. The BotScan journal has professional writers
          with worldwide communities. We provide relevant networking opportunities support literature ovarious animal
          sciences an individual throughout our services. We are engage in the publishing,
          supplying and exporting of variable textual sources. Our journal have well qualified and strong
          workforce of editors and reviewers along the ethical writers. Our hardcore editorial team of professionals
          includes doctors, engineers, scientists, social activities and researchers. Our are
          well experience and expert in theirs field of journal publications and provide possible assistancein quality
          product and managing textual matters to sustainable society. We aim to provideprofessional self publications
          on research and review articles; guidance and support to all
          emerging authors who inspire to write and publish their articles with our worldwide availability
          on journal webpage.</p>
      </div>
    </div><br>
  </div>

  <div class="container">
    <div class="row content">
      <div class="col-sm-4">
        <img src="{{Asset("image/aims1.png")}}" alt="Placeholder Image" class="img-fluid">
      </div>   
      <div class="data col-sm-8">
        <h2 class="heading">Aims & Scope</h2>
        <p>BotScan is a peer-reviewed Open Access journal covering all areas of Biological
          sciences, launched in 2023. It is published 12 Issues (Monthly) by the KulDev Publication. The scope
          of journal is to assessment and publishing in all agricultural sciences, bacteriology, plant Sciences,
          plant taxonomy, crop science, applied zoology, entomology, protozoology, cell biology, tissue culture,
          economic zoology, vectors, experimental zoology, virology, animal taxonomy, infections, plant toxicology
          , plant and animal physiology, vertebrate zoology, microbiology, animal health, invertebrate zoology,
          helminthology, parasitology, biophysics, biotechnology, toxicology, apiculture, picisculture, bee
          keeping, fishery science, endocrinology, marine fishery, sea food, dairy science, animal husbandry,
          sericulture, livestock, limnology, marine animals and plant diversity and agricultural engineering.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row content">
      <div class="data">
        <h2 class="heading">Indexed and Abstracts</h2>
        <p>BotScan is indexed in the Indian-Journal Citation Index Centre (ICI), Google Scholar, CAB Abstracts,
          EBSCOhost, JournalSeek, ASEAN Citation Index (ACI), ROAD: the Directory of Open Access scholarly
          Resources, creative commons, crossref, open access and peer review.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mission</h5>
            <p class="card-text">We are committed to providing premium quality publications that create values for our
              peoples. We build diverse team and provide equal growth opportunity for all writers by creating positive
              environment, societal and economic difference for community.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vision</h5>
            <p class="card-text">To maintained sustainable writing growth through continuous innovation, market
              development and public relation while creating long-term value for all writers.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Values</h5>
            <p class="card-text">We believed in open communication and understand public needs, offers new publications
              exceed their expectation..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><br><br><br>

  <!-------editor cards----->
  <div class="container">
    <div>
      <h2 class="heading">Editorial Board</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        
        <div class="card h-100">
          <img src="{{Asset("image/profile.png")}}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Dr. DharmpalChokhobaWagh, M.Sc.Ph.D. <br>(Zoology & Fishery Science)</h5>
            <p class="card-text">Assistant Professor, Department of Zoology and Fishery Scinece, Millind College of
              Science, Nagsen, Aurangabad-431004, Maharashtra, India
              Email-milindscience.in; URL-http://milinscience.in/senior-college-faculties
              Contact +91 8668429590</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{Asset("image/profile.png")}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Dr. Sandeepsing Gaur, M.Sc.Ph.D. <br>(Chemical Science)</h5>
            <p class="card-text">Professor, Head, PG Department of Chemistry, SantRamdas Arts, Commerce and Science
              College, Ghansawangi, Jalna-423709, Maharashtra, IndiaEmail-santramascollege@yahoo.co.in;
              URL-http://www.srcgContact +91 8788338094.</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{Asset("image/profile.png")}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Dr. Vijay D. Suryawanshi, M.Sc.Ph.D. <br>(Zoology & Animal Science)</h5>
            <p class="card-text">Assistant Professor, PG Department of Zoology, SantRamdas Arts, Commerce and Science
              College, Ghansawangi, Jalna-423709, Maharashtra, India
              Email-santramascollege@yahoo.co.in; URL-http://www.srcg
              Contact +91 9765009491.</p>
          </div>        
        </div>
      </div>
    </div>
  
  </div>
  <div><br><br>
    <button type="button" class="button">view more</button>
  </div>

  <!---------Logos--------->

  <div>
    <h3 class="heading">Sponsors and Support</h3>
    <marquee style="font-family:verdana;">
    <div class="marqu">
        <img src="{{Asset("image/asean_c_i.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/cab_abstracts.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/creative_commons.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/crossref.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/doi.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/EBSCOHOST.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/embase.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/eng_village.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/google.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/journal_seek.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/open_access.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/perreview.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/public_knowledge_project.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/SRC.png")}}" alt="logo" width="200" height="100">
        <img src="{{Asset("image/INTER_STAND.png")}}" alt="logo" width="200" height="100">

        <!-- Add the rest of your logos -->

      </div>
    </marquee>
  </div>

  <!--<script src="{{Asset("js/script.js")}}"></script>-->


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