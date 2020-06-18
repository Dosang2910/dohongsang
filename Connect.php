  
<?php
$conn_string="host=ec2-34-230-231-71.compute-1.amazonaws.com
 port=5432 dbname=ded7alp4u5mqju user=ijpijeqapxclai password=9ef3eff67cd4136b3848014df40ee35ff4dc2ed9d4c6cd8b8a253eb831b7a664";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Account WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
