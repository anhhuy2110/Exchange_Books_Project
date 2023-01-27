<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../database.php";

    if(isset($_POST['sign_up'])&&($_POST['sign_up']=="Sign up"))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
        $num_row = mysqli_num_rows($result);

        $id = $num_row;
        $id = $id + 1;

        $sql = "INSERT INTO `student`(`STUDENT_ID`,`STUDENT_NAME`,`UNIVERSITY`,`STUDENT_EMAIL`,`STUDENT_PASSWORD`,`STUDENT_PHONE`,`STUDENT_ADDRESS`,`STUDENT_LOSTBOOK`) 
        VALUES('$id','$name','NULL','$email','$password','NULL','NULL','NULL')";

        if($conn->query($sql)==true)
        {
            echo "them thanh cong";
        }
        else
        {
            echo "Them khong thanh cong";
            echo mysqli_error($conn);
        }
        $conn->close();
    }
?>
<a href="index.php">Quay lai</a>
</body>
</html>