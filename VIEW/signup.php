<?php

require_once "../CONTROL/regprocess.php";
require_once "head.php";
require_once "header.php";
?>



<div class="container-fluid">

    <div class="row">

        <div class="col-sm-4"> </div>

        <div class="col-sm-4 regcol ">

            <div class="form-container">
                <form name="register" method="post" class="regform">
                    <?php
                    if (isset($err_empty)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_empty . '</div>';
                    }
                    if (isset($err_name)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_name . '</div>';
                    }
                    if (isset($err_email)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_email . '</div>';
                    }
                    if (isset($err_password)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_password . '</div>';
                    }
                    if (isset($err_re_password)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_re_password . '</div>';
                    }
                    ?>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">Username</label> -->
                        <input class="form-control" id="Username" name="username" placeholder="Username">
                    </div>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">First Name</label> -->
                        <input class="form-control" id="FirstName" name="firstname" placeholder="First Name">
                    </div>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">Last Name</label> -->
                        <input class="form-control" id="LastName" name="lastname" placeholder="Last Name">
                    </div>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">Email</label> -->
                        <input class="form-control" id="Email" name="email" placeholder="Email">
                    </div>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">Password</label> -->
                        <input class="form-control" id="Pword" name="password" type="password" placeholder="Password">
                    </div>

                    <div class="mb-4 col-sm-10">
                        <!-- <label class="form-label">Confirm Password</label> -->
                        <input class="form-control" id="RePword" name="repassword" type="password" placeholder="Confirm Password">
                    </div>
                    <p class="paralogin">Already have an account?<a href="loginpage.php" class="anclogin"> Login</a></p>
                    <button type="submit" name="submit" class="btn btn-primary signup">Signup</button>
                </form>
            </div>



            <div class="col-sm-4"></div>
        </div>

    </div>


</div>


</body>

</html>