<?php
require_once 'dbConnection.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="view.php">View Information</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_POST['submit'])) {
        $studentName = $_POST['studentName'];
        $hobbies = $_POST['hobbies'];
        $newHobbies = implode(",", $hobbies);
        $gender = $_POST['gender'];
        $religious = $_POST['religious'];
        $address = $_POST['address'];
        $pass = $_POST['pass'];

        if (empty($studentName)) {
            echo "Field is Empty";
        } else {
            $query = "INSERT	INTO	tbl_students	(name,	hobbies,	gender,	religion,	address,	pass) VALUES('$studentName','$newHobbies','$gender','$religious','$address','$pass')";
            $sql = mysqli_query($con, $query);
            if ($sql) {
                echo "Save Successfully";
            } else {
                echo "Save Not Successfully";
            }
        }
    }
    ?>
    <div class="Container">
        <fieldset>
            <legend>Add Student Information</legend>
            <form method="post">
                <table>
                    <tr>
                        <td> Student Name </td>
                        <td> : </td>
                        <td> <input type="text" name="studentName" /> </td>
                    </tr>
                    <tr>
                        <td> Hobbies </td>
                        <td> : </td>
                        <td>
                            <input type="checkbox" name="hobbies[]" value="Reading">Reading
                            <input type="checkbox" name="hobbies[]" value="Coding">Coding
                            <input type="checkbox" name="hobbies[]" value="Gaming">Gaming
                        </td>
                    </tr>
                    <tr>
                        <td> Gender </td>
                        <td> : </td>
                        <td>
                            <input type="radio" name="gender" value="Male" />Male
                            <input type="radio" name="gender" value="Female" />Female
                        </td>
                    </tr>
                    <tr>
                        <td>Religious</td>
                        <td> : </td>
                        <td>
                            <select name="religious">
                                <option selected="1" disabled="1">Choice </option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> Address </td>
                        <td> : </td>
                        <td> <textarea name="address"></textarea></td>
                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> : </td>
                        <td> <input type="password" name="pass" /> </td>
                    </tr>
                    <tr>
                        <td colspan="3"> <input type="checkbox" name="" value=""> I accept all this information. </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="submit" value="Submit" /> </td>
                        <td> <input type="reset" name="reset" value="Reset" /> </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>