<?php
include '../config/conn.php';
if(isset($_POST['Message']) && isset($_POST['Message']['name']) && isset($_POST['Message']['number'])){
    $name = $_POST['Message']['name'];
    $phone = $_POST['Message']['number'];
    // insert register_client table
    $sql = "INSERT INTO register_client (fullname, phone, status) VALUES ('$name', '$phone', 1)";
    if (mysqli_query($con, $sql)) {
        // return redirect to index.php
        header("Location: ../index.htm");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>