<?php
include 'dbconnect.php';
if(isset($_POST['add'])){
	
	$fname= mysqli_real_escape_string($conn,$_POST['fname']);
	
	$gender= mysqli_real_escape_string($conn,$_POST['gender']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$city= mysqli_real_escape_string($conn,$_POST['city']);
	$district= mysqli_real_escape_string($conn,$_POST['district']);
	$birthdate= mysqli_real_escape_string($conn,$_POST['birthdate']);
	$mobile= mysqli_real_escape_string($conn,$_POST['mobile']);
	
	$Addhar= mysqli_real_escape_string($conn,$_POST['Addhar']);
	$subject= mysqli_real_escape_string($conn,$_POST['subject']);
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
        $sql="insert into teacher(fname,gender,email,city,district,birthdate,mobile,Addhar,subject,image)
	values('$fname','$gender','$email','$city','$district','$birthdate','$mobile','$Addhar','$subject','$image')";	

       $run= mysqli_query($conn,$sql);
if($run){
	$success="submited successfully";
}
	else{
		$error="unable to submit data please try again";
	}
}	   
			
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
	<meta name="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1">
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

			<a href="edit.php" class="list-group-item list-group-item-action">
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
			<span class="text-center text-success font-weight-bold"><?php echo @$size_error; echo @$match_err ?></span>
			<h2 class="text-center text-danger pt-3 font-weight-bold">Details Of All faculties Member</h2>	
          <div class="container bg-danger" id="formsetting">
          	<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Add Teacher details</h3>





          	<form method="post" action="" enctype="multipart/form-data">
          	<div class="row">
          		<div class="col-md-5 col-sm-5 col-12 m-auto ">
          			<div class="form-group">
          				<label class="text-white">TeacherName</label>
          				<input type="text" name="fname" placeholder="Enter Teacher Name"class="form-control" required="required">
						</div>
          			<div class="form-group">
					<label class="text-white">Gender</label>
					<input type="radio" name="gender" value="male" class="form-check-input ml-2">
					<label class="form-check-label text-white pl-4">Male</label>
					<input type="radio" name="gender" value="female" class="form-check-input ml-2" required="required">
					<label class="form-check-label text-white pl-4">Female</label>
				
					</div>
					<div class="form-group">
          				<label class="text-white">Email</label>
          				<input type="email" name="email" placeholder="  Enter your email"class="form-control" required="required">
          			</div>
					
					<div class="form-group">
          				<label class="text-white">Address/city</label>
          				<input type="text" name="city" placeholder="  Enter your city"class="form-control" required="required">
          			</div>
					<div class="form-group">
          				<label class="text-white">District</label>
          				<input type="text" name="district" placeholder="  Enter your district"class="form-control" required="required">
          			</div>
					
          		</div>
          		<div class="col-md-5 col-sm-5 col-12 m-auto">
					
					
					<div class="form-group">
          				<label class="text-white">Enter you date of birth</label>
          				<input type="date" name="birthdate" placeholder=" Enter your DD/MM/YY"class="form-control" required="required">
          			</div>
					<div class="form-group">
          				<label class="text-white">Mobile</label>
          				<input type="text" name="mobile" placeholder="   Enter your mobile number"class="form-control" required="required">
          			</div>
          			<div class="form-group">
          				<label class="text-white">AddharNumber</label>
          				<input type="text" name="Addhar" placeholder="   Enter your Addhar number"class="form-control" required="required">
          			</div>
					
					<div class="form-group">
          				<label class="text-white">Subject</label>
          				<input type="text" name="subject" placeholder=" Enter Teacher subject"class="form-control" required="required">
          			</div><br>
					<div class="input-group">
					
	<div class="input-group-prepend"><span class="input-group-text"id="
		inputGroupFileAddon01">Uplode</span></div>
		<div class="custom-file">
			<input type="file"class="custom-file-input"id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"name="image">
			<label class="custom-file-label" for="inputGroupFile01">choose file</label>
		</div>
		
        </div>
		<br>
		<input type="submit"name="add" value="Submit"class="btn btn-success px-5 mt-2">
		<span class="text-center text-success font-weight-bold"><?php echo @$success; echo @$error ?></span>
              </div>

          </div>
      </form>
      </div>
			</section>
		</div>
		
</div>
</body>
</html>