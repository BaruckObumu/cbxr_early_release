	<body>
		
		<div id="main-cont">
			<div id="info">
				<h1 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; font-size: 2.7em">Early Sign Up</h1>
				<div class="inputs">
					<form action="index.php" method="POST">
						<input type="text" placeholder="username" class="text-input" name="username" />
						<input type="password" placeholder="password" class="text-input" name="password" />
						<input type="text" placeholder="email" class="text-input" name="email" />
						<input type="text" placeholder="first name" class="text-input" name="firstname" />
						<input type="text" placeholder="last name" class="text-input" name="lastname" />
						<input type="submit" name="s1" style="height: 35px; width: 85px;" value="submit" />
					</form>
				</div>
				<?php
					if(isset($_POST['username']) && isset($_POST['password']) 
						&& isset($_POST['email']) && isset($_POST['firstname'])){
							if(strpos($email, '@') !== false){
						
								 echo "<p style='color: #000; font-family: Arial;'>Thank you for applying $uname! It really means a lot. We'll be sure to send you your premium packages soon!</p>";
							}
						}
						else{

						}
				?>
				
			</div>
			<div id="para">
				<h1 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 2.7em;">What's Going On?</h1>
				<div class="paragraphs">
					<h2 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 1.7em;">
						1.) This is an early release</h2>
					<p style="font-family: Arial; color: #fff;">As proof that we will actually release this thing, and yes we are really making it. We are giving away a ton of free stuff to people who sign up early, such as premium membership, a lot of start up points, etc. etc.</p>
				    <h2 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 1.7em;">
						2.) How To Run</h2>
					<p style="font-family: Arial; color: #fff;">Currently, we're still in beta! So in order to run it here's what you need to do. First, download the file, then run the .jar using java, preferably java 7.</p>
					<br />
					<a style="margin-bottom: 25px;" href="index.php?p=chatroom" class="button">Chatroom</a>
					<br />
					<br />
					<br />
					<a href="http://up.ht/1n4p8EL" class="button">Download</a>
				</div>
			</div>
		</div>
		
		
	</body>