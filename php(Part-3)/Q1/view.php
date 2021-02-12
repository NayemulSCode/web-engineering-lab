<?php
require_once 'dbConnection.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        tr td {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">View Information</a></li>
        </ul>
    </nav>
    <div class="Container">
        <h2 align="center">View Stored Information</h2>
        <table border="1" style="border-collapse: collapse; width:50%; margin: auto;">
            <tr bgcolor="skyblue">
                <td>Sl#</td>
                <td>Name</td>
                <td>Hobbies</td>
                <td>Gender</td>
                <td>Religion</td>
                <td>Address</td>
                <td>Password</td>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_students";
            $query = mysqli_query($con, $sql);
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td style="text-align: left;"><?php echo $data['name']; ?></td>
                    <td style="text-align: left;"><?php echo $data['hobbies']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['religion']; ?></td>
                    <td style="text-align: left;"><?php echo $data['address']; ?></td>
                    <td style="text-align: left;"><?php echo $data['pass']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>