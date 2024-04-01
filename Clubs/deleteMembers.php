<?php
include 'connect.php';

if(isset($_GET['serial'])) {
    $serial = $_GET['serial'];
    
    if ($con) {
        $deleteQuery = "DELETE FROM clubs_member WHERE serial = $serial";
        $deleteResult = mysqli_query($con, $deleteQuery);

        if ($deleteResult) {
            header('location: list.php');
            exit;
        } else {
            die(mysqli_error($con));
        }
    } else {
        echo "Database connection not established.";
        exit;
    }
} else {
    echo "Invalid request. Member serial not provided.";
    exit;
}
?>
