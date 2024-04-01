<?php
include 'connect.php';

//include 'member.php';

if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Department=$_POST['department'];
    $Batch=$_POST['batch'];
    $Id=$_POST['id'];
    $Position=$_POST['position'];  
    $club=$_POST['club'];  

    $sql="INSERT INTO clubs_member (name, department, batch, id, position,clubs) VALUES ('$Name', '$Department', '$Batch', '$Id', '$Position','$club')"; 

    $result=mysqli_query($con, $sql);

    if($result){
      header('location: clubs_member.php');
    }
    else{
      die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('images/yellow-halftone-background_.jpg');
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .form-label{

      font-size: 15px;
      margin-top: 10px;

    }


    .contact-container {
      width: 600px;
      height: auto;
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-container label {
      font-weight: bold;
    }

    .contact-container input[type="text"]{
      width: 100%;
      padding: 10px;
      border-radius: 30px; 
      border: 1px solid #ccc;
    }

    .contact-container .submit {
      display: block;
      width: 60%;
      padding: 10px;
      margin-left: 100px;
      background-color: rgb(234, 234, 118);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      border-radius: 30px;
    }

    .contact-container .submit:hover {
      background-color: black;
      color: rgb(234, 234, 118);
    }


  </style>

</head>

<body>

  <div class="contact-container mb-3 py-5">

    <form method="post">
      <div class="mb-3">
        <p class="text-center" style="font-size: 25px;">Information of the member</p>

        <label class="form-label mx-3">Full Name</label>
        <input type="Text" class="form-control" name="name" required placeholder="Enter your name">

        <label class="form-label mx-3">Department</label>
<select name="position" class="form-control rounded-5">
  <option selected></option>
  <option>CSE</option>
  <option>BBA</option>
  <option>LAW</option>
  <option>EEE</option>
  <option>CEE</option>
  <option>THM</option>
  <option>ARCH</option>
  <option>ENG</option>
</select>


        <label class="form-label mx-3">Batch</label>
        <input type="Text" class="form-control" name="batch" placeholder="Enter the batch number">

        <label class="form-label mx-3">ID</label>
        <input type="Text" class="form-control" name="id" required placeholder="Enter the Id number">

        <label class="form-label mx-3">club</label>
        <input type="Text" class="form-control" name="club" required placeholder="Enter the Club">

        <label class="form-label mx-3">Position</label>
<select name="department" class="form-control rounded-5">
  

  <option>President</option>
  <option>Vice President</option>
  <option>Secretary</option>
  <option>General Secretary</option>
  <option>Treasurer</option>
  <option>Executive </option>
  <option>General Member</option>
</select>

  <br>
  <script>
    let dropdownList = document.getElementById('select_box');
    dropdownList.onchange = (ev) =>{
      console.log("Selected value is: " + dropdownList.value);
    }

  </script>
        
        
        
        <button href="clubs_member.php" type="submit" class="submit btn-submit my-3" name="submit"> 
        Submit &#8594;
        </button>
        


      </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>     
</body>

</html>