<?php
include "db.php";

if (isset($_GET['deleteid'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM users WHERE id=$id";
     $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
   } else {
       echo "No ID provided.";
   }
?>
