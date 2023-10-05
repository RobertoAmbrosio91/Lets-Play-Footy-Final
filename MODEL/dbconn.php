
<?php
    // DBconn order: host,username,password,databasename
    $conn= mysqli_connect("localhost","root","","LPF");
    //check connection
    if(mysqli_connect_errno()){
        echo "Cannot connect to MySQL";
    }
?>