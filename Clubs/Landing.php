<?php
 include '../../connect/session/sessionfile.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="hire.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 1000px;

        }

        nav {
            background-color: transparent;

        }

        nav ul {
            text-align: center;
            padding: 0px 100px;
            margin: 0px 100px 100px 100px;
        }

        nav ul a {
            text-decoration: none;
            margin: 0 18px;
        }

        .banner-section {
            background: url('images/default.jpg') no-repeat;
            background-color: rgba(0, 0, 0, 0.9);
            background-size: cover;
            background-position: center;
            text-align: center;

            height: 90vh;

            position: relative;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
            padding: 25px 20px;
        }

        .textBox {
            border-radius: 10px;
            border: 2px;
            height: 55px;
            width: 75%;
            box-shadow: 10px 20px 80px 15px rgb(0, 0, 0);
            background-color: #e9e9e9;
            color: rgb(237, 232, 232);
        }


        button {
            border-radius: 10px;
            height: 50px;
            width: 100px;
            font-size: large;
            font-weight: 100px;
            color: white;
            font-size: 20px;
            font-weight: 60px;
            border: none;
            transition-duration: 0.4s;
            display: inline-block;
        }

        button:hover {
            background-color: #e9e9e9;
            color: #e9e9e9;
        }

        .btn {
            border: 2px solid rgb(238, 238, 44);
            color: rgb(238, 238, 44);
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 20%;
            margin: auto;
            border: 2px solid white;
        }

        .card:hover {
            box-shadow: 0 8px 16px 5px rgba(0, 0, 0, 0.5);
        }


        img {
            position: relative;

        }

        .card-subtitle {
            position: absolute;
            color: white;
            bottom: 20px;
            z-index: 1;
            padding: 4%;
            margin-left: 31%;
        }

        .categories-section {
            width: 85%;
            margin: auto;
        }

        nav {
            position: sticky;
        }

        .choose {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

        }


        @media screen and (min-width: 200px) {

            .image-class {
                height: 40px;
                width: 40px;


            }
        }

        @media screen and (max-width: 1100px) {

            .media-btn {
                margin-top: 20px;
                width: 40%;


            }
        }
    </style>


</head>

<body>



    <div class="banner-section">
        <div class="overlay">
            

            <div class="container-fluid">
            <h1 style="margin-bottom: 40px; margin-top: 150px; font-weight: 100px; color: azure;">Dive into the Vibrant World of Extracurricular Activities!</h1>
            <p style="color: azure;
            margin-bottom: 50px; font-size: 17px; font-weight: bold;">University is more than lectures and exams. Extracurricular activities are transformative, offering growth, skills, and a vibrant social tapestry. Dive in, join clubs, discover hidden talents, and paint your university experience with passion, skill, and friendship. Start by attending a club fair, chatting with members, and embracing the exciting world that awaits! <br>
            
            <span class="text-warning"> Let the extracurricular adventure begin! </span> </p>
            </div>

            <!-- <div class="container-fluid col-md-6">
                <form action="productpage.php"  method="post">
                             

                        <input type="search" class="form-control"  placeholder=" &#128269 Search" name="search"/>
                        <button type="submit" class="media-btn my-2 btn btn_primary btn-outline-success">Search</button>

                   
                </form>
            </div>
             -->
        </div>
    </div>
    </div>

    <div class="text-center py-5 " style="background-color: white;">
        <p style="font-size: x-large; font-style: oblique; font-family: Georgia, 'Times New Roman', Times, serif;"> Find
            out <br> Most popular categories</p>
       

        <div class="row row-cols-1 row-cols-md-3 g-5 categories-section">
            <div class="col">

            <a href="lucc.php">
                <div class="card" style="width: 300px; height: 200px;" >
                    <img src="images/computer.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                    <h6 class="card-subtitle py-0"
                        style="color: black; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Computer club</h6>
                </div>
                </a>

            </div>
            <div class="col">

            <a href="Banned.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images/band.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                    <h6 class="card-subtitle p-0"
                        style="color: black;font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Music club</h6>
                </div>
                </a>

            </div>
            <div class="col">

            <a href="lusc.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images/team.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                <h6 class="card-subtitle py-0"
                        style="color: black; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Sports club</h6>
                        
                </div>
                </a>
            </div>

            <div class="col">

            <a href="lups.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images/photograph.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                    <h6 class="card-subtitle"
                        style="color: black; margin-left:70px; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Photography Club</h6>
                        
                </div>
                </a>
            </div>

            <div class="col">

            <a href="luds.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images/meeting.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                    <h6 class="card-subtitle py-0"
                        style="color: black; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Debate club</h6>
                        
                </div>
                </a>
            </div>

            <div class="col">

            <a href="culturalclub.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images/masks.png" alt="" class="img mt-3 " style=" width:40%; z-index: 1;
                     border-radius: 5px;  margin-left: 88px; ">
                    <h6 class="card-subtitle py-0"
                        style="color: black; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Cultural club</h6>
                        
                </div>
                </a>
            </div>

            <!-- 
            <a href="clubs/culturalclub.php">
                <div class="card" style="width: 300px; height: 200px; ">
                    <img src="images1/culturalVector.jpg" alt="" style="width:70%; z-index: 1;
                     border-radius: 5px;  margin-left: 40px; ">
                    <h6 class="card-subtitle py-0"
                        style="color: black; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif; z-index: 1;">
                        Cultural club </h6>
                        
                </div>
                </a> -->

        </div>



        <div class="container mt-5 col-xl-6">
            <p style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;"> Why
                <br> Choose us ?
            </p>

            <div class="choose">
                <div class="card" style="width: 70px; height: 70px; ">
                    <img src="images/time-icon.jpg" alt="" style="margin-left: 3px; height: 50px; width: 60px;">
                    <h6 class="Saves time" style="font-size: 10px; margin-top: 25px; "> Save your time </h6>
                </div>

                <div class="card" style="width: 70px; height: 70px; ">
                    <img src="images/brand-engage.jpg" alt="" style="margin-left: 3px; height: 50px; width: 60px;">
                    <h6 class="Saves time" style="font-size: 10px; margin-top: 25px; "> Engage with people </h6>
                </div>

                <div class="card" style="width: 70px; height: 70px; ">
                    <img src="images/help.jpg" alt=""
                        style="margin-left: 3px;margin-top: 3px; height: 50px; width: 60px;">
                    <h6 class="Saves time" style="font-size: 10px; margin-top: 25px; "> Get or take help </h6>
                </div>
            </div>
            <!-- <div class="d-flex flex-wrap">
                <div class="col mt-3 p-3 mx-4">
                    <img class="image-class col-lg-6" src="images/time-icon.jpg" alt="">

                    <p class="col-lg-6 mx-5 mt-2">Save Time</p>
                </div>
                <div class="col mt-3 p-3 mx-4">
                    <img class="image-class col-lg-6"  src="images/brand-engage.jpg" alt="">

                    <p class="col-lg-6 mx-5 mt-2 px-0">c</p>
                </div>
                <div class="col mt-3 p-3 mx-4">
                    <img class="image-class col-lg-6"  src="images/help.jpg" alt="">

                    <p class="col-lg-6 mx-5 mt-2">help your mates</p>
                </div>
            </div> -->
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>