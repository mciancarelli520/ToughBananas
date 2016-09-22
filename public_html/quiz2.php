Welcome to the Italian Cuisine!<br/>
<?php
$name = $_GET['Fname'];
echo $name."<br />";
$lname = $_GET ['Lname'];
echo $lname."<br />";
$password = '1B@nker!';
echo crypt($password)."<br /><br />";
$mail = $_GET['mail'];
echo "Your selected email is: ";
echo $mail ."<br />";
$at = strpos($mail,'@');
$name = substr(@mail,0, $at);

//echo $name;
$end = substr($mail, $at + 1);
$dot = strpos($end, '.');
//echo $dot. "<br />";
$po = substr($end, 0, $dot);
echo "Your email after the @: ";
echo $end . "<br /><br />";
echo "Your domain name: ";
echo $po . "<br /><br />";
$domain = substr($end, $dot + 1);
echo "Your email after the dot: ";
echo $domain ."<br /><br />";
if (isset ($_GET['val'])){
$food = $_GET['val'];
foreach ($food as $value) {
echo $value."<br />";
}
}
else {
?>
<script>
alert("Woah, we got an error here.");
window.history.go(-1);
</script>
<?php
}
$pay = $_GET['Payment'];
echo $pay;
?>
