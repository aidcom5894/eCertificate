<?php 

$hostname = 'localhost';
$username = 'u445536153_certAdmin';
$password = '?Lp:6;&s2U9+wNB3LlY';
$dbname = 'u445536153_ecertificate';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_url = 'https://ecertificate.aidcom.in/';

if($config)
{
	echo "";
}
else
{
	echo "Failed to Connect".mysqli_connect_error();
}

?>