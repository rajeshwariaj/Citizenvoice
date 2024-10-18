<?php 
require_once("includes/config.php");

if(!empty($_POST["aadhar_no"])) {
    $aadhar_number = $_POST["aadhar_no"];

    $result = mysqli_query($bd, "SELECT aadhar_no FROM users WHERE aadhar_no='$aadhar_no'");
    $count = mysqli_num_rows($result);

    if($count > 0) {
        echo "<span style='color:red'> Aadhar number already exists.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color:green'> Aadhar number available for Registration.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }
}
?>