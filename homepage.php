<?php
session_start();
require_once 'VIEW/head.php';
require_once 'VIEW/homepheader.php';

?>



<div class="container-fluid">

    <div class="row landimgrow">
        <div class="col-sm-4 colText">
            <h1>Play Football <br>anywere at any time</h1>
        </div>

        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <section class="btnsection">
                <button class=" btn btn-mg rounded-pill nav-btn homebtn " type="submit">Login</button>
                <button class=" btn btn-mg rounded-pill nav-btn homebtn " type="submit">Find a Game</button>
            </section>
        </div>

    </div>

    <div class="row">

        <?php

        include_once "MODEL/dbconn.php";

        // $sql = "SELECT users.USERID, users.USERNAME, users.FIRSTNAME, users.LASTNAME, users.EMAIL, users.PASSWORD, users.REPASSWORD, games.GAMEID, games.TITLE, games.ADDRESS, games.CITY, games.DESCRIPTION, games.PLAYERS, games.DATE, games.TIME, games.GENDER, games.PLAYER1, games.PLAYER2, games.PLAYER3, games.PLAYER4, games.PLAYER5, games.PLAYER6, games.PLAYER7, games.PLAYER8,games.PLAYER9, games.PLAYER10, games.PLAYER11, games.PLAYER12, games.PLAYER13, games.PLAYER14, games.PLAYER15, games.PLAYER16, games.PLAYER17, games.PLAYER18, games.PLAYER19, games.PLAYER20, games.PLAYER21, games.PLAYER22 FROM users JOIN games ON users.USERID=games.GAMEID2  " ;
        $sql="SELECT * FROM games";
        $qry = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($qry)) {
        ?>
            <a href="VIEW/viewgame.php?id=<?php echo $row['GAMEID']?>"><div class="col-sm-12">
                <?php

                echo $row['TITLE'];
                echo $row['ADDRESS'];
                echo $row['CITY'];
                echo $row['DESCRIPTION'];
                echo $row['PLAYERS'];
                echo $row['DATE'];
                echo $row['TIME'];
                
        }

            ?>
            </div></a>
    </div>

</div>


</body>

</html>