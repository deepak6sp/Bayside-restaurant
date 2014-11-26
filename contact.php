<?php include("includes/header.php") ?>
<?php
	// check for header injection to avoid hacking
	function has_header_injection($str){
		return (preg_match('/[\r\n]/',$str));
	} 
	// check for is not null
	if (isset($_POST['contact_submit'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = $_POST['message'];

		// check for name and email have header injection
		if (has_header_injection($name) || has_header_injection($email)){
			die();
		}

		if ( !$name || !$email || !$message){
			echo "<h4>All fields required</h4>";
			exit;
		}

		$to = "deepak6sp@gmail.com";
		$subject = "$name sent you a message via restaurant website";
		$message = "Name : $name\r\n";
		$message = "Email : $email\r\n";
		$message = "Message : $message ";

		//80 char per line whenn displayed
		$message = wordwrap($message, 80);

		//format email
		$headers = "MIME-Version:1.0\r\n";
		$headers .= "Content-type:text/plain; charset-iso-8859-1\r\n";
		$headers .="From: $name <$email> \r\n";
		$headers .="X-Priority:1\r\n";
		$headers .="X-MSMail-Priority:High\r\n";

		mail($to,$subject,$message,$headers);
?>
<!--  disply success message -->
<h4> Thanks for contacting bayside restaurant</h4>
<?php } else { ?>

	<form class ="form" method = "post" action="">
		<h3><label for="name">Name</label></h3> <input id="name" name="name" type="text" placeholder="Name">
		<h3><label for="email">Email</label></h3>  <input id="email" name="email" type="text" placeholder="example@mail.com">
		<h3><label for="message">Message</label></h3>  <textarea id="message" name="message" placeholder="Enter your message here"></textarea>
		<div id="subscribe">
			<input type="checkbox" id="subscrib">
			<h3><label for="subscrib">Subscribe to receive latest offers</label></h3>
		</div>
		<input id="submit" name="contact_submit" type="submit" value="Send Message"></submit>
	</form>

<?php } ?>
<?php  include("includes/footer.php"); ?>