
<!DOCTYPE html>
<html>
<head>
	<title>management system</title>
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
.icon i{
	width:80px;
	height: 80px;
	background:white;
	font-size: 40px;
	color:#dc3545;
	border-radius: 50%;
	padding-top:15px;
	position: :relative;
	left:35%;
	bottom:4px;

}
.icon i:hover{
	font-size: 65px;
	background:#dc3545;
	color: white;
}
.border{
	border-radius: 10px;
}
h4{
background-color:bold;
margin:15px;
padding:18px;
color:yellow;
text-align:center;
font-size:20px;
border:2px solid green
font-style:verdana;
  text-shadow: 2px 2px yellow
  border-style:inset

}
.menu-bar
{
background: linear-gradient(57deg,#00c6a7,#1e4d92);
text-align:center;
}
.menu-bar ul{
display:inline-flex;
list-style:none;
color:#fff;
}
.menu-bar ul li{
width:120px;
margin:15px;
padding:10px;
}
.menu-bar ul li a{
text-decoration:none;
color:white;
}
.active, .menu-bar ul li:hover
{background: linear-gradient(57deg,#1e4d92,#00c6a7);
border radius:3px;
}
.menu-bar .fa
{
    margin-right: 8px;
}
.sub-menu-1{
    display:none;
}
.menu-bar ul li:hover .sub-menu-1
{
display:block;
position:absolute;
background:rgb(0,100,0);
margin-top:15px;
margin-left:-15px;
}
.menu-bar ul li:hover .sub-menu-1 ul{
display:block;
margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 li{
width:150px;
padding:10px;
border-bottom:1px dotted #fff;
background:transparent;
border-radius:0;
text-align:left;
}
</style>
<body>
	<div class="menu-bar">
<ul>
 <li class="active"><a href="main.php"><i class="fa fa-home"></i>Home</a></li>
 <li><a href="about.html"><i class="fa fa-user"></i>About us</a></li>
 <li><a href="#"><i class="fa fa-clone"></i>Services</a></li>
 <li><a href="#"><i class="fa fa-users"></i>Clients</a></li>
 <li><a href="#"><i class="fa fa-angellist"></i>Investers</a></li>
 <li><a href="#"><i class="fa fa-inr"></i>picing</a></li>
 <li><a href="#"><i class="fa fa-edit"></i>Training</a></li>
 <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
</ul>
</div>
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

				<a href="#" class="list-group-item list-group-item-action">
			<i class="fa fa-sign-out"></i>logout</a>

		</ul>
	</div>
	<div class="main-body">
		<button class="btn btn-outline-light bg-danger mt-2" id="toggler">
			<i class="fa fa-bars"></i>
			</button>

			<section id="main-form">
			<h2 class="text-center text-danger pt-3 font-weight-bold">Student Management System</h2>	
          <div class="container bg-danger" id="formsetting">
          	<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Welcome to all Students</h3>
          	<div class="row">
          		<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="Add_student.php"class="text-white text-center"><i class="fa fa-user"></i>
          				<h3>Add student Details</h3></a>
          			
          		</div>
          		<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="View_student.php"class="text-white text-center"><i class="fa fa-eye"></i>
          				<h3>View student Details</h3></a>
          			</div>
          				<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="view_student.php"class="text-white text-center"><i class="fa fa-pencil"></i>
          				<h3>Edit student Details</h3></a>
          			
          		</div>	
          		</div>

          		<hr class="bg-white">
          		<div class="row">
          		<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="Add_teacher detail.php"class="text-white text-center"><i class="fa fa-user"></i>
          				<h3>Add Teacher Details</h3></a>
          			
          		</div>
          		<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="view_teacher.php"class="text-white text-center"><i class="fa fa-eye"></i>
          				<h3>View Teacher Details</h3></a></div>
          				<div class="col-md-4 col-sm-4 col-12 m-auto icon">
          			<a href="view_teacher.php"class="text-white text-center"><i class="fa fa-pencil"></i>
          				<h3>Edit Teacher Details</h3></a>
          			
          		</div>
          			<h4><marquee direction="left">(24/12/2020)Welcome to The Student Management system  powerd By @ AMAN PRAKASH @ Mmmut Gorakhpur University -(Utter Pradesh) India -273010.</marquee></h4>
    
          		</div>
          	</div>
          </div>
			</section>

		</div>
</div>
</body>
</html>