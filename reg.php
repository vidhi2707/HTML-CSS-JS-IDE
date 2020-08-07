<!doctype html>
<html>
<head>
<title>User Registration</title>
</head>
<body>
<h1>User Registration</h1>
<form action="" method="post">
<label>Username :</label><input type="text" name="user"><br/><br/>
<label>Password:</label><input type="password" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit"><br/><br/>
<!-- Login Link -->
<a href="l.php">Login</a>
</form>
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'test') or die("DB Error"); // Select DB from database
//Selecting Database
$query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
$numrows = mysqli_num_rows($query);
if($numrows == 0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO userpass(user,pass) VALUES('$user','$pass')";
$result = mysqli_query($conn, $sql);
//Result Message
if($result){
echo "Your Account Created Successfully";
}
else
{
echo "Failure!";
}
}
else
{
echo "That Username already exists! Please try again.";
}
}
else
{
?>
<!--Javascript Alert -->
<script>alert('Required all felds');</script>
<?php
}
}
?>
</body>
</html>