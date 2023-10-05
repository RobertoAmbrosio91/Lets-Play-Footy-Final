<?php
session_start();
require_once 'head.php';
require_once 'header.php';
require_once '../CONTROL/addgameprocess.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>

        <div class="col-sm-6">
            <br><br>

            <form class="" action="" method="POST">
                <?php
                if (isset($err_empty_field)) {
                    echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"> ' . $err_empty_field . '</div>';
                }
                ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>

                    <div class="form-group">
                        <label>Desrciption</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputplayers">Number of players</label>
                            <select id="inputplayers" class="form-control" name="players">
                                <option value="" selected>Choose...</option>
                                <option value="10">5 vs 5</option>
                                <option value="12">6 vs 6</option>
                                <option value="14">7 vs 7</option>
                                <option value="16">8 vs 8</option>
                                <option value="18">9 vs 9</option>
                                <option value="20">10 vs 10</option>
                                <option value="22">11 vs 11</option>

                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Date</label>
                            <input type="date" class="form-control" id="inputdate" name="date">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Time</label>
                            <input type="time" class="form-control" id="inputTime" name="time">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="gender">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="coed" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Coed
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="male">
                            <label class="form-check-label" for="exampleRadios2">
                                Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="female">
                            <label class="form-check-label" for="exampleRadios3">
                                Female
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="addgame">Add Game</button>
            </form>
        </div>

        <div class="col-sm-3"></div>
    </div>
</div>


<script>
    function activatePlacesSearch(){
        var input = document.getElementById('inputAddress');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
</script>

</body>

</html>