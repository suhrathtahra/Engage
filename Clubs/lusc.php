<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lusc</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100%;

      
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 20%;
      margin: auto;
      border: 10px solid rgb(234, 234, 118);
    }

    .card:hover {
      box-shadow: 0 8px 16px 5px rgba(0, 0, 0, 0.5);
    }

    .card-subtitle {
      position: absolute;
      color: white;
      bottom: 20px;
      z-index: 1;
      padding: 4%;
      font-size: 20px;
    }
    
    



  </style>


</head>

<body>
  <div class="container-fluid">

    <nav class="navbar navbar-inverse fixed-top navbar-expand-lg navbar-light py-3"
      style="background:rgb(234, 234, 118) ;">
      <div class="container">
        <img src="images/lusc.jpg" style="height: 70px; width: 80px; border-radius: 40px;" alt="">
        <p class="navbar-brand"
          style="margin: 5px; padding: 5px; font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 600; font-size: 40px;">
          LUSC</p>
      </div>
    </nav>

    <div class="row hero-section"
      style="height: 380px; background: rgb(234, 234, 118); margin-top: 60px; padding: 0 7%; box-shadow: 0px 0px 5px 3px #cfcfcf;">

      <div class="col" style="width: 400px; margin-top: 100px ; font-size: 25px; font-family: Georgia, serif;">
        <p style="margin-left: 90px;"> Welcome to <br> </p>
          <p> Leading University Sports Club! <br> SPORTS! FUN! COMMUNITY! </p>
          <a href="rentPage.php" class="btn btn-outline-success mx-5" style="color: rgb(6, 72, 6); border-radius: 30px; "> RENT FROM HERE </a>
      </div>

      <div class="col">
        <img src="images/—Pngtree—flat man soccer player illustration_7361559.png" style="height: 480px;" alt="">
      </div>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-5 m-5 events-section" style=" width: 85%; margin: auto;">
        
      <div class="col">
      <div class="card" href="" style=" width: 250px; height: 300px; background: rgb(234, 234, 118); overflow: hidden;">
        <img src="images/WhatsApp Image 2023-09-10 at 12.49.57 AM.jpeg" alt="" style="width:100%; z-index: 1; border-radius: 5px; filter: brightness(50%); ">
        <h6 class="card-subtitle py-0">Football Tournament</h6>
      </div>

      <div class="card" style="width: 250px; margin-top: 50px; height: 300px; background: rgb(234, 234, 119) ;">
        <img src="images/futsal.jpg" alt="" style="width:100%; height: 100%; z-index: 1; border-radius: 5px; filter: brightness(50%); ">
        <h6 class="card-subtitle py-0">Futsal Tournament</h6>
      </div>
    </div>

    <div class="col" style="margin-top: 280px;">
    <div class="card" style="width: 250px; margin-left: 30px; height: 300px; background: rgb(234, 234, 118) ;">
      <img src="images/femalesports.jpeg" alt="" style="width:100%; height: 100%; z-index: 1; border-radius: 5px; filter: brightness(50%); ">
      <h6 class="card-subtitle py-0">Cricket match</h6>

      </div>
      </div>


    <div class="col" style="margin-top: 250px; font-weight: 400;">
      <h1>About this club....</h1>
      <p>University life isn't just about hitting the books. It's about stepping outside your comfort zone and exploring new passions and what better way there can be to do that than by joining a university sports club? <br> These vibrant communities offer a wealth of benefits. These events are a fantastic way to unwind after a tough training session, bond with your teammates, and create memories that will last a lifetime. So, lace up your shoes, grab your gym bag, and take the plunge into the world of university sports clubs. It's an adventure waiting to happen, one that promises not just physical well-being but also a vibrant social life, lasting friendships, and unforgettable memories.</p>

      <a href="clubs_member.php" class="btn btn-warning mt-3 "> List of Members </a>

    </div>
    

  </div>


  <div class="caption text-warning">
            <h2 style="font-size: 35px; font-weight: bold; text-align: center; margin-top: 20px;"> Have a look at our Events! </h2>
        </div>

        <div class="d-flex align-items-center justify-content-center w-100">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="images/WhatsApp Image 2023-09-10 at 12.49.57 AM.jpeg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Football Tournament</h5>
                            <p> 13 th August, 2019</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/femalesports.jpeg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Cricket Match for female</h5>
                            <p> 4 th September, 2022</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/futsal.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Futsal Tournament</h5>
                            <p> 29 th May, 2022</p>
                        </div>
                    </div>
                </div>

                
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

  </div>

</body>

</html>