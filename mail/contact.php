<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "rushikeshtayade2001@gmail.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);

  $connection = mysql_connect("localhost:3306", "root", "170623"); // Establishing Connection with Server..
$db = mysql_select_db("healingd_queries", $connection); // Selecting Database
//Fetching Values from URL
//Insert query
$query = mysql_query("insert into Queries(Name, Email, Subject, Message) values ('$name', '$email', '$subject','$message')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>
