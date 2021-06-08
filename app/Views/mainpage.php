<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Carousel Template · Bootstrap v5.0</title>



  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/carousel') ?>/carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top p-md-3 bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="img-fluid" style="height: 50px; width: 100px" src="<?php echo base_url('assets/img/cpitclogo5.jpg') ?>" alt="cpitclogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" src="<?php echo base_url('assets/img/projectloco.jpg') ?>" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Project LoCo</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <h1>The Founders</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo base_url('assets/img/reytan.jpg') ?>">

          <h2>Reynaldo Tan</h2>
          <h3>C.E.O.</h3>
          <p>Innovative business development experience from product conceptualization, costing and implementation 1983 up to present Systems designer particularly for non-traditional, revolutionar & Challenging I.T. solutions. One of the pioneers of machine-to-machine implementations, and now advocate of IOT/ IOE Over 20 years experience in POS/Credit Card terminal, payment gateway full cycle solutions</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo base_url('assets/img/ronald.jpg') ?>">
          <h2>Ronald Balbido</h2>
          <h3>C.I.O.</h3>
          <p>Experience is diverse in both breadth and depth. He has held leadership positions in engineering, direct and indirect sales, sales operations, marketing, customer care, international operations, product management and strategic planning.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo base_url('assets/img/nino.jpg') ?>">

          <h2>Engr. Ginelou Niño T. Garzon</h2>
          <h3>C.O.O.</h3>
          <p>Experience is diverse in both breadth and depth. He has held leadership positions in engineering, direct and indirect sales, sales operations, marketing, customer care, international operations, product management and strategic planning.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo base_url('assets/img/vin.jpg') ?>">

          <h2>Marvin G. Lucas</h2>
          <h3>C.F.O.</h3>
          <p>Known for building high class teams, developing model leaders, and having a passion for excellence with customers and constituents alike.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          
        </div>
      </div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Our Mission</h2>
          <p class="lead">Our mission is to deliver infrastructure solutions which exceed customer expectations for speed, performance and value.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo base_url('assets/img/handgestures.jpg') ?>">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Our Vision</span></h2>
          <p class="lead">Our vision is to lead the way to an intelligent and connected digital world.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <p><h2 class="featurette-heading">Our Four Process <span class="text-muted">Pillars</span></h2></p>

          <h3>Design</h3>
          <p class="lead">Working closely with you, we design and plan a solution which is tailored to your objectives, deadlines and budget.</p>

          <h3>Build</h3>
          <p class="lead">Our team of experts quickly installs, integrate, configure and activate new systems to increase capacity and ensure seamless network operations.</p>

          <h3>Maintain</h3>
          <p class="lead">With our experienced teams on hand at short notice, we prevent lengthy infrastructure downtime by quickly identifying and overcoming faults.</p>

          <h3>Test</h3>
          <p class="lead">Our state-of-the-art testing equipment enables us to accurately monitor measure and optimize the performance of your equipment, systems and networks.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>


  <script src="<?php echo base_url() ?>/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>