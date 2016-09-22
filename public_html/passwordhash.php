$salt = 'abc123';
$password = 'password';
echo shal1('password', $salt).<br />;
echo md5('password', $salt);
echo crypt('password', $salt);
