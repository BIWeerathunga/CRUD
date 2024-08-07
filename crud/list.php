<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php 
             $sql = "SELECT * FROM Users";
             $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>
                                <a href='update.php?id=" . $row["id"] . "'>Edit</a>
                                <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
                            </td>
                          </tr>";
                }
             } else {
                echo "<tr><td colspan='4'>No Users Found</td></tr>";
             }
        ?>
    </table>
</body>
</html>