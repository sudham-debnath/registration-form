<?php

      session_start();
      if(isset($_POST['log']))
      {
        $name=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $abc=mysqli_connect('localhost','root','','diu');
        mysqli_query($abc, "insert into cse(name,name,email)values('$name','$lname',$email)");

      }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form In HTML and CSS</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form method="POST">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname">
					</div>
				</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" id="email">
				</div>
				<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" checked>
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio">
								<span>Female</span>
							</label>
						</li>
					</ul>
				</div>
				<div class="input_wrap">
					<label for="city">City</label>
					<input type="text" id="city">
				</div>
				<div class="input_wrap">
					<label for="country">Country</label>
					<input type="text" id="country">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn">
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>