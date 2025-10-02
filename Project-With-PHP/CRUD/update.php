<?php 
include 'db.php';
$id = $_GET['updateid'];

$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

$name = $user['name'];
$email = $user['email'];
$phone = $user['phone'];


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Data updated successfully";
        header('location:index.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit User</h2>
    <form method="POST">
        <input class="form-control mb-2" type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <input class="form-control mb-2" type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <input class="form-control mb-2" type="text" name="phone" value="<?php echo $user['phone']; ?>">
        <button class="btn btn-primary" type="submit" name="update">Update</button>
    </form>
</body>
</html>