<body>

    <header>

        <nav class=" mynav navbar navbar-expand-lg ">
            <a class="navbar-brand" href="../homepage.php"><img src="../IMAGES/logo250.png" alt="" style="width: 70px; height:70px; margin-top:-20px;margin-bottom:-20px;margin-left:20px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link" href="../homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games
                        </a>
                    </li>

                    <?php
                    if (!empty($_SESSION['username'])) {
                    ?>

                        <li class="nav-item dropdown">
                            <?php echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                $_SESSION[username]
                            </a>"
                            ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">My Games</a>
                                <a class="dropdown-item" href="addgame.php">Add a Game</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../CONTROL/logoutprocess.php">Log Out
                                </a>
                            </div>
                        </li>


                    <?php
                    }

                    ?>



                </ul>


                <!-- <input class="form-control mr-sm-2 srchinput" type="search" placeholder="Search" aria-label="Search"> -->
                <button class=" btn btn-mg rounded-pill nav-btn  signupbtn " id="signupbtn" type="submit">Sign up</button>

            </div>
        </nav>
        <script>
            var signUpButton = document.getElementById("signupbtn");

            signUpButton.addEventListener('click', () => {
                location.href = 'signup.php';
            });
        </script>
    </header>