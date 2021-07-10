<?php
include "dbconnect.php";     
?>

<!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
	<meta name="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
	jQuery(document).ready(function($){
		$('#toggler').click(function(event){
			{	event.preventDefault();
			$('#wrap').toggleClass('toggled');
		}
	});
});
</script>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300&display=swap');
	*{
		margin: 0px;
		padding:0px;
		box-sizing: border-box;
		font-family:tahoma;
		font-family: 'Noto Sans SC', sans-serif;
	}
	.main-body{
		width:100%;
		min-width:0px;

	}
	.sidebar{
		width:16rem;
		font-size: 1.1rem;
        transition: all 0.5s ease;
	}
	.sidebar a:hover{
		padding-left: 5px;
		transition: all 0.5s ease;
		background-color:#dc3545;
		color:yellow;
	}
.sidebar-heading{
	padding-top:10px;
	padding-bottom:10px;
}
.sidebar i{

	background-color:#dc3545;
	border-radius: 50%;
	color:white;
	padding:3px;
	margin-right:4px; 
}
@media(min-width:300px){
	#wrap.toggled .sidebar{
		margin-left:-16rem;
	}
}

</style>
<body>
<div class="d-flex"id="wrap">
	<div class="sidebar bg-light border-light">
		<div class="sidebar-heading">
			<p class="text-center">Manage students</p>
		</div>
	<ul class="list-group list-group-flush">
		<a href="main.php"class="list-group-item list-group-item-action">
			<i class="fa fa-vcard-o"></i>Dashbord</a>
			<a href="Add_student.php" class="list-group-item list-group-item-action">
			<i class="fa fa-user"></i>Add student</a>

			<a href="view_student.php" class="list-group-item list-group-item-action">
			<i class="fa fa-eye"></i>view student</a>

			<a href="view_student.php" class="list-group-item list-group-item-action">
			<i class="fa fa-pencil"></i>Edit student</a>
			<a href="Add_teacher detail.php" class="list-group-item list-group-item-action">
			<i class="fa fa-user"></i>Add Teacher</a>

			<a href="view_teacher.php" class="list-group-item list-group-item-action">
			<i class="fa fa-eye"></i>view Teacher</a>

			<a href="view_teacher.php" class="list-group-item list-group-item-action">
			<i class="fa fa-pencil"></i>Edit Teacher</a>

				
		</ul>
	</div>
	<div class="main-body">
		<button class="btn btn-outline-light bg-danger mt-2" id="toggler">
			<i class="fa fa-bars"></i>
			</button>
			<section id="main-form">
			
			<h2 class="text-center text-danger pt-3 font-weight-bold">Student Management System</h2>	
          <div class="container bg-danger" id="formsetting">
          	<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Edit student detail</h3>
                 <?php
                 if(isset($_GET['edit_student'])){
                 $edit_st_id=$_GET['edit_student'];
                 $query="select * from student_detail where st_id='$edit_st_id'";
                 $run=mysqli_query($conn,$query);
                 while($row=mysqli_fetch_assoc($run))
                 {

             
             
                  


                 ?>




          	<form method="post" action="" enctype="multipart/form-data">
          	<div class="row">
          		<div class="col-md-5 col-sm-5 col-12 m-auto ">
          			<div class="form-group">
          				<label class="text-white">First name</label>
          				<input type="text" name="fname" placeholder="  Enter your first name"class="form-control" required="required"
          				value="<?php  echo $row['fname'];?> ">
						</div>
          			<div class="form-group">
					<label class="text-white">Gender</label>
					<input type="radio" name="gender" value="male" class="form-check-input ml-2"
					<?php if($row['gender']=='male')echo"checked";?>>
					<label class="form-check-label text-white pl-4">Male</label>
					<input type="radio" name="gender" value="female" class="form-check-input ml-2"<?php if($row['gender']=='female') echo "checked";?>>
					<label class="form-check-label text-white pl-4">Female</label>
				
					</div>
					<div class="form-group">
          				<label class="text-white">Email</label>
          				<input type="email" name="email" placeholder="  Enter your email"class="form-control" required="required"value="<?php  echo $row['email'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">Father name</label>
          				<input type="text" name="fathername" placeholder="  Enter your father name"class="form-control" required="required"value="<?php  echo $row['fathername'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">Address/city</label>
          				<input type="text" name="city" placeholder="  Enter your city"class="form-control" required="required"value="<?php  echo $row['city'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">District</label>
          				<input type="text" name="district" placeholder="  Enter your district"class="form-control" required="required"
          				value="<?php  echo $row['district'];?>">
          			</div>
					
          		</div>
          		<div class="col-md-5 col-sm-5 col-12 m-auto">
					<div class="form-group">
          				<label class="text-white">Last name</label>
          				<input type="text" name="lname" placeholder="   Enter your last name"class="form-control" required="required"value="<?php  echo $row['lname'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">Mother name</label>
          				<input type="text" name="mname" placeholder="   Enter your mother name"class="form-control" required="required"value="<?php  echo $row['mname'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">Enter you date of birth</label>
          				<input type="date" name="birthdate" placeholder=" Enter your DD/MM/YY"class="form-control" required="required"value="<?php  echo $row['birthdate'];?>">
          			</div>
					<div class="form-group">
          				<label class="text-white">Mobile</label>
          				<input type="text" name="mobile" placeholder="   Enter your mobile number"class="form-control" required="required"value="<?php  echo $row['mobile'];?>">
          			</div>
					
					<div class="form-group">
          				<label class="text-white">State</label>
          				<input type="text" name="state" placeholder="   Enter your state"class="form-control" required="required"value="<?php  echo $row['state'];?>">
          			</div><br>
					<div class="input-group">
					
	<div class="input-group-prepend"><span class="input-group-text"id="
		inputGroupFileAddon01">Uplode</span></div>
		<div class="custom-file">
			<input type="file"class="custom-file-input"id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"name="image">
			<label class="custom-file-label" for="inputGroupFile01">choose file</label>
		</div>
		<?php }}?>
        </div>
	
		<input type="submit"name="update" value="update detail"class="btn btn-success px-5 mt-2">
		
              </div>

          </div>
      </form>
      </div>
			</section>
		</div>
</div>
</body>
</html>

<?php

if(isset($_POST['update'])){
    $edit_st_id=$_GET['edit_student'];
	
	$fname= mysqli_real_escape_string($conn,$_POST['fname']);
	$lname= mysqli_real_escape_string($conn,$_POST['lname']);
	$gender= mysqli_real_escape_string($conn,$_POST['gender']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$birthdate= mysqli_real_escape_string($conn,$_POST['birthdate']);
	$fathername= mysqli_real_escape_string($conn,$_POST['fathername']);
	$mname= mysqli_real_escape_string($conn,$_POST['mname']);
	$mobile= mysqli_real_escape_string($conn,$_POST['mobile']);
	$city= mysqli_real_escape_string($conn,$_POST['city']);
	$district= mysqli_real_escape_string($conn,$_POST['district']);
	$state= mysqli_real_escape_string($conn,$_POST['state']);

	$image = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if(!$image_type=='image/jpg' or !$image_type== 'image/png'){
	$match_err="Invalid image formate";
	}
		else if($image_size<=2000){
			$size_error ="Image size is larger. Image size should be less than 2mb";
		}
		else{
		move_uploaded_file($image_tmp,"st_image/$image");
        $sql="update student_detail set fname='$fname', lname='$lname', gender='$gender', email='$email', birthdate='$birthdate',
        fathername='$fathername', mname='$mname', mobile='$mobile', city='$city', district='$district', state='$state', image='$image'
        where
        st_id='$edit_st_id'";	

       $run= mysqli_query($conn,$sql);
if($run){
	
   echo"<script>window.open('view_student.php?update_success= Details are updated successfully','_self')</script>";
}
	else{
	   echo"<script>window.open('view_student.php?update_error = Not updated please try again','_self')</script>";	
	}
}	   
			
	
}

?>