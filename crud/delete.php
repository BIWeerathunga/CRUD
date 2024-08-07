<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM Users WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "User Deleted Successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "No ID provided for deletion.";
        }
    ?>
</body>
</html>