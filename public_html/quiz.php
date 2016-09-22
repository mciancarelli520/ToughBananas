<?php
echo "<form action = 'quiz2.php' method = 'get'>";
echo "Please enter your first name <input type = 'text' name = 'Fname'><br />";
echo "Please enter your last name <input type = 'text' last name = 'Lname'><br />";
echo "Enter your e-mail <input type = 'text' name  = 'mail'><br />";
echo "Enter your account password <input type = 'password' name = '1B@nker!'><br />";
echo " Male <input type = 'radio' name = 'gender' value = 'Male'>";
echo " Female <input type = 'radio' name = 'gender' value = 'Female'><br />"; 
echo " <input type = 'checkbox' name = 'val[]' value = 'Shrimp Scampi'> Shrimp Scampi&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Chicken Fingers'> Chicken Fingers&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Salmon Salad'> Salmon Salad&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Burger'> Burger&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Chef Special'> Chef Special<br />";
echo "<select name = 'Payment'>";
echo "<option 'Cash'>Cash</option>";
echo "<option 'Check'>Check</option>";
echo "<option 'Visa'>Visa</option>";
echo "<option 'American Express'>American Express</option>";
echo "<input type = 'submit' value = 'Submit Order'>";
?>
