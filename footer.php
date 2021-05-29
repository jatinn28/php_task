<?php

include('confg/connection.php');

$id=1;
$query="select * from contact where id='$id'";
$exe=mysql_query($query);
$fetch=mysql_fetch_array($exe);

?>

        <hr>


        <div class="footer">
            <div class="row">
                <div class="col-md-3 text-center center-block">
                    <div class="row center-block social">    
                        <h3 class="text-center">Social Media</h3>
                        <a href="<?php echo $fetch['fb']; ?>" title="facebook"><i class="fa fa-facebook-square"></i></a>
                        <a href="<?php echo $fetch['insta']; ?>" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $fetch['google']; ?>" title="Google+"><i class="fa fa-google-plus-square"></i></a>
                        <a href="<?php echo $fetch['pinterest']; ?>" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-md-3 row">
                    <div class="col-md-3 ">
                        <h3 class="address">

                        </h3>
                    </div>
                </div>
                <div class="col-md-3 row">
                    <div class="col-md-3 ">
                        <h3 class="address">

                        </h3>
                    </div>
                </div>
                <div class="col-md-3 text-center center-block">
                    <div class="row center-block social">    
                        <h3 class="text-center">Contact Detail</h3>
                        <div>
                            <?php echo $fetch['address']; ?>
                        </div>
                        <div>
                            <?php echo $fetch['email']; ?>
                        </div>
                        <div>
                            <?php echo $fetch['mobile']; ?>
                        </div>
                        <div>
                            <?php echo $fetch['phone']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <br>
    </div>   
    </div>
    </body>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
</html>