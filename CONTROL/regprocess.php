<?php
if (isset($_REQUEST['submit'])) {

    //getting the data//
    $uname = stripslashes($_REQUEST['username']);
    $firstname = stripslashes($_REQUEST['firstname']);
    $lastname = stripslashes($_REQUEST['lastname']);
    $email = stripslashes($_REQUEST['email']);
    $password = stripslashes($_REQUEST['password']);
    $repassword = stripslashes($_REQUEST['repassword']);

    if ($uname != '' && $firstname != '' && $lastname != '' && $email != '' && $password != '' && $repassword != '') {

        include_once('../MODEL/dbconn.php');
        // check if the username already exist//
        $sql = "SELECT * FROM users WHERE USERNAME='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $err_name = "<span class='error'>User Name already exist</span>";
            $has_error = true;
        } 
            // check for valid emails format//
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "<span class='error'>Please insert a valid email</span>";
            $has_error = true;
            }

            else if (!preg_match("#[0-9]+#", $password)) {
            $err_password= "<span class='error'>Password must include at least one (0-9,a-z,A-Z,Symbol)</span>";
            $has_error=true;
            } 
            
            // else if (!preg_match("#W+#", $password)) {
            // $err_password = "<span class='error'>Password must include at least one (0-9,a-z,A-Z,Symbol)</span>";
            // $has_error = true;
            // } 
            
            else if (!preg_match("#[A-Z]+#", $password)) {
            $err_password = "<span class='error'>Password must include at least one (0-9,a-z,A-Z,Symbol)</span>";
            $has_error = true;
            }

            else if ($password != $repassword) {
            $err_re_password = "<span class='error'>Password does not match</span>";
            $has_error = true;
                } 
                 
            else {

                // $password=md5($password);
                // $repassword=md5($repassword);
            $password = password_hash($password,  PASSWORD_DEFAULT);
            $repassword = password_hash($repassword, PASSWORD_DEFAULT);
                    //SQL Statement//
                    $sql = "INSERT INTO users (USERNAME, FIRSTNAME, LASTNAME, EMAIL, PASSWORD, REPASSWORD)
              VALUES('$uname', '$firstname','$lastname', '$email', '$password' , '$repassword' )";

                    //making connection

                    //creating the query
                    $qry = mysqli_query($conn, $sql);

                    if ($qry) {
                        header("Location:loginpage.php");
                    }
                }
            
        
    } else {
        $err_empty = "<span class='error'>Please fill all the fields</span>";
        $has_error = true;
    }
}
