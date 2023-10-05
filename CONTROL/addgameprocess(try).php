<?php 

if(isset ($_REQUEST['addgame'])){
    $title=$_REQUEST['title'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $description=$_REQUEST['description'];
    $players=$_REQUEST['players'];
    $date=$_REQUEST['date'];
    $time=$_REQUEST['time']; 
    $gender=$_REQUEST['gender'];

    if(empty($title && $address && $city && $description && $date && $time)){
         
         $err_empty_field="<span class='error'>All fields must be complied</span>";
            }

            else{

                if($players==10){

            include_once("../MODEL/dbconn.php");
            // $sql = "INSERT INTO fiveaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
            //  VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql2);
            // $qry2=mysqli_query($conn,$sql2);

            if ($qry ) {
                echo "data inserted";

            } else {
                echo "error";
            }

                }

                 else if($players==12){
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO sixaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);
            

            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }  
                 } else if ($players == 14) {
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO sevenaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);
     

            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }
        } else if ($players == 16) {
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO eightaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);

            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }
        } else if ($players == 18) {
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO nineaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);
 
            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }
        } else if ($players == 20) {
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO tenaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);

            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }
        } else if ($players == 22) {
            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO elevenaside (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";
            $sql2 = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);
            $qry2 = mysqli_query($conn, $sql2);

            if ($qry && $qry2) {
                echo "data inserted";
            } else {
                echo "error";
            }
        }
           
            }
        
}

?>