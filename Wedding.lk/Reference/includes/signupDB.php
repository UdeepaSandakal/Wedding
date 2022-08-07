<?php
	session_start();
	require_once('dbconnection.php');

	/*if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["mobile"])&&isset($_POST["password"])&&isset($_POST["confirmPassword"])){
			if($_POST["password"]==$_POST["confirmPassword"])
			$name=$_POST["name"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];

			$sql="insert into register(name,email,mobile,password,role)values('$name','$email','$mobile','$password','user')";

			if($conn->query($sql)){
				echo "Record added successfully";

				$location="../login.php";
				header("Location:$location");
			}else{
				echo "Not updated";
			}
	}*/
/*
	$name="";
	$email="";
	$mobile="";
	$errors=array();

	$db=mysqli_connect('localhost','root','register');

	if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirmPassword) {
	array_push($errors, "The two passwords do not match");
  }

   $register_check_query = "SELECT * FROM register WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $register = mysqli_fetch_assoc($result);
  
  if ($register) { // if user exists
    if ($register['name'] === $name) {
      array_push($errors, "Username already exists");
    }

    if ($register['email'] === $email) {
      array_push($errors, "email already exists");
    }
  

  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO register (name, email,mobile, password) 
  			  VALUES('$name', '$email', '$mobile','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../login.php');
  }
}
*/
	/*
		INSERT INTO table_name(
			column1, column2, etc
		)VALUES(
			value1,value2,etc
		)
	*/
		/*$name='udeepa';
		$email='abc@gmail.com';
		$mobile='07458xxxxx';
		$password='test123';
		$role='admin';*/

		/*$name='';
		$email='';
		$mobile='';
		$password='';
		$role='';*/

		if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["mobile"])&&isset($_POST["password"])&&isset($_POST["confirmPassword"])){
			if($_POST["password"]==$_POST["confirmPassword"])
			$name=$_POST["name"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];

			$hashed_password=sha1($password);
		//echo "Hashed password: {$hashed_password}";

		$query="INSERT INTO register(name,email,mobile,password,role) VALUES ('{$name}','{$email}','{$mobile}','{$hashed_password}','{$role}')";

		$result=mysqli_query($connection,$query);

		if($result){
			echo "1 Record added";
		}else{
			echo "Database query failed";
		}
	mysqli_close($connection);
?>
 
	
