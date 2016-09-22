<?php
echo "<form action = 'page2.php' method = 'get'>";
echo "Enter your name <input type = 'text' name = 'fred'><br />";
echo "Enter your last name <input type = 'text' name = 'wilma'><br />";
echo "Enter your password <input type = 'password' name = 'bacon'<br />";
echo "Enter your email <input type = 'text' name = 'email'<br />";
echo " A <input type = 'radio' name = 'barney' value = 'A'>";
echo " B <input type = 'radio' name = 'barney' value = 'B'>";
echo " C <input type = 'radio' name = 'barney' value = 'C'>";
echo " <input type = 'checkbox' name = 'val[]' value = 'Attack'> Attack&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Defend'> Defend&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Payload'> Payload&nbsp";
echo " <input type = 'checkbox' name = 'val[]' value = 'Control Point'> Control Point&nbsp";
echo "<select name = 'orange'>";
echo "<option 'Reinhart'>Reinhart</option>";
echo "<option 'Widowmaker'>Widowmaker</option>";
echo "<option 'Ana'>Ana</option>";
echo "<option 'McCree'>McCree</option>";
echo "<select>";
echo "<input type = 'submit' name = 'button' value = 'CLiCk mE '>";
echo "</form>";
$salt = 'abc123';
$password = 'password';
echo crypt($password, $salt)."<br />;
echo crypt('password', $salt);
?>

