<?PHP
 session_start();
 if(!isset($_SESSION['admin'])){
	header('location:logout.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Requests</title>
	<!--===============================================================================================-->
	<meta charset="UTF-8">
	<!--===============================================================================================-->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	  <link rel="icon" type="image/png" href="images/logo.jpg"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="./js/search.js"></script>
  </head>
  <!--===============================================================================================-->
  
  <style>
	html {
		position: relative;
		min-height: 100%;
		
	}
	
	body {
		padding-top: 4.5rem;
		margin-bottom: 4.5rem;
	}
	#navbarCollapse a{
	  color: #fff;
	  
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  height: 3.5rem;
	  line-height: 3.5rem;
	  background-color:#2196f3;
	}
	
	.nav-link:hover {
	  transition: all 0.4s;
	}
	
	.nav-link-collapse:after {
	  float: right;
	  content: '\f067';
	  font-family: 'FontAwesome';
	}
	
	.nav-link-show:after {
	  float: right;
	  content: '\f068';
	  font-family: 'FontAwesome';
	}
	
	.nav-item ul.nav-second-level {
	  padding-left: 0;
	}
	
	.nav-item ul.nav-second-level > .nav-item {
	  padding-left: 20px;
	}
	
	@media (min-width: 992px) {
	  .sidenav {
		position: absolute;
		top: 0;
		left: 0;
		width: 230px;
		height: calc(100vh - 3.5rem);
		margin-top: 3.5rem;
		background:#2196f3;
		box-sizing: border-box;
		border-top: 1px solid rgba(0, 0, 0, 0.3);
	  }
	
	  .navbar-expand-lg .sidenav {
		flex-direction: column;
	  }
	
	  .content-wrapper {
		margin-left: 230px;
	  }
	
	  .footer {
		width: calc(100% - 230px);
		margin-left: 230px;
	  }
	  .test{
		margin-left: 230px;
	  }
	}
	.active{
		background-color:#1565c0 ;
	}
	.form-padding
	{
		border-radius:10px;
		width:80%;
		height:80%;
		padding:30px;
		background-color:white;
		font-weight:500;
		font-size:15px;
		margin-left:auto;
		margin-right:auto;
	}
	.form-heading
	{
		font-size:20px;
		font-weight:500;
		color:Blue;
	}
	</style>
  
  <!--===============================================================================================-->
  <body class="bg-info">
  <!--===============================================================================================-->section>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background:#2196f3;">
	<a class="navbar-brand"  style="color: white;" href="#">RGUKT ONG - OMS</a>
	<button
	  class="navbar-toggler"
	  type="button"
	  data-toggle="collapse"
	  data-target="#navbarCollapse"
	  aria-controls="navbarCollapse"
	  aria-expanded="false"
	  aria-label="Toggle navigation"
	>
	  <span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="navbarCollapse">
	  <ul class="navbar-nav mr-auto sidenav" id="navAccordion"  >
		  <br>
		<li class="nav-item active">
		  <a class="nav-link" href="requests.php" > &#128233; Requests<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="accepts.php">  &#128505;  Accepts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="rejects.php"> &#128503; Rejects</a>
		  </li>
		<li class="nav-item">
		  <a
			class="nav-link nav-link-collapse"
			href="#"
			id="hasSubItems"
			data-toggle="collapse"
			data-target="#collapseSubItems2"
			aria-controls="collapseSubItems2"
			aria-expanded="false"
		  > &#128202; Statistics            <big>⇩</big></a>
		  <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
		  <li class="nav-item ">
								<a class="nav-link" href="homestatustics.php">
									<span class="nav-link-text"> &#127968; Outpass Permissions</span>
								</a>
					</li>
					<li class="nav-item" >
								<a class="nav-link" href="onehourstatustics.php">
									<span class="nav-link-text"> &#127966; Outing Permissions</span>
								</a>
					</li>
		  </ul>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="studentregistration.php"> &#128221; Student Registration</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="studentdata.php">&#127891; Student Data</a>
		  </li>
	  </ul>
	  <form class="form-inline ml-auto mt-2 mt-md-0">
		<input class="form-control mr-sm-2" type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search &#128269;" aria-label="Search">
	  </form>
	  <a href="logout.php">Logout &#128473;</a>
	</div>
  </nav>
  
  <main class="test">
<!--===================================================================================================================================================-->
<!--===================================================================================================================================================-->
<div>

			  <?PHP
			  include "connect.php";
			  //===================================================================================================
			  	$sno = $_GET['q'];
				$stuid_query = "select * from `perpermissions_details` where sno=$sno";
				$stuid_query_sql=mysqli_query($connect,$stuid_query);
				$stu_id_no="";
				while($row = mysqli_fetch_array($stuid_query_sql)){
					$stu_id_no=$row["rollnumber"];
				}
				/*echo "<tr  scope='row'>
						<td>".$row['rollnumber']."</td><td>".$row['studentname']."</td><td>".$row['stream']."</td><td>".$row['prmissiontype']."</td>
						<td>".$row['reason']."</td><td>".$row['leavingdatetime']."</td> <td>".$row['returndatetime']."</td> 
						<td>".$row['place']."</td><td>".$row['contacnumber']."</td>
						<td><a class='btn btn-success' href='formview.php?q=".$row['sno']."'>Accept</a></td>
						<td><a  class='btn btn-danger' href='rejectreason.php?q=".$row['sno']."'>Reject</a></td>
					 </tr>";*/
				// count = 0
				// id = idno and status = accepted and getmonth(leavingdatetime) == getmonth(curdate)
				// count ++ 
				$query="select * from `perpermissions_details` JOIN `student_details` ON `perpermissions_details`.`rollnumber`=`student_details`.`rollnumber` WHERE `perpermissions_details`.`status`='PENDING' and `perpermissions_details`.`sno`=$sno";
				$sql=mysqli_query($connect,$query);
				$row = mysqli_fetch_array($sql);
				echo "<div class='form-padding'>
				<center><h1 style='color:green; font-weight:500; text-decoration:underline; font-size:30px'>OUTPASS FORM</h1></center>
				<p><span class='form-heading'>ID no</span> : ".$stu_id_no." </p>
				<p><span class='form-heading'>Name</span> : ".$row['studentname']." </p>
				<p><span class='form-heading'>Stream</span> : ".$row['stream']." </p>
				<p><span class='form-heading'>Permission Type</span> : ".$row['prmissiontype']." </p>
				<p><span class='form-heading'>Reason</span> : ".$row['reason']." </p>
				<p><span class='form-heading'>Leaving Date & Time</span> : ".$row['leavingdatetime']." </p>
				<p><span class='form-heading'>Return Date & Time</span> : ".$row['returndatetime']." </p>
				<p><span class='form-heading'>Place</span> : ".$row['place']." </p>
				<p><span class='form-heading'>Parent Contact</span> : ".$row['contacnumber']." </p>
				<center>
				<a class='btn btn-success' href='acceptdata.php?q=".$row['sno']."'>Accept</a>
				<a  class='btn btn-danger' href='rejectreason.php?q=".$row['sno']."'>Reject</a>
				</center></div>";

			 ?>
  </div>
  </main>
  
 <!-- <footer class="footer">
	<div class="container">
		
	</div>
  </footer>-->
<!--===================================================================================================================================================-->
<!--===================================================================================================================================================-->
</section>
<script>
	$(document).ready(function() {
  $('.nav-link-collapse').on('click', function() {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });
});
</script>
</body>

</html>