<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .pro-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .parent {
      width: calc(100% / 5); /* Adjust this to control the number of items per row */
      padding: 5px;
      max-width: 200px; /* Set maximum width for cards */
    }

    .parent img {
      width: 100%; /* Ensure all images fill the container */
      height: 200px; /* Set fixed height for images */
      object-fit: cover; /* Maintain aspect ratio and cover container */
    }

    .parent .card {
      height: 100%; /* Set height to 100% to ensure all cards have the same height */
      text-align: center;
      display: flex;
      flex-direction: column;
    }

    .card-body {
      flex-grow: 1; /* Allow card body to grow within the container */
    }
  </style>
</head>
<body>
  <hr/>
  <h3 class="text-center"> You Can <span class="text-warning"> Hire </span> From  </h3>
  <hr/>

  <div class="pro-container p-4">
    <?php
      include 'config.php';
      $select_query = "SELECT * FROM `rent`";
      $result = mysqli_query($conn, $select_query);
      while ($row = mysqli_fetch_assoc($result)) {
        $imgData = explode("/", $row['image']);
        $imageName = end($imgData);
        echo '<div class="parent">';
        echo '
          <a href="detailProduct.php?serial=' . $row['serial'] . '" style="text-decoration: none;">
            <div class="card text-dark bg-light mb-4 shadow">
              <img src="rent_prod/' . $imageName . '" class="card-img-top img-fluid" alt="' . $row['prod_name'] . '">
              <div class="card-body">
                <h5 class="card-title">' . $row['prod_name'] . '</h5>
                <p class="price mt-2">' . $row['mobile'] . '</p>
                <div class="card-details">
                  <form action="productdetail.php" method="post">
                    <input type="hidden" name="cart" value="' . $row['prod_name'] . '">
                    <input type="hidden" name="quantity" value="1">
                  
                  </form>
                </div>
              </div>
            </div>
          </a>
        ';
        echo '</div>';
      }
    ?>
  </div>
</body>
</html>
