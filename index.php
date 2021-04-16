<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/taj.jpg" alt="Taj Mahal" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Taj Mahal</h3>
        <p>Agra, UP</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/akshardham1.jpg" alt="akshardham" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Akshardham Temple, New Delhi</h3>
        <p>BAPS Sanstha</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/tovp.jpg" alt="tovp" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Temple of Vedic Planetarium, Mayapur, WB</h3>
        <p>ISKCON Mayapur</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/ind1.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4">Incredible India</h2>
    <p class="py-5">Incredible India, is an Indian state-owned tourism agency, based in New delhi, India, founded by ministry of tourism for promote International Tourism campaign maintained by the Government of India since 2002, to promote tourism in India. "Incredible India" title was officially branded and promoted since 2002.[1] Ministry of Tourism functions as the nodal agency for the development of tourism in the country.
    </p>
    <a href="about.php" class="btn btn-success"> Check More</a>
    </div>
    
  </div>
</div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
         <img class="card-img-top" src="images/taj.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Popular Destinations</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
         <img class="card-img-top" src="images/tovp.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Spiritual Destinations</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">

        <div class="card" >
         <img class="card-img-top" src="images/red.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Heritage Destinations</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      
    </div>

  </div>


    
  </div>

</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/kashmir.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/lotustemple.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/hawamahal.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/redfort.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/taj.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/gateway.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bodhgaya.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/goldentemple.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/southindia.jpg" class="img-fluid pb-4">
      </div>
    </div>
    
  </div>

</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="mobile" name="mobile" autocomplete="off" class="form-control">
        
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>

</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">©Incredible India Limited</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>