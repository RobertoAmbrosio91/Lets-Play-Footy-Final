<?php

 require_once 'head.php';
 require_once 'header.php';
 require_once '../CONTROL/loginprocess.php';
?>                                                                                          



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>

            
            <div class="col-sm-4">

                <form name="login" method="POST" class="loginform" action="">


                    <?php
                    if (isset($err_login)) {
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" > ' . $err_login . '</div>';
                    }
                  ?>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input class="form-control" id="Username" name="username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" id="Pword" name="password" type="password">
                    </div>

                    <button type="submit" name="login" class="btn btn-primary ">Login</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>






</body>

</html>