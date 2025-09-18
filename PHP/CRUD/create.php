<?php include "db.php"; ?>

<?php
if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Add New User</h2>
    <form method="POST">
        <input class="form-control mb-2" type="text" name="name" placeholder="Enter name" required>
        <input class="form-control mb-2" type="email" name="email" placeholder="Enter email" required>
        <input class="form-control mb-2" type="text" name="phone" placeholder="Enter phone">
        <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </form>
</body>
</html>
