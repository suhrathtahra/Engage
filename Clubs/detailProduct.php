<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Details</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0vCgeZ/QDbs2zA6vEWpWSWy0FvTVvPeJsfhlpJn2E5KMW+KAgf2Xn0oxN7btr5L" crossorigin="anonymous">
<style>
 
    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-content {
        text-align: center;
    }
  
    .card-img {
        width: 300px;
        height: 300px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card-container">
                <div class="card">
                    <div class="card-content p-3">
                        <?php
                      
                        include 'config.php';

                        if(isset($_GET['serial'])){
                            $serial = $_GET['serial'];

                           
                            $fetchQuery = "SELECT * FROM rent WHERE serial = '$serial'";

                           
                            $result = mysqli_query($conn, $fetchQuery);

                            if(mysqli_num_rows($result) > 0) {
                                // Fetch the data
                                $arraydata = mysqli_fetch_array($result);
                            
                                echo "<h2 class='card-title '>" . $arraydata['prod_name'] . "</h2>";
                                echo "<img src='" . $arraydata['image'] . "' alt='Product Image' class='card-img'><br>";
                                echo "<h1 class='card-text'>Call at - " . $arraydata['mobile'] . "</h1>";
                                echo "<h2 class=' card-text'>" . $arraydata['details'] . "</h2>"; 
                                
                            } else {
                                echo "<p class='card-text'>Product not found.</p>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ON9jiYLzlS+9p6a28I8u0lPwy6nGyn/DONyoQDvCSj4VnJ+Ra4+76R6Xr69vyAy6" crossorigin="anonymous"></script>
</body>
</html>
