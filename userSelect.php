<?php
$server = "node75223-env-3316660.whelastic.net";
$username = "root"
$password = "IKPlfz73522";
$db = "mydb";

$sql = "select username, email, password from users";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){
	while($row = mysql_fetch_assoc($result)){
		echo "username:".$row['username']."|email:".$row['email']."|password:".$row['password'].";";	
	} 
}
?>
