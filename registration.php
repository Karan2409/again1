<?php
include('db_connect.php');

	if($_POST){
		//print"<PRE>";
		//print_r($_POST);

		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$DOB=$_POST['dd'].'/'.$_POST['mm'].'/'.$_POST['yr'];
		$hobbies=$_POST['hobbies'];
		$hbs='';
		for($i=0;$i<count($hobbies);$i++){
			$hbs.=$hobbies[$i].',';
		}
		$city=$_POST['city'];
		$country=$_POST['country'];
		$phone=$_POST['phone'];

		$ins="insert into register(
			fname,
			lname,
			email,
			password,
			gender,
			address,
			DOB,
			city,
			hobbies,
			country,
			phone
		)
		values(
		'$f_name',
		'$l_name',
		'$email',
		'$password',
		'$gender',
		'$address',
			'$DOB',
			'$city',
			'$hbs',
			'$country',
			'$phone'
		)";

		mysqli_query($con,$ins);
	header('location:login.php');

	}
?>






<html>
	<head>
		<title>registration form</title>
	
	</head>
	<body>
		<main>
			<h2>Registration Form</h2>
			<form method="POST" action="">
			First Name:
			<input type="text" name="f_name">
			<br><br>
			Last Name:
			<input type="text" name="l_name">
			<br><br>
			E-mail:
			<input type="text" name="email">
			<br><br>
			Password:
			<input type="password" name="password">
			<br><br>
			Gender:
			<input  type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<br><br>
			Address:
			<textarea type="address" name="address"></textarea>
			<br><br>
			DOB:Date
			<select name="dd">
				<?php
				for($i=1;$i<=31;$i++){
					echo "<option value='".$i." '>".$i."</option>";
				}

				?>
			</select>
			Month
			<select name="mm">
				<?php
				for($i=1;$i<=12;$i++){
					echo "<option value='".$i."'>".$i."</option>";
					}				
				?>
			</select>
			year
			<select name="yr">
				<?php
				for($i=1950;$i<=2019;$i++){
					echo "<option value='".$i."'>".$i."</option>";
					}				
				?>
			</select>
			<br><br>
			City:
			<input type="text" name="city" value="city">
			<br><br>
			Country:
			<select name="country" >
				<option value="India">India</option>
				<option value="France">France</option>
				<option value="Germany">Germany</option>
				<option value="Russia">Russia</option>
				<option value="USA">USA</option>
				<option value="England">England</option>
				<option value="Israel">Israel</option>
				<option value="Spain">Spain</option>
			</select>
			<br><br>
			Hobbies:
			<input type="checkbox" name="hobbies[]" value="movies">Movies
			<input type="checkbox" name="hobbies[]" value="swimming">swimming
			<input type="checkbox" name="hobbies[]" value="reading">reading
			<input type="checkbox" name="hobbies[]" value="cricket">cricket
			<br><br>
			Phone Number:
			<input type="phone" name="phone">
			<br><br>
			Submit:
			<input type="submit" name="submit" value="submit">
			<br><br>
		</form>

		</main>
	</body>
</html>