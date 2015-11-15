<?php

/*
 * PHP code for creating a new profile using HTTP requests.
 */


header('Content-type: application/json');


// array for JSON response
$response = array();
$action = $_GET['action'];
if($action == 1){
$username = $_GET['username'];
$activation = $_GET['activation'];
$installation = $_GET['installation'];
$password = $_GET['password'];
$results = $_GET['results'];
$wfield1 = $_GET['wfield1'];
$wfield2 = $_GET['wfield2'];
$wfield3 = $_GET['wfield3'];
$wfield4 = $_GET['wfield4'];
$id = $_GET['id'];
}

/*
$dsn = 'mysql:dbname=movert;host=127.0.0.1';
$user = 'movert';
$password = 'movert123;';
$dbh = new PDO($dsn, $user, $password);*/ 


$dsn = 'mysql:dbname=school;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);  


switch ($action) {
    case 1:

        addNotification();

        break;

    case 2:

        findNotification();
        break;


    default:
        break;
}

function findCount($sql) {
    global $dbh;
    $total = 0;
    foreach ($dbh->query($sql) as $row) {
        $total = $total + 1;
    }
    return $total;
}

function addNotification() {
    global $dbh,
$action,
$username ,
$activation,
$installation ,
$password ,
$results ,
$wfield1 ,
$wfield2 ,
$wfield3 ,
$wfield4 ,
$id;



    $verifySQL = "SELECT * FROM notifications WHERE username ='$username'";
    $message = "";
    if (findCount($verifySQL) <= 0) {

        $sql = "INSERT INTO notifications (
   `username` ,`activation`,`installation`, `password`, `results`, `wfield1`, `wfield2`, `wfield3`, `wfield4`,) "
                . "VALUES('$username', '$activation', '$installation', '$password'"
                . ",'$results', '$wfield1', '$wfield2', '$wfield3', '$wfield4'";

 	//   echo $sql;

        $db_result = $dbh->query($sql);

        $response["success"] = 1;
        $response["message"] = 'Notification sent successfully';
   } else {
        $response["success"] = 0;
        $response["message"] = 'Notification already exists';
    }

    echo json_encode($response);
}

function findNotification() {

global $dbh;
 

    //query to check if posted email already exists or not
    $sql = "SELECT * FROM notifications";
   //  echo $sql ;
    $result = $dbh->query($sql);
    $response["notifications"] = array();
    foreach ($result as $row) {

        $notifications = array();
        $notifications ["id"] = $row["id"];
        $notifications ["username"] = $row["username"];
        $notifications ["activation"] = $row["activation"];
        $notifications ["installation"] = $row["installation"];
        $notifications ["password"] = $row["password"];
        $notifications ["results"] = $row["results"];
        $notifications ["wfield1"] = $row["wfield1"];
        $notifications ["wfield2"] = $row["wfield2"];
        $notifications ["wfield3"] = $row["wfield3"];
        $notifications ["wfield4"] = $row["wfield4"];

        array_push($response["notifications"], $notifications);
    }


    echo json_encode($response);
}



?>