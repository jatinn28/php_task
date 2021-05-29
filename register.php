<?php
include('header.php');
include('confg/connection.php');



if ($_POST['register']=="Submit") {
    $name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['add'];
$numb=$_POST['num'];
$passwd=$_POST['pass'];
$cpasswd=$_POST['cpass'];

    $sel="select * from user where user_name='$name'";
    $exe=mysql_query($sel);
     $tot=mysql_num_rows($exe);
     if ($tot==1) {
        $msg="USER ALREADY EXIST";
     }
     else{
        $insert="insert into user set user_name='$name' , user_email='$email' ,user_contact='$numb', user_address='$address' , password='$passwd', cnfrm_password='$cpasswd' ";
	mysql_query($insert);

     }
}



	
?>


		<div class="container text-uppercase" style="margin-left:350px; position: relative; bottom: 30px;">
		<h1 style="background-color:black;" >
				<ul class="nav navbar-nav ">
                            <li style="background-color:yellow; border-radius:50px;"><a href="login.php" class="nav-link">LOGIN</a></li>
                            <li style="background-color:lightblue; border-radius:50px;"><a href="register.php" class="nav-link" >REGIster</a></li>
			</h1>
           	</div>
                <div class="row text-center " style="background-color: darkgray; width:550px; margin-left:250px; background: rgba(0.5,0.5,0.8,0.8); background-size: cover;">
                    <div class="col-md-12  text-uppercase text-center">
			
			<div class="col-md-12">
                        <form method="post" onsubmit="myFunction()">
                            <h3>REGISTER</h3>
                            <div class="text-danger"><?php echo $msg; ?></div>
                           <input type="text" name="name" 
                                placeholder="   User Name"  class=" text input-field" aria-hidden="true" required><br>
			
                            <input type="email"   name="email" placeholder="   Your Email" class="text" required><br>   
			                      
                            <textarea name="add" placeholder="   Address" class="text" required></textarea><br>
			
                            <input type="text" name="num" placeholder="   Contact" class="text" required><br>
			
			     <input type="password" name="pass" placeholder="   Password" class="text" required><br>
			
                              </i><input type="password" name="cpass" placeholder="    Confirm password" class="text" required><br><br><br>
				<input type="submit" name="register" class="btn feed" value="Submit" ><br>
			</form>

			</div>
			
                    </div>

                    
                </div>

            
        <br>
        <?php
            include('footer.php');
        ?>