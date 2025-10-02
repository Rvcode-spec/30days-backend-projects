<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary my-5">
            <a href="create.php" class="text-light text-decoration-none">Add User</a>
        </button>
        
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $address = $row['address'];

                        echo '<tr class="table-light">
                                <th scope="row">'.$id.'</th>
                                <td class="text-success">'.$name.'</td>
                                <td class="text-info">'.$email.'</td>
                                <td class="text-danger">'.$phone.'</td>
                                <td class="text-warning">'.$address.'</td>
                                <td>
                                    <a href="update.php?updateid='.$id.'" class="btn btn-sm btn-primary">Update</a>
                                    <a href="delete.php?id='.$id.'" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                              </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
