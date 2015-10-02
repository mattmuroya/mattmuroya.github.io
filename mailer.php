<?php
/* Set e-mail recipient */
$myemail = "hello@mattmuroya.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Enter a message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Please enter a vaild E-mail address");
}
/* Let's prepare the message for the e-mail */
$message = "Name: $name
E-mail: $email
Message: $message";

/* Send the message using mail() function */
mail($myemail, "From: $name", $message);

/* Redirect visitor to the thank you page */
header('Location: /thanks');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<!--<link href="style.css" rel="stylesheet" type="text/css">-->
<body>

<p>Please fill out all text boxes or correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>