<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="php_styles.css" type="text/css" />
<body>
<?php
$from = "Michael Ciancarelli <mciancarelli35@southhills.edu>";
$to = "mciancarelli35@southhills.edu";
$subject = " Arabic Prince (Not Spam!) ";
$message = " I challenge you to a coffee brewing contest. Strongest cup of coffee wins! ";
$headers =  "from: $from\r\n"; 
$headers .= "MIME-Verison: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$messagesent = mail($to, $subject, $message, $headers);
if ($messagesent){

	echo "<p>The following message was sent successfully:</p><hr />";
	echo "<p><strong>From</strong>: $from</p>";
	echo "<p><strong>To</strong>: $to</p>";
	echo "<p><strong>Subject</strong>: $subject</p>";
	echo "<p><strong>Message</strong>: $message</p>";

}
else
echo "<p>The message was not sent successfully!</p>";

?>
<hr /><p><a href="phpemail.html">Return to E-Mail Form</a></p>
$Florida = "Miami is in Florida.";
$Cuba = "Havana is in Cuba.";
if ($Florida == $Cuba)"
	echo "<p>Same Location.</p>
else	
	echo "<p>Different Location.</p>";
$FirstLetter = "A";
$SecondLetter = "B";
	if ($SecondLetter > $FirstLetter)
		echo "<p>The second letter is higher in the alphbet than the first letter.</p>";
	else
		echo "<p> The second letter is lower in the alphabet than the first letter</p>";
function checkForDuplicates($Addresses) {
	$Address = explode(",", $Addresses);
	$Count = count($Address);
	$RetValue = false;
$i = 0;
		while ($j<$Count) {
			if ($Address[$i] == $Address[$j] && $i != $j)
				$RetValue = true;
			++$j;
		)
		++$i;
	)
	return $RetValue;
}

else if (checkForDuplicates($to) == true)
	echo "<p>The \"To\" e-mail addresses contain duplicates. Click your browser's Back button to return to the message.</p>."; 
