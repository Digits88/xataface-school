<?php
header('Content-type: application/json');

$response = array();

$host = 'localhost';
$username = 'root';
$userpassword = '';
$dbname = 'school';

$con = mysqli_connect($host, $username, $userpassword, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM homework WHERE username='$username'";
$result=mysqli_query($con, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count == 1){
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['password']){ 
        $response['success'] = 1;
        echo "Login Successful";
        return true;
    }
    else {
    	$response['success'] = 0; 
        echo "Wrong Username or Password";
        return false;
    }
}
else{
    echo "Wrong Username or Password";
    return false;
    echo json_encode($result);
}



?>