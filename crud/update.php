<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Update User</h2>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        }

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
            if($conn->query($sql) === TRUE){
                echo "User Update Successful";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>