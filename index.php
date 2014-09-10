<?php
require_once('includes/require/connections.php');
foreach(glob("includes/*.php") as $filename){
			 require_once($filename);
}

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['firstname'])){
$uname = $_POST['username'];
$pword = $_POST['password'];
$email = $_POST['email'];
$fname = $_POST['firstname'];

$hash_pword = cryptPass($pword);


mysqli_query($connection,"INSERT INTO users.info (username, password, email, firstname)
VALUES ('$uname', '$hash_pword', '$email', '$fname')");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<?php
		require_once('includes/require/head.php');
		require_once('includes/require/body.php');
	?>
</html>
