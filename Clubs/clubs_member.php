<?php
include 'connect.php';

//edit and delete option nai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> List </title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script src="https://kit.fontawesome.com/c68b4388d9.js" crossorigin="anonymous"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
  body{
    margin: 0;
            padding: 0;
            /* background-color: black;  */
            background-size: 100%;
            display: flex;
            background-image: url('../../connect/img/lu.jpg');
    background-repeat: no-repeat;
    background-size: cover;

  }
  
  /* .member-section{
    margin-top: 10px;
    
  } */
</style>




<body>
  

      <div class="container text-center">

        <p class="navbar-brand" style="margin: 5px; padding: 5px; font-family:Georgia, 'Times New Roman', Times, serif; color: white; font-weight: 600; font-size: 40px;">
        THE LIST OF CLUB MEMBERS</p>
            
        
          <div class="container-fluid member-section mx-3">
    

            <table class="table table-dark">
                <thead>
                  <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Batch</th>
                    <th scope="col">ID</th>
                    <th scope="col">Role</th>
                    
                  </tr>
                </thead>
                <tbody>

                <?php
                
                $sql = "SELECT * FROM clubs_member";
                $result = mysqli_query($con,$sql);

                if($result){
                  while($row = mysqli_fetch_assoc($result)){
                    
                    $Name=$row ['Name'];
                    $Department=$row ['Department'];
                    $Batch=$row ['Batch'];
                    $Id=$row ['Id'];
                    $Position=$row ['Position'];
                    $serial =$row['serial'];
                    $clubs =$row['clubs'];

                    echo '<tr>
        <td>'.$Name.'</td>
        <td>'.$Department.'</td>
        <td>'.$Batch.'</td>
        <td>'.$Id.'</td>
        <td>'.$Position.'</td>
       
      </tr>';

                  }
                }

                ?>


                </tbody>
              </table>

              


              <!-- <button type="button" class="btn btn-outline-primary"><a href="admin.php"> 
              Update</a></button> -->
              
              </div>

              </div>
              <!-- <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Are you Admin?!</h4>
  <p>Only an admin can update the members list.</p>
  <hr>
  <p class="mb-0">Press OK and enter the email and password to bring any changes in the list.</p>
</div> -->
</body>
</html>