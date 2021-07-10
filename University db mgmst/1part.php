<?php
include 'dbconnect.php';
$email_err=$pws_err=$success=$error='';

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$pss=password_hash($password,PASSWORD_BCRYPT);
$cpss=password_hash($password,PASSWORD_BCRYPT);

$query="select * from userregister where email='$email'";
$run= mysqli_query($conn,$query);
$row= mysqli_num_rows($run);
if($row>0){
    $email_err="Email already used .enter another email";
}
else if($password!==$cpassword){
$pws_err="your password do not match";
}
else{
   $sql="insert into userregister(fname,email,password,cpassword)values('$fname','$email','$password','$cpassword')";
   $run = mysqli_query($conn,$sql);
   if($run){
      $success="Register successfully";
}
else{
    $error="Unable to submit data. please try again";
}    
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management system</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
	function content1(){
		document.getElementById("div1").style.display="block";
		document.getElementById("div2").style.display="none";
	}
	function content2(){
		document.getElementById("div1").style.display="none";
		document.getElementById("div2").style.display="block";
	}
</script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300&display=swap');
	*{
		margin:0px;
		padding:0px;
		box-sizing: border-box;
    font-family: 'Noto Sans SC', sans-serif;
	}
	#formsetting{
		padding:10px;
		border-radius:10;
	}
	</style>
<body>

    <section class="">
    	<h2 class="text-center text-danger pt-5 bp-4 font-weight-bold">University Management System</h2>
    <p class="text-center font-weight-bold text-danger"><?php echo @$_GET['error']?></p>
    	<div class="container bg-danger" id="formsetting">
    		<h3 class="text-white text-center py-3">Admin Login | Register panel</h3>
        <h3 class="text-center text-success font-weight-bold px-3 f-25"><?php echo $success; echo $error; ?></h3>
            <!----Row start from here-------------------------------------------------------------------------->
    		<div class="row">
    			<div class="col-md-7 col-sm-7 col-12">
    				<img src="image/image2.jpg"class="img-fluid">
    			</div>
    				<div class="col-md-5 col-sm-5 col-12">


    					<button class="btn btn-info px-3"onclick="content1()">New Registration</button>
    					<button class="btn btn-info px-3"onclick="content2()">Login</button>

                      <!------------div 1 starts from here------------->
    					<div id="div1"style="display:block" class="mt-2">

    					<form method="post"action="">
    						<div class="form-group">
    						<label class="text-white">Full Name</label>
    						<input type="text"name="fname"placeholder="Enter your name"class="form-control"required="required" id="fname">
    						</div>

    						<div class="form-group">
    						<label class="text-white">Email</label>
                           <span class="float-right text-white font-weight-bold"><?php echo $email_err; ?></span>
    						<input type="email"name="email"placeholder="Enter your email"class="form-control"required="required" id="email">
    						</div>

    						<div class="form-group">
    						<label class="text-white">Password</label>
    						<input type="password"name="password"placeholder="Enter your password"class="form-control"required="required" id="password">
    						</div>

    						<div class="form-group">
    						<label class="text-white" id="cpassword">Confirm password</label>
                            <span class="float-right text-white font-weight-bold"><?php  echo $pws_err;
                                ?></span>
    						<input type="password"name="cpassword"placeholder="Enter your confirm password"class="form-control"required="required">
    						</div>
    						<input type="submit"name="submit"value="Register"class="btn btn-success px-2" id="submit">
                        
    					</form>
    				</div>
                    <!----------------------Div 1 ends here------------------------------------------>
                    <!----------------------Div 2 starts here------------------------------------------>
    				<div id="div2"style="display:none;"class="mt-3">
    					<form method="post"action="">
    						<div class="form-group">
    						<label class="text-white">Email</label>
    						<input type="email"name="email"placeholder="Enter your email"class="form-control">

    						</div>
    						<div class="form-group">
    						<label class="text-white">Password</label>
    						<input type="password"name="password"placeholder="Enter your password"class="form-control">

    						</div>
    						<input type="submit"name="submit1"value="Login"class="btn btn-success px-3">
    				</div>
    			</div>
                <!---------------div 2 ends here------------>
            </div>
      <!----row end here-------------------->
    	</div>
    </section>
    <!----------success button------------------------------------------->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    $("#submit").click(function(){
       var fname = $("#fname").val();
       var email = $("#email").val();
       var password = $("#password").val();
       var cpassword = $("#cpassword").val();
       if(fname == '' || email == '' || password == ''){

         swal({
             title: "field Empty!!",
             text: "please check the missing field",
             icon: "warning",
             button: "ok",
         });
       }
       else{
                swal({
             title: "successfully submitted",
             
             icon: "success",
             button: "ok",
         });

       } 
    });
   </script>
   <!----------------------------------------------------End success------------------------->
</body>
</html>

<?php

if(isset($_POST['submit1'])){

  $email=$_POST['email'];
  $pwd=$_POST['password'];  
  $sql="select * from userregister where email='$email'";
  $run=mysqli_query($conn, $sql);
  $row=mysqli_fetch_assoc($run);

  $pwd_fetch=$row['password'];
  $pwd_decode =password_verify($pwd,$pwd_fetch);
  if($pwd_decode){
           echo "<script>window.open('main.php?success=login successfuly','_self')</script>";
  }
  else{
            echo "<script>window.open('main.php?error=Username and password is incorrect','_self')</script>";
      }
  }

?>