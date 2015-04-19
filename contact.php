<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if ($name == "" OR $email == "" OR $message == "") {
		echo "You must specify a value for name, email address and message.";
		exit;
	}

	require_once("inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer;

	if (!$mail->validateAddress($email)){
		echo "You must specify a valid email address.";
		exit;
	}

	$email_body ="";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message;

	$mail->setFrom($email, $name);
	//Set an alternative reply-to address
	$address = "cfiedler@bu.edu";
	$mail->addAddress($address, 'Neil Fiedler');
	//Set the subject line
	$mail->Subject = 'Popsyoga Contact Form Submission | ' . $name;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML ($email_body); 
	// (file_get_contents('contents.html'), dirname(__FILE__));

	if (!$mail->send()) {
	    echo "There was a problem sending the email: " . $mail->ErrorInfo;
	    exit;
	} 

	header("Location: contact.php?status=thanks");
	exit;
}

?>
<?php 
$pageTitle = "Contact";
$section = "contact";
include("inc/header.php"); ?>


			<h1>Contact</h1>

			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") {  ?>
				<p>Thanks for email!  I&rsquo;ll be in touch shortly.</p>
			<?php } else { ?>

			<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

			<form method="post" action="contact.php">

				<table>
					<tr>
						<th>
							<label for="name">Name</label> 
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for="email">Email</label> 
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for="message">Message</label> 
						</th>
						<td>
							<textarea name="message" id="message"></textarea> 
						</td>
					</tr>
				</table>

				<input type="submit" value="Send">
			</form>

			<?php } ?>

		</div>

	</div>

<?php include('inc/footer.php'); ?>