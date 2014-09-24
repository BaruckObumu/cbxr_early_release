	<body>
		<div id="header-wrapper">
			<div class="mask">
				<div id="logo">
					<a style="text-decoration: none;font-family: 'VT323', Arial;font-size: 1.4em; margin: 0;padding: 0; color: #fff;" href="index.php">
					<h1 style="margin: 0; padding: 0;">
					[Chat<span class="black">Boxer</span>] <span class="smaller">(beta release edition)</span></h1>
					</a>
				</div>
			</div>
		</div>
		
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
						<input type="submit" style="height: 35px; width: 85px;" value="submit" />
					</form>
				</div>
				<?php
					if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['firstname'])){
						
				 echo "<p style='color: #000; font-family: Arial;'>Thank you for applying $uname! It really means a lot. We'll be sure to send you your premium packages soon!</p>";

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
						2.) We're asking for support</h2>
					<p style="font-family: Arial; color: #fff;">We are also accepting any donations made to us, if you feel generous enough to do so, you can donate by clicking the button below! Thanks a lot by the way.</p>
					<br />
					<a href="https://www.facebook.com/Chatboxer121" class="button">Donate</a>
				</div>
			</div>
		</div>
		
		<div id="footer">
			<div class="mask">
				<div id="logo">
					<h1 style="font-family: 'VT323', Arial; font-size: 2.7em; margin: 0;padding: 10px; color: #fff;">
					[Thanks <span class="blue">Bro</span>]</h1>
				</div>
				<p style="margin-left: 100px; width: 650px; font-family: Arial; color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;Thank you very, very much for supporting chatboxer, FTO CO, and our ultimate plan for world domination, it really means a lot. The help and support we get from others really does make a huge impact on our staff and our progress. If you would like to contact us, just message our facebook page, we'll reply to anything, even troll messages. If you're interested in joining the development team, and making huge bank, send us what you feel you would do best for us, and a little of your background. Until next time, thanks again! <br /> <br /> &nbsp;&nbsp;&nbsp;&nbsp;- ChatBoxer Dev Team</p>
				
			</div>
		</div>
	</body>