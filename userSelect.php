<?php
$server = "node75223-env-3316660.whelastic.net";
$username = "root"
$password = "IKPlfz73522";
$db = "mydb";

$sql = "select username, email, password from users";
$result = mysqli_query($connect, $sql);

echo "El número de filas de la tabla users es: ".mysqli_num_rows($result);

?>
