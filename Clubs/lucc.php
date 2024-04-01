<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lucc</title>

   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lusc</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS (for carousel)-->
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
                background-color: rgba(30, 30, 112, 0.366);

            }

            /* .navbar {


                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

                
            } */

            h1 {
                margin: 0px 100px;
                margin-top: 200px;
            }

            .col1{
                width: 600px;
            }

            .col2{
                width: 700px;
            }
            p {
                margin: 10px 100px;

            }
            .pic{
                height: 70vh;
                width: 90vh;
                border-radius: 20px;
                margin-left: 50px;
                
            }
            

            .row1{
                width: 200vh;

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
                text-align: center;
            }
            
            
            
        </style>





    </head>

<body>
    <div class="container-fluid">

        <nav class="navbar fixed-top navbar-inverse navbar-expand-lg navbar-light py-3 text-start">
            <!-- <div class="container m-0"> -->
                <p class="navbar-brand"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 600; font-size: 40px;">
                    LUCC</p>
                
            <!-- </div> -->
        </nav>

        <!-- <div class="row row-cols-1 row-cols-md-3 g-5 m-5 events-section" style=" width: 85%; margin: auto;"> -->


            <div class="col ">
                <h1>Welcome to Leading University Computer Club!....</h1>
                <p class="text fs-5 fw-light lh-lg">This club is a student-run organization that brings together students of CSE department with a shared interest in computers, technology, and programming. They provide a valuable platform for students to: <span class="text-success fw-normal">
                Learn new skills, Network with peers, Get involved in projects and Have fun!</p>
            </div>

            <div class="col-md-6 mt-3">
            <a href="rentPage.php" class="btn btn-light " style="color: rgb(6, 72, 6); border-radius: 30px; margin-left:90px; "> Want to Rent? </a>
            </div>
        </div>

        <!-- <div class="col w-50 p-3 ml-3">
        <a href="rentPage.php" class="btn btn-outline-light fs-5"> You can Rent...</a>
        </div> -->
        

        <div class="row mt-5">

        <h3 class="text-center text-bold text-warning mt-5"> Have a look at our Community! 
        </h3>

            <hr>
            <div class="col1 mt-5 mx-5">

                <img src="images/computerLab.jpg" class="pic" alt="">
            </div>
                
            <div class="col2 mx-3 mt-3 ms-5 text-center">
                <p style="margin: 23px 76px;">
                <span class="text-bold fs-5 ms-5  "> Dive into the World of Tech? Join the Computer Club!    
                </span></p>
                
                <p class="fs-3 fw-light">
Are you passionate about technology? Do you yearn to explore the exciting world of computers and programming? Look no further than the University Computer Club! We offer a dynamic community for students of all experience levels to learn and unleash their inner tech wizards. <br> </p>

<a href="clubs_member.php" class="btn btn-warning mx-3 mt-3"> The List of Members</a>

</div>

        <div class="row1 lh-lg justify-content-md-center m-5">
            <p>
                <span class="mt-3 text-bold">What We Do??</span> <br>

<span class="text-bold">Workshops and Learning Sessions: </span>We host workshops and learning sessions on diverse topics like programming languages, web development, cybersecurity, hardware, and software. Whether you're a beginner coder or a seasoned programmer, there's always something new to learn and grow from. <br>
<span class="text-bold">Guest Lectures and Industry Talks:</span> We invite industry professionals and experts to share their knowledge and experiences, giving our members invaluable insights into the real-world applications of technology. <br>
<span class="text-bold">Hackathons and Project Development:</span> We participate in exciting hackathons and encourage members to develop their own projects, fostering creativity, problem-solving skills, and teamwork. <br>
<span class="text-bold">Gaming Tournaments and LAN Parties:</span> We host fun social events like gaming tournaments and LAN parties, providing a platform for members to connect, relax, and share their love for technology in a casual environment.</p>


                    
                    </div>
                
                
                
                
                </div>


            

<div class="col mx-5">


        <div class="row mt-5">

            <div class="card p-0" style=" width: 300px; height: 300px; background: white; overflow: hidden;">
                <img src="images/bit1.jpg" alt="" class="text-start"
                    style="width:100%; height:100%; z-index: 1; display:inline-block">
                <h6 class="card-subtitle py-0">Tech Storm</h6>
            </div>

            <div class="card p-0" style=" width: 300px; height: 300px; background: white; overflow: hidden;">
                <img src="images/bit2.jpg" alt=""
                    style=" width: 300px; height: 300px; z-index: 1;">
                <h6 class="card-subtitle py-0">Bit Fest</h6>
            </div>

            <div class="card p-0" style=" width: 300px; height: 300px; background: white; overflow: hidden;">
                <img src="images/bit3.jpg" alt=""
                    style=" width: 300px; height: 300px; z-index: 1;">
                <h6 class="card-subtitle py-0">CSE carnival</h6>
            </div>

        </div>

        <div class="caption mx-5 mt-5">
            <h2 style=" text-align: center; color: white">Events </h2>
        </div>

        <!-- carousel -->

        <div class="d-flex align-items-center justify-content-center w-100">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/bit1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Hackathon at Tech Storm</h5>
                            <p> 23 th November, 2022</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/bit2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>BitFest Valorant Tournament</h5>
                            <p> 12 th November, 2023</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/bit3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>BitFest Gaming Tournament</h5>
                            <p> 19 th February, 2023</p>
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


    </div>




</body>

</html>