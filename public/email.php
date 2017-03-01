
<?php

$first_first_name = $_POST['first_name'];
$filed_last_name = $_POST['last_name'];
$field_message = $_POST['message'];
$field_email = $_POST['email'];

$mail_to = 'thanh.t.tran1301@gmail.com';
$subject = 'Message from a site visitor '.$first_first_name." ".$filed_last_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: Explore Interactive Inquiry';

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'contact.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message failed. Please, send an email to gordon@template-help.com');
        window.location = 'contact.html';
    </script>
<?php
}
?>
