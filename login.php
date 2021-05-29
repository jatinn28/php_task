<?php
session_start();
include('header.php');
include('confg/connection.php');

if ($_POST['login']=="Login") {
    $name=$_POST['name'];
    $upass=$_POST['passwd'];
    $sel="select * from user where user_name='$name' and password='$upass'";
    $exe=mysql_query($sel);
     $tot=mysql_num_rows($exe);
     if ($tot==1) {
        $fetch=mysql_fetch_array($exe);

        $_SESSION['userid']= $name;
        header("Location:login/user.php");
     }
     else{
        $msg="Invalid username and password";
     }
}

?>

		<div class="container text-uppercase" style="margin-left:350px; position: relative; bottom: 30px; color:red; ">
		<h1 style="background-color:black;" >
				<ul class="nav navbar-nav ">
                            <li style="background-color:yellow; border-radius:50px;"><a href="login.php" class="nav-link">LOGIN</a></li>
                            <li style="background-color:lightblue; border-radius:50px;"><a href="register.php" class="nav-link" >REGIster</a></li>
			</h1>
           	</div>
                <div class="row text-center " style="background-color: darkgray; width:550px; margin-left:250px; background: rgba(0.5,0.5,0.8,0.8); background-size: cover;">
                    <div class="col-md-12  text-uppercase text-center">
			
			<div class="col-md-12">
                        <form method="post">
                            <h3>LOGIN</h3>
				<div class="text-danger"><?php echo $msg; ?></div>
                            <input type="text" name="name" placeholder="Username" class="text" required><br>
                            <input type="password" name="passwd" placeholder="password" class="text" required><br> <br>                         
                            <input type="submit" name="login" value="Login" class="btn feed"><br>
			</form>
			</div>
			
                    </div>
                    
                </div>
            
        <br>
        <?php
            include('footer.php');
        ?>