<?php 
include 'DataBase/DB_Connection.php';
$con=OpenCon();
//Student Registration
if(isset($_REQUEST["Register_as_a_Student"]))
{
//$Name=$_REQUEST["FullName"];
	$email= mysqli_real_escape_string($con, $_REQUEST["Student_email"]);
	$password1= md5(mysqli_real_escape_string($con, $_REQUEST["password1"]));
	$password2= md5(mysqli_real_escape_string($con, $_REQUEST["password2"]));
	if($email==NULL || $password1== NULL || $password2==NULL){
		$message = "Some Requried field(*) is Empty!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else{
		if($password2!==$password1){
			$message = "I am afraid that password is not matching!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			$query = "SELECT email FROM StudentAuth";  
			$result = mysqli_query($con, $query);
			$count=0;
			while($row = mysqli_fetch_array($result))  
			{  
				if($row['email']==$email){
					$count=$count+1;
					$message = "Email is already existed." ;
					echo "<script type='text/javascript'>alert('$message');</script>";
					break;
				}
			}
			if($count==0){

				$InsertDataAuth = "INSERT INTO StudentAuth (email,password1,password2) VALUES ('$email','$password1','$password2')"; 
				$InsertData = "INSERT INTO StudentData (email) VALUES ('$email')"; 

				if(mysqli_query($con, $InsertData) && mysqli_query($con, $InsertDataAuth))  
				{  

					$message = "congratulations, Your account has been created...Please login" ;
					echo "<script type='text/javascript'>alert('$message');</script>";

				}

			}
		}
	}
}
// Employee registration
if(isset($_REQUEST["Regitser_as_an_Employee"]))
{

	$email= mysqli_real_escape_string($con, $_REQUEST["Employee_email"]);
	$password1= md5(mysqli_real_escape_string($con, $_REQUEST["password1"]));
	$password2= md5(mysqli_real_escape_string($con, $_REQUEST["password2"]));
	$company= mysqli_real_escape_string($con, $_REQUEST["Company_Name"]);
	if($email==NULL || $password1== NULL || $password2==NULL||$company==NULL){
		$message = "Some Requried field(*) is Empty!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else{
		if($password2!==$password1){
			$message = "I am afraid that password is not matching!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			$query = "SELECT email FROM EmployeeAuth";  
			$result = mysqli_query($con, $query);
			$count=0;
			while($row = mysqli_fetch_array($result))  
			{  
				if($row['email']==$email){
					$count=$count+1;
					$message = "Email is already existed." ;
					echo "<script type='text/javascript'>alert('$message');</script>";
					break;
				}
			}
			if($count==0){

				$InsertDataAuth = "INSERT INTO EmployeeAuth (email,password1,password2) VALUES ('$email','$password1','$password2')"; 
				$InsertData = "INSERT INTO EmployeeData (email,company) VALUES ('$email','$company')"; 

				if(mysqli_query($con, $InsertData) && mysqli_query($con, $InsertDataAuth))  
				{  

					$message = "congratulations, Your account has been created...Please login" ;
					echo "<script type='text/javascript'>alert('$message');</script>";

				}

			}
		}
	}
}

		//Student login
if(isset($_REQUEST["login_as_a_Student"]))
{
//$Name=$_REQUEST["FullName"];
	$email= mysqli_real_escape_string($con, $_REQUEST["Student_email"]);
	$password= md5(mysqli_real_escape_string($con, $_REQUEST["password"]));

	if($email==NULL || $password== NULL){
		$message = "Some Requried field(*) is Empty!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else{
		
		$query = "SELECT email,password1 FROM StudentAuth where email='$email'";  
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))  
		{  
			if($row['email']==$email && $row['password1']==$password){
				 session_start();
       	$_SESSION["email"] = $email;
				echo "<script>
window.location.href='Student/StudentDashboard.php';
</script>";
				
			}else{
				$message = "wrong cridentials for login!!" ;
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}

		
	}
}
	//Employee login
if(isset($_REQUEST["login_as_a_Employee"]))
{
//$Name=$_REQUEST["FullName"];
	$email= mysqli_real_escape_string($con, $_REQUEST["Employee_email"]);
	$password= md5(mysqli_real_escape_string($con, $_REQUEST["password"]));

	if($email==NULL || $password== NULL){
		$message = "Some Requried field(*) is Empty!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else{
		
		$query = "SELECT email,password1 FROM EmployeeAuth where email='$email'";  
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))  
		{  
			if($row['email']==$email && $row['password1']==$password){
				
				 session_start();
       	$_SESSION["email"] = $email;
				echo "<script>
window.location.href='Employee/EmployeeDashboard.php';
</script>";
				
			}else{
				$message = "wrong cridentials for login!!" ;
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}

		
	}
}
?>
<?php 
include 'Utility/CSS/Head.php';
include 'Utility/Other/NavBar.php';
?>

<!-- Carousal start here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000" >
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="http://blogs.nottingham.ac.uk/careers/files/2017/03/iStock-498861460-e1488556967284.jpg" alt="First slide" height="400px">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 h-15" src="https://timedotcom.files.wordpress.com/2018/07/interns-history.jpg" alt="Second slide" height="400px">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100 h-15" src="https://planning-org-uploaded-media.s3.amazonaws.com/image/internship-experience-graphic.png" alt="Third slide" height="400px">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- Carousal ends here -->
<!-- Main Section Start Here -->
<p class="text-center" style="margin-top: 50px;font-size: 18px;">Internships in popular cities</p>
<div class="container">
	<div class="row">
		<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
		padding: 10px;">
		<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_work_from_home_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
		</div>
		<p class="text-center" style="margin-top: -70px; margin-left: 35px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Home</p>

	</div>
	<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
	padding: 10px;">
	<div class="shadow-lg"  style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_delhi_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
	</div>
	<p class="text-center" style="margin-top: -70px; margin-left: 15px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Delhi NCR</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div  class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_bangalore_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 15px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Bangalore</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_mumbai_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 25px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Mumbai</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_hyderabad_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 13px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Hyderabad</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="padding: 10px ;">
	<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/city_work_from_home_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
	</div>
	<p class="text-center" style="margin-top: -70px; margin-left: 20px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Chennai</p>

</div>

</div>
</div>
<!-- Internships in popular categories start here -->
<p class="text-center" style="margin-top: 50px;font-size: 18px;">Internships in popular categories</p>
<div class="container">
	<div class="row">
		<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
		padding: 10px;">
		<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_part_time.png'); width: 115px;height: 115px; border-radius: 10%;">
		</div>
		<p class="text-center" style="margin-top: -70px; margin-left: 15px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Part-Time</p>

	</div>
	<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
	padding: 10px;">
	<div class="shadow-lg"  style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_engineering_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
	</div>
	<p class="text-center" style="margin-top: -70px; margin-left: 5px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Engineering</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div  class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_ngo_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 35px;font-weight: bold;font-size: 18px;color: white;position: absolute;">NGO</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_mba_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 35px;font-weight: bold;font-size: 18px;color: white;position: absolute;">MBA</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="
padding: 10px;">
<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_design_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
</div>
<p class="text-center" style="margin-top: -70px; margin-left: 30px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Design</p>

</div>
<div class="col col-xl-2 col-lg-2 col-md-4 col-sm-12" style="padding: 10px ;">
	<div class="shadow-lg" style="background-image: url('https://cdn.internshala.com/static/images/home/discover/category_science_new.jpg'); width: 115px;height: 115px; border-radius: 10%;">
	</div>
	<p class="text-center" style="margin-top: -70px; margin-left: 24px;font-weight: bold;font-size: 18px;color: white;position: absolute;">Science</p>

</div>

</div>
</div>
<p class="text-center" style="font-weight: bold ;margin-top: 50px;font-size: 48px;">OR</p>
<div class="text-center">
	<button type="button" class="text-center  btn btn-success btn-lg">view all internships</button>
	<div>
		<!-- Internships in popular categories end here -->
		<hr>
		<!-- Main Section end Here -->

		<?php 
		include 'Utility/Other/Footer.php';
		include 'Utility/JS/Bottom.php';
		?>

