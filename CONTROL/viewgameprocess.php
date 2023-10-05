 <?php
    require_once '../MODEL/dbconn.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM games WHERE GAMEID='$id'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
    ?>
         <div class="col-sm-3">
     <?php
            echo $row['TITLE'];
            echo $row['ADDRESS'];
            echo $row['CITY'];
            echo $row['DESCRIPTION'];
            echo $row['PLAYERS'];
            echo $row['DATE'];
            echo $row['TIME'];

            $players = $row['PLAYERS'];
        }
    }
        ?>
         </div>

         <div class="col-sm-4">

             <?php
                if ($players == 10) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>

                 <?php



                    }
                }

                if ($players == 12) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>

                 <?php

                    }
                }

                if ($players == 14) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER13'] ?></label>
                     <button type="submit" class="player" id="player13">1</button>
                     <button type="submit" class="player" id="player14">1</button>
                     <label for="player1"><?php echo $row['PLAYER14'] ?></label>

                 <?php

                    }
                }

                if ($players == 16) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER13'] ?></label>
                     <button type="submit" class="player" id="player13">1</button>
                     <button type="submit" class="player" id="player14">1</button>
                     <label for="player1"><?php echo $row['PLAYER14'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER15'] ?></label>
                     <button type="submit" class="player" id="player15">1</button>
                     <button type="submit" class="player" id="player16">1</button>
                     <label for="player1"><?php echo $row['PLAYER16'] ?></label>

                 <?php

                    }
                }

                if ($players == 18) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER13'] ?></label>
                     <button type="submit" class="player" id="player13">1</button>
                     <button type="submit" class="player" id="player14">1</button>
                     <label for="player1"><?php echo $row['PLAYER14'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER15'] ?></label>
                     <button type="submit" class="player" id="player15">1</button>
                     <button type="submit" class="player" id="player16">1</button>
                     <label for="player1"><?php echo $row['PLAYER16'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER17'] ?></label>
                     <button type="submit" class="player" id="player17">1</button>
                     <button type="submit" class="player" id="player18">1</button>
                     <label for="player1"><?php echo $row['PLAYER18'] ?></label>

                 <?php

                    }
                }


                if ($players == 20) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER13'] ?></label>
                     <button type="submit" class="player" id="player13">1</button>
                     <button type="submit" class="player" id="player14">1</button>
                     <label for="player1"><?php echo $row['PLAYER14'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER15'] ?></label>
                     <button type="submit" class="player" id="player15">1</button>
                     <button type="submit" class="player" id="player16">1</button>
                     <label for="player1"><?php echo $row['PLAYER16'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER17'] ?></label>
                     <button type="submit" class="player" id="player17">1</button>
                     <button type="submit" class="player" id="player18">1</button>
                     <label for="player1"><?php echo $row['PLAYER18'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER19'] ?></label>
                     <button type="submit" class="player" id="player19">1</button>
                     <button type="submit" class="player" id="player20">1</button>
                     <label for="player1"><?php echo $row['PLAYER20'] ?></label>

                 <?php

                    }
                }

                if ($players == 22) {
                    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                     <label for="player1"><?php echo $row['PLAYER1'] ?></label>
                     <button type="submit" class="player" id="player1">1</button>
                     <button type="submit" class="player" id="player2">1</button>
                     <label for="player1"><?php echo $row['PLAYER2'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER3'] ?></label>
                     <button type="submit" class="player" id="player3">1</button>
                     <button type="submit" class="player" id="player4">1</button>
                     <label for="player1"><?php echo $row['PLAYER4'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER5'] ?></label>
                     <button type="submit" class="player" id="player5">1</button>
                     <button type="submit" class="player" id="player6">1</button>
                     <label for="player1"><?php echo $row['PLAYER6'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER7'] ?></label>
                     <button type="submit" class="player" id="player7">1</button>
                     <button type="submit" class="player" id="player8">1</button>
                     <label for="player1"><?php echo $row['PLAYER8'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER9'] ?></label>
                     <button type="submit" class="player" id="player9">1</button>
                     <button type="submit" class="player" id="player10">1</button>
                     <label for="player1"><?php echo $row['PLAYER10'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER11'] ?></label>
                     <button type="submit" class="player" id="player11">1</button>
                     <button type="submit" class="player" id="player12">1</button>
                     <label for="player1"><?php echo $row['PLAYER12'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER13'] ?></label>
                     <button type="submit" class="player" id="player13">1</button>
                     <button type="submit" class="player" id="player14">1</button>
                     <label for="player1"><?php echo $row['PLAYER14'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER15'] ?></label>
                     <button type="submit" class="player" id="player15">1</button>
                     <button type="submit" class="player" id="player16">1</button>
                     <label for="player1"><?php echo $row['PLAYER16'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER17'] ?></label>
                     <button type="submit" class="player" id="player17">1</button>
                     <button type="submit" class="player" id="player18">1</button>
                     <label for="player1"><?php echo $row['PLAYER18'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER19'] ?></label>
                     <button type="submit" class="player" id="player19">1</button>
                     <button type="submit" class="player" id="player20">1</button>
                     <label for="player1"><?php echo $row['PLAYER20'] ?></label>
                     <br>
                     <label for="player1"><?php echo $row['PLAYER21'] ?></label>
                     <button type="submit" class="player" id="player21">1</button>
                     <button type="submit" class="player" id="player22">1</button>
                     <label for="player1"><?php echo $row['PLAYER22'] ?></label>

             <?php

                    }
                }
                ?>

             <br><br>
             <form action="" method="POST">
                 <button type="submit" class="btn btn-success" id="joinbtn" name="join">Join the game</button>
             </form>

             <?php require_once "adduserinthegame.php";?>

             
         </div>