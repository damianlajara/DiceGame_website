<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	//Trim() deletes trailing whitespace from the beginning and end of the string
	//ie: If someone hits enter, instead of entering a value or enters a space, the trim will take care of that
	$firstname = trim($_POST["firstname"]);
	$lastname = trim($_POST["lastname"]);
	$name = $firstname . " " . $lastname;
	$email = trim($_POST["email"]);
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);


    if($firstname == "" OR $lastname == "" OR $email == "" OR $username = "" OR $password = "")
    {//If name or email doesnt have a value...
        $error_message = "You must specify a value for name, email address and message.";
        echo $error_message;
        exit();
    }

    if(!isset($error_message))
    {
        foreach( $_POST as $value)
        {//Anti-Email Header Injection Exploit attack code to prevent hackers from attacking us
            //code got from nyphp.org/phundamentals/8_Preventing-Email-Header-Injection; Read more about it there.
            if( stripos($value, 'Content-Type:') !== FALSE)//Checks $_POST array 1 element at a time 2 c if it contains malicious values
            {
                $error_message = "There was a problem with the information you entered";
                echo $error_message;
                exit();
            }
        }
    }
	//If it has not already encountered an error and If it is not blank, then we assume an evil hacker robot is trying to hack our page
    if(!isset($error_message) AND ($_POST["firstname"] !== "" AND $_POST["lastname"] !== "" AND $_POST["email"] !== "" AND $_POST["username"] !== "" AND $_POST["password"] !== ""))
    {
        $error_message = "Your form submission has an error.";
        echo $error_message;
        exit();
    }
    echo "Is the following information correct?" . "<br />"; 
    echo "Name: " . $name . "<br />"; 
	echo "Email: " . $email . "<br />"; 
	echo "Username: " . $username . "<br />"; 
	echo "Password: " . $password . "<br />"; ?>

	<form id="confirmation" method="get" action="confirmation.php">
		<p>
			<input type="radio" name="confirm" value="yes">Yes
			<input type="radio" name="confirm" value="no">No <br />
			<input type="submit" name="submit" value="submit form">
		</p>
	</form>
	<?php } ?>











