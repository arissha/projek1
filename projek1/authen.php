<?php  
 require('config.php');
 

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// umpuk nilai POST kepada pembolehubah
//Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// SEMAK REKOD DARI JADUAL
//CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` 
WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Maklumat login disahkan";
echo "<script type='text/javascript'>alert('Maklumat Login disahkan')</script>";
//papar seminar page
header("Location:signup.php");
}else{
echo "<script type='text/javascript'>alert('Wrong username or Password')</script>";
echo"<center><a href='login.php'>Login semula</a></center>";

}
}
?>