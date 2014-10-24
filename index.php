<?php
require_once('require/connections.php');
foreach(glob("includes/*.php") as $filename){
			 require_once($filename);
}
			
			if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['firstname'])){
				$uname = $_POST['username'];
				$pword = $_POST['password'];
				$email = $_POST['email'];
				$fname = $_POST['firstname'];
				$lname = $_POST['lastname'];
			if(strpos($email, '@') !== false){

				strip_tags($uname);
				strip_tags($pword);
				strip_tags($email);
				strip_tags($fname);
				strip_tags($lname);
			
			
				$hash_pword = cryptPass($pword);


				mysqli_query($connection,"INSERT INTO info (username, password, email, firstname, lastname)
				VALUES ('$uname', '$hash_pword', '$email', '$fname', '$lname')");

				$emailsender = sendemail($email);
				}else{
					echo '<script type="text/javascript"> alert("the information you entered is invalid"); </script>';
					}
				}

	if(isset($_GET['p'])){
		$p = $_GET['p'];
	}else if(isset($_POST['p'])){
		$p = $_POST['p'];
	} else {
		$p = null;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<?php
		include('require/head.php');

		include('require/header.php');
		
		switch($p){
			case 'chatroom':
				$page = 'chatroom.php';
			break;

			default:
				$page = 'body.php';
			break;
		}

		include('pages/' . $page);

		include('require/footer.php');
	?>
</html>
