<?php
include 'connect.php';

$Name = $Department = $Batch = $Id = $Position = $serial = '';

if (isset($_GET['serial'])) {
    $serial = $_GET['serial'];

    
    if ($con) {
        $query = "SELECT * FROM clubs_member WHERE serial = $serial";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $Name = $row['Name'];
            $Department = $row['Department'];
            $Batch = $row['Batch'];
            $club = $row['clubs'];
            $Id = $row['Id'];
            $Position = $row['Position'];
        } else {
            echo "Member not found.";
            exit;
        }
    } else {
        echo "Database connection not established.";
        exit;
    }
} else {
    echo "Invalid request. Member serial not provided.";
    exit;
}

if (isset($_POST['update'])) {
    
    $updatedName = mysqli_real_escape_string($con, $_POST['name']);
    $updatedDepartment = mysqli_real_escape_string($con, $_POST['department']);
    $updatedBatch = mysqli_real_escape_string($con, $_POST['batch']);
    $updatedId = mysqli_real_escape_string($con, $_POST['id']);
    $updatedPosition = mysqli_real_escape_string($con, $_POST['position']);
    $updatedClub = mysqli_real_escape_string($con, $_POST['club']);

    $updateQuery = "UPDATE clubs_member SET 
    name = '$updatedName', 
    Department = '$updatedDepartment', 
    Batch = '$updatedBatch', 
    Id = '$updatedId', 
    Position = '$updatedPosition', 
    clubs = '$updatedClub' 
    WHERE serial = $serial";



    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        header('location: List.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">

    <style>
       
    </style>
</head>

<body>

    <div class="contact-container mb-3 py-5 container">

        <form method="post">
            <div class="mb-3">
                <p class="text-center" style="font-size: 25px;"> Update Information </p>

                <div class="form-group mx-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $Name; ?>" required
                        placeholder="Enter your name">
                </div>

                <div class="form-group mx-3">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department"
                        value="<?php echo $Department; ?>" required placeholder="Enter the department name">
                </div>

                <div class="form-group mx-3">
                    <label for="batch">Batch</label>
                    <input type="text" class="form-control" id="batch" name="batch" value="<?php echo $Batch; ?>"
                        placeholder="Enter the batch number">
                </div>

                <div class="form-group mx-3">
                    <label for="batch">Clubs</label>
                    <input type="text" class="form-control" id="club" name="club" value="<?php echo $club; ?>"
                        placeholder="Enter clubs">
                </div>

                <div class="form-group mx-3">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $Id; ?>" required
                        placeholder="Enter the Id number">
                </div>

                <div class="form-group mx-3">
                    <label for="position">Position</label>
                    <select class="form-control rounded-5" id="position" name="position">
                        <option <?php echo ($Position == '') ? 'selected' : ''; ?>></option>
                        <option <?php echo ($Position == 'President') ? 'selected' : ''; ?>>President</option>
                        <option <?php echo ($Position == 'Vice President') ? 'selected' : ''; ?>>Vice President</option>
                        <option <?php echo ($Position == 'Secretary') ? 'selected' : ''; ?>>Secretary</option>
                        <option <?php echo ($Position == 'General Secretary') ? 'selected' : ''; ?>>General Secretary
                        </option>
                        <option <?php echo ($Position == 'Executive member') ? 'selected' : ''; ?>>Executive member
                        </option>
                        <option <?php echo ($Position == 'General Member') ? 'selected' : ''; ?>>General Member</option>
                        <option <?php echo ($Position == 'Treasurer') ? 'selected' : ''; ?>>Treasurer</option>
                    </select>
                </div>

                        
                


                <br>

                <button type="submit" class="btn btn-primary my-3" name="update">
                    Update &#8594;
                </button>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>