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

            include_once("../MODEL/dbconn.php");
            $sql = "INSERT INTO games (TITLE, ADDRESS, CITY, DESCRIPTION, PLAYERS , DATE, TIME, GENDER )
             VALUES ('$title', '$address', '$city', '$description', '$players', '$date', '$time', '$gender') ";

            $qry = mysqli_query($conn, $sql);

            if ($qry ) {
                echo "data inserted";

            } else {
                echo "error";
            }

                }
            }

                ?>