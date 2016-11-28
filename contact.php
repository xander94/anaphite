<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = '94xander@gmail.com';
$subject = 'Message from a site visitor'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

//:via => :smtp,
//      :via_options => {
//        :address              => 'smtp.sendgrid.net',
//        :port                 => '587',
//        :enable_starttls_auto => true,
//        :user_name            => ENV['SENDGRID_USERNAME'],
//        :password             => ENV['SENDGRID_PASSWORD'],
//        :authentication       => :plain,
//        :domain               => 'heroku.com'
//      }

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to info@anaphite.com');
		window.location = 'index.html';
	</script>
<?php
}
?>