<script>
    function disable() {
        document.getElementById('joinbtn').style.display = 'none';
    }

    function goLogin() {
        location.href = 'loginpage.php';

    }
</script>


<?php
if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username'];
    $sql = "SELECT * FROM games WHERE GAMEID='$id'";
    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($res)) {

$playerArr = array(
    $row['PLAYER1'], $row['PLAYER2'], $row['PLAYER3'], $row['PLAYER4'], $row['PLAYER5'], $row['PLAYER6'],
    $row['PLAYER7'], $row['PLAYER8'], $row['PLAYER9'], $row['PLAYER10'], $row['PLAYER11'], $row['PLAYER12'],
    $row['PLAYER13'], $row['PLAYER14'], $row['PLAYER15'], $row['PLAYER16'], $row['PLAYER17'], $row['PLAYER18'],
    $row['PLAYER19'], $row['PLAYER20'], $row['PLAYER21'], $row['PLAYER22']
);

if (in_array($uname, $playerArr)) { 
    echo ("Already in the game");?>
    <script>
        disable();
    </script>
    <?php
}
}

}
if (isset($_POST['join'])) {
    if (isset($_SESSION['username'])) {
        $uname = $_SESSION['username'];
        $sql = "SELECT * FROM games WHERE GAMEID='$id'";
        $res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($res)) {



            if ($row['PLAYER1'] == "Player") {
                $sql = "UPDATE games SET PLAYER1='$uname' WHERE GAMEID=$id";
                $qry = mysqli_query($conn, $sql);
            } else {
                if ($row['PLAYER2'] == "Player") {
                    $sql = "UPDATE games SET PLAYER2='$uname' WHERE GAMEID=$id";
                    $qry = mysqli_query($conn, $sql);
                } else {
                    if ($row['PLAYER3'] == "Player") {
                        $sql = "UPDATE games SET PLAYER3='$uname' WHERE GAMEID=$id";
                        $qry = mysqli_query($conn, $sql);
                    } else {
                        if ($row['PLAYER4'] == "Player") {
                            $sql = "UPDATE games SET PLAYER4='$uname' WHERE GAMEID=$id";
                            $qry = mysqli_query($conn, $sql);
                        } else {
                            if ($row['PLAYER5'] == "Player") {
                                $sql = "UPDATE games SET PLAYER5='$uname' WHERE GAMEID=$id";
                                $qry = mysqli_query($conn, $sql);
                            } else {
                                if ($row['PLAYER6'] == "Player") {
                                    $sql = "UPDATE games SET PLAYER6='$uname' WHERE GAMEID=$id";
                                    $qry = mysqli_query($conn, $sql);
                                } else {
                                    if ($row['PLAYER7'] == "Player") {
                                        $sql = "UPDATE games SET PLAYER7='$uname' WHERE GAMEID=$id";
                                        $qry = mysqli_query($conn, $sql);
                                    } else {
                                        if ($row['PLAYER8'] == "Player") {
                                            $sql = "UPDATE games SET PLAYER8='$uname' WHERE GAMEID=$id";
                                            $qry = mysqli_query($conn, $sql);
                                        } else {
                                            if ($row['PLAYER9'] == "Player") {
                                                $sql = "UPDATE games SET PLAYER9='$uname' WHERE GAMEID=$id";
                                                $qry = mysqli_query($conn, $sql);
                                            } else {
                                                if ($row['PLAYER10'] == "Player") {
                                                    $sql = "UPDATE games SET PLAYER10='$uname' WHERE GAMEID=$id";
                                                    $qry = mysqli_query($conn, $sql);
                                                } else {

                                                    if ($players == 10) {
                                                        echo "no more spots available for this game"; ?>
                                                        <script>
                                                            disable();
                                                        </script>
                                                        <?php
                                                        exit;
                                                    } else {
                                                        if ($row['PLAYER11'] == "Player") {
                                                            $sql = "UPDATE games SET PLAYER11='$uname' WHERE GAMEID=$id";
                                                            $qry = mysqli_query($conn, $sql);
                                                        } else {
                                                            if ($row['PLAYER12'] == "Player") {
                                                                $sql = "UPDATE games SET PLAYER12='$uname' WHERE GAMEID=$id";
                                                                $qry = mysqli_query($conn, $sql);
                                                            } else {
                                                                if ($players == 12) {
                                                                    echo "no more spots available for this game"; ?>
                                                                    <script>
                                                                        disable();
                                                                    </script>
                                                                    <?php
                                                                    exit;
                                                                } else {
                                                                    if ($row['PLAYER13'] == "Player") {
                                                                        $sql = "UPDATE games SET PLAYER13='$uname' WHERE GAMEID=$id";
                                                                        $qry = mysqli_query($conn, $sql);
                                                                    } else {
                                                                        if ($row['PLAYER14'] == "Player") {
                                                                            $sql = "UPDATE games SET PLAYER14='$uname' WHERE GAMEID=$id";
                                                                            $qry = mysqli_query($conn, $sql);
                                                                        } else {
                                                                            if ($players == 14) {
                                                                                echo "no more spots available for this game"; ?>
                                                                                <script>
                                                                                    disable();
                                                                                </script>
                                                                                <?php
                                                                                exit;
                                                                            } else {
                                                                                if ($row['PLAYER15'] == "Player") {
                                                                                    $sql = "UPDATE games SET PLAYER15='$uname' WHERE GAMEID=$id";
                                                                                    $qry = mysqli_query($conn, $sql);
                                                                                } else {
                                                                                    if ($row['PLAYER16'] == "Player") {
                                                                                        $sql = "UPDATE games SET PLAYER16='$uname' WHERE GAMEID=$id";
                                                                                        $qry = mysqli_query($conn, $sql);
                                                                                    } else {
                                                                                        if ($players == 16) {
                                                                                            echo "no more spots available for this game"; ?>
                                                                                            <script>
                                                                                                disable();
                                                                                            </script>
                                                                                            <?php
                                                                                            exit;
                                                                                        } else {
                                                                                            if ($row['PLAYER17'] == "Player") {
                                                                                                $sql = "UPDATE games SET PLAYER17='$uname' WHERE GAMEID=$id";
                                                                                                $qry = mysqli_query($conn, $sql);
                                                                                            } else {
                                                                                                if ($row['PLAYER18'] == "Player") {
                                                                                                    $sql = "UPDATE games SET PLAYER18='$uname' WHERE GAMEID=$id";
                                                                                                    $qry = mysqli_query($conn, $sql);
                                                                                                } else {
                                                                                                    if ($players == 18) {
                                                                                                        echo "no more spots available for this game"; ?>
                                                                                                        <script>
                                                                                                            disable();
                                                                                                        </script>
                                                                                                        <?php
                                                                                                        exit;
                                                                                                    } else {
                                                                                                        if (
                                                                                                            $row['PLAYER19'] == "Player"
                                                                                                        ) {
                                                                                                            $sql = "UPDATE games SET PLAYER19='$uname' WHERE GAMEID=$id";
                                                                                                            $qry = mysqli_query($conn, $sql);
                                                                                                        } else {
                                                                                                            if ($row['PLAYER20'] == "Player") {
                                                                                                                $sql = "UPDATE games SET PLAYER20='$uname' WHERE GAMEID=$id";
                                                                                                                $qry = mysqli_query($conn, $sql);
                                                                                                            } else {
                                                                                                                if ($players == 20) {
                                                                                                                    echo "no more spots available for this game"; ?>
                                                                                                                    <script>
                                                                                                                        disable();
                                                                                                                    </script>
                                                                                                                    <?php
                                                                                                                    exit;
                                                                                                                } else {
                                                                                                                    if ($row['PLAYER21'] == "Player") {
                                                                                                                        $sql = "UPDATE games SET PLAYER21='$uname' WHERE GAMEID=$id";
                                                                                                                        $qry = mysqli_query($conn, $sql);
                                                                                                                    } else {
                                                                                                                        if ($row['PLAYER22'] == "Player") {
                                                                                                                            $sql = "UPDATE games SET PLAYER22='$uname' WHERE GAMEID=$id";
                                                                                                                            $qry = mysqli_query($conn, $sql);
                                                                                                                        } else {
                                                                                                                            if ($players == 20) {
                                                                                                                                echo "no more spots available for this game"; ?>
                                                                                                                                <script>
                                                                                                                                    disable();
                                                                                                                                </script>
        <?php
                                                                                                                                exit;
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        ?>
        <script>
            goLogin();
        </script>
<?php
    }
}

?>