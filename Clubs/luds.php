<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUDC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  <style>

    .col1{
        width: 600px;
    }


    .col2{
        width: 700px;

    }

    .betala{
        height: 250px;
        width: 250px;
    }





  </style>




</head>

<body>

    <div class="container-fluid">

    <nav class="navbar navbar-inverse fixed-top navbar-expand-lg navbar-light mx-5">

        <p class="navbar-brand" style="margin: 5px; padding: 5px; font-family:Georgia, 'Times New Roman', Times, serif; color: black; font-weight: 600; font-size: 40px;">LUDS</p>
    
    </nav> 

        <h3 class="text-center mt-5 text-bold lh-base"> Welcome to <br> <span class="text-warning"> Leading University Debating Society </h3>
        

        <div class="row">

        <div class="col1 text-center mt-5" >
            <img src="images/debaters.jpg" alt="" style="border-radius: 20px;">
        </div>
        

        <div class="col2 mx-5 mt-5 w-40 p-0">
            <hr>
            <p class="text fs-5 fw-light">Are you passionate about expressing your ideas, crafting compelling arguments, and engaging in thought-provoking discussions?
            <br>
            Then the University Debate Club is the perfect place for you! We offer a dynamic platform for students to hone their debating skills, challenge their perspectives, and develop valuable life skills in a supportive and stimulating environment.
        </hr>
        <hr>

        </p>

            <a href="rentPage.php" class="btn btn-warning " style="color: rgb(6, 72, 6); border-radius: 30px; "> Want to Rent? </a>

        </div>


        <div class="row mt-5">

        <div class="col-md-12">
            <div class="row m-5 w-50">
                <h3 class="text-bold mt-3 text-warning">What We Do ?<br><span class="text-dark">Debate:</span></h3>
                
               
                <p>We participate in various debate formats, from formal parliamentary debates to impromptu speaking competitions. Our members gain experience in critical thinking, research, public speaking, and teamwork.</p>
                <h4>Workshops and Training:</h4>
                <p>We regularly host workshops and training sessions led by experienced debaters and coaches, helping members refine their skills and knowledge.</p>
                <h4>Social Events:</h4>
                <p>We foster a vibrant community through social events, movie nights, and team-building activities, creating lasting friendships and memories.</p>
            </div>
            </div>
            
            <div class="col w-25 p-3 text-center">

            <h3 class="text-center text-bold text-warning mt-5"> Have a look at our Community! 
            </h3>

            <hr>
            <img src="images/debate.png" class="betala" alt="">


            <a href="clubs_member.php" class="btn btn-warning mx-3" style="color: rgb(6, 72, 6);"> The List of Members</a>

            </div>

            

        </div>

    
        </div>

        <div class="caption mx-5 mt-5">
            <h2 style=" text-align: center; color: black margin-top: 30px;">Events </h2>
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
                        <img class="d-block w-100" src="images/luds3.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Concert at a Social Event</h5>
                            <p> 13 th August, 2019</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/luds2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Concert at a Social Event</h5>
                            <p> 13 th August, 2019</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/luds1.jpg" alt="Third slide">
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