<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'ecertificate';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_url = 'http://localhost/eCertificate/';

if($config)
{
	echo "";
}
else
{
	echo "Failed to Connect".mysqli_connect_error();
}

?>