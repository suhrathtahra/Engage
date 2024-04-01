<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Banned Community</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <style>
        .navbar {
            background-repeat: no-repeat;
            background-size: cover;

        }


        body {
            margin: 0;
            padding: 0;
            background-color: black;
            background-image: url(images/B1.jpg);
            background-size: contain;
            display: flex;
            background-repeat: no-repeat;
            height: 100vh;


        }


        .col1 {
            height: 150vh;

        }

        .col1 {

            margin-right: 100px;
        }

        /* .hero-section{

        width: 200%;  
        background-image: url(images/B1.jpg); 
        background-size: 100% 100%; 
        display: flex; 
        background-repeat: no-repeat;
        box-shadow: 0px 0px 5px 3px #dd5b5b;
    } */

        /* .caption {
            color: white;
            height: 160px;
            width: 230%;



        } */
    </style>




</head>

<body>

    <header>
        <div>
            <nav class="navbar navbar-inverse fixed-top navbar-expand-lg navbar-light mx-5" style="color: black;">

                <img src="images/bannedLogo.jpg" style="height: 100px; width: 100px; border-radius: 40px;" alt="">
                <p class="navbar-brand" style="margin: 5px; padding: 5px; font-family:Georgia, 'Times New Roman', Times, serif; color: white; font-weight: 600; font-size: 40px;">
                    The Banned Community</p>
                <div class="collapse navbar-collapse justify-content-end">
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="list.php">Members List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light" href="#">Login or Signup</a>
                        </li>
                    </ul> -->
                </div>

            </nav>
        </div>

    </header>
    <div class="container mt-2">

        <div class="d-flex justify-content-end mt-5 pt-5 me-3">
            <div class="col1 mt-5 pt-3" style="color: white">

                <p style="font-size: 40px; font-weight: bold;"> Welcome to <br> </p>
                <p style="font-size: 35px; font-weight: bold; color: red;">The Banned Community <br><span style="font-size: 20px; color:tomato"> Largest Musical club of Leading University
                    </span></p>

                <a href="rentPage.php" class="btn btn-danger ">You can Hire?</a>

                <a href="clubs_member.php" class="btn btn-warning mx-3 "> List of Members </a>

            </div>
        </div>



        <div class="caption mx-5">
            <h2 style=" text-align: center; margin-top: 20px; color: white">Events </h2>
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
                        <img class="d-block w-100" src="images/bannedEvents.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Concert at a Social Event</h5>
                            <p> 13 th August, 2019</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/bannedEvents2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Concert at a Social Event</h5>
                            <p> 13 th August, 2019</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/bannedEvents3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Concert at a Social Event</h5>
                            <p> 13 th August, 2019</p>
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