<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<h2>Create User</h2>
    <form action="index.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Create">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
            if($conn->query($sql) === TRUE){
                echo "New User Created Successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
</body>
</html>