<?php

if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $password = md5($password);
    // $password = password_hash($password,  PASSWORD_DEFAULT);
 
    //check if does exist any users with this credentials

    // $sql = "SELECT * FROM users WHERE USERNAME='$username' and PASSWORD='$password'";
    // require_once '../MODEL/dbconn.php';
    // $qry = mysqli_query($conn, $sql) or die("Login problem");
    // $result = mysqli_num_rows($qry);
    // if ($result == 1) {
    //     $_SESSION['username']="$username";
    //     header("Location:../homepage.php");
    // } else {
    //     $err_login = "<span class='error'>Incorrect login details</span>";
    //     $has_error = true;
    // }



    $sql = "SELECT * FROM users WHERE USERNAME='$username' ";
    require_once '../MODEL/dbconn.php';
    $qry = mysqli_query($conn, $sql) or die("Login problem");
    $result = mysqli_num_rows($qry);
     if ($result == 1){
        $row = mysqli_fetch_array($qry);
        $verify = password_verify($password, $row["PASSWORD"]);
        if ($verify) {
            $_SESSION['username'] = "$username";
            header("Location:../homepage.php");
        }
     }
            else{
                $err_login = "<span class='error'>Incorrect login details</span>";
                $has_error = true;
                }
}

?>