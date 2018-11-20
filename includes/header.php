
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">MUSIC EMPORIUM &nbsp<span class = "glyphicon glyphicon-book"></span> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php
                if (isset($_SESSION['email'])) {
                    ?>

        <?php
            $user_id = $_SESSION['user_id'];
            $qry = "SELECT * from users WHERE id='$user_id' ";
            $res = mysqli_query($con, $qry)or die($mysqli_error($con));
                if(mysqli_affected_rows($con)>0){
            while($r=mysqli_fetch_array($res,MYSQLI_NUM)){
  ?>

                   <li> <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: transparent; border: none; margin-top: 8px;">
                    <?php
                    if ($r[10]==NULL) {
                        echo"<span class='glyphicon glyphicon-user'></span>"; ?><?php echo "$r[1]"; ?><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class = "glyphicon glyphicon-user" style="color: black;"></span><b>&nbsp &nbsp My Profile</b></a></li>
                            <li><a href="wishlist.php"><span class = "glyphicon glyphicon-heart-empty" style="color: black;"></span><b>&nbsp &nbsp Wishlist</b></a></li>
                            <li><a href="settings.php"><span class = "glyphicon glyphicon-wrench" style="color: black;"></span><b>&nbsp &nbsp Settings</b></a></li>
                         </ul>
                    </li>

                        <?php
                    }else{
                    ?>
                    <img src='<?php echo "$r[10]"; ?>' style= 'height: 30px; width: 30px; border-radius: 100%;'> <?php echo "$r[1]"; ?><span class="caret"></span></button>  <?php }?>
                         <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class = "glyphicon glyphicon-user" style="color: black;"></span><b>&nbsp &nbsp My Profile</b></a></li>
                            <li><a href="wishlist.php"><span class = "glyphicon glyphicon-heart-empty" style="color: black;"></span><b>&nbsp &nbsp Wishlist</b></a></li>
                            <li><a href="complain.php"><span class = "glyphicon glyphicon-thumbs-down" style="color: black;"></span><b>&nbsp &nbsp Complain</b></a></li>
                            <li><a href="settings.php"><span class = "glyphicon glyphicon-wrench" style="color: black;"></span><b>&nbsp &nbsp Settings</b></a></li>
                         </ul>
                    </li>


                   <!--<li> <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: red; border: none; margin-top: 8px;"><span class = "glyphicon glyphicon-star-empty"></span> Brands <span class="caret"></span></button>
                         <ul class="dropdown-menu">
                            <li><a href=""><span class = "glyphicon glyphicon-user" style="color: black;"></span><b>&nbsp &nbsp Beats</b></a></li>
                            <li><a href=""><span class = "glyphicon glyphicon-screenshot" style="color: black;"></span><b>&nbsp &nbsp Bose</b></a></li>
                            <li><a href=""><span class = "glyphicon glyphicon-eye-open" style="color: black;"></span><b>&nbsp &nbsp Skullcandy</b></a></li>
                            <li><a href=""><span class = "glyphicon glyphicon-send" style="color: black;"></span><b>&nbsp &nbsp JBL</b></a></li>
                            <li><a href=""><span class = "glyphicon glyphicon-send" style="color: black;"></span><b>&nbsp &nbsp Sennheiser</b></a></li>
                          </ul>
                    </li>-->

                    <li><a href="buycart.php" style="color: white;"><span class = "glyphicon glyphicon-shopping-cart" style="color: #999999;"></span>&nbsp Buy Cart</a></li>
                    <li><a href="about_us.php" style="color: white;"><span class = "glyphicon glyphicon-queen" style="color: #999999;"></span> &nbsp About Us</a></li>
                    <li><a href = "logout_script.php" style="color: white;"><span class = "glyphicon glyphicon-log-out" style="color: #999999;"></span>&nbsp Logout</a></li>

                    <?php
                }
            }
                        } else {
                    ?>

                    <li><a href="signup.php" style="color: white;"><span class="glyphicon glyphicon-user" style="color: white;"></span> Sign Up</a></li>

                    <li><a href="login.php" style="color: white;"><span class="glyphicon glyphicon-log-in" style="color: white;"></span>&nbsp Log In</a></li>

                    <li><a href="about_us.php" style="color: white;"><span class="glyphicon glyphicon-queen" style="color: white;"></span>&nbsp About Us</a></li>

                    <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
