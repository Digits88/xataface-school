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
$balance = $_GET['balance'];
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

        addPayment();

        break;

    case 2:

        findPayment();
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

function addPayment() {
    global $dbh,
$action,
$username ,
$activation,
$installation ,
$password ,
$balance ,
$wfield1 ,
$wfield2 ,
$wfield3 ,
$wfield4 ,
$id;



    $verifySQL = "SELECT * FROM payments WHERE username ='$username'";
    $message = "";
    if (findCount($verifySQL) <= 0) {

        $sql = "INSERT INTO payments (
   `username` ,`activation`,`installation`, `password`, `balance`, `wfield1`, `wfield2`, `wfield3`, `wfield4) "
                . "VALUES('$username', '$activation', '$installation', '$password'"
                . ",'$balance', '$wfield1', '$wfield2', '$wfield3', '$wfield4')";

 	//   echo $sql;

        $db_result = $dbh->query($sql);

        $response["success"] = 1;
        $response["message"] = 'Payments information sent successfully';
   } else {
        $response["success"] = 0;
        $response["message"] = 'Payments information already exists';
    }

    echo json_encode($response);
}

function findPayment() {

global $dbh;
 

    //query to check if posted email already exists or not
    $sql = "SELECT * FROM payments";
   //  echo $sql ;
    $result = $dbh->query($sql);
    $response["payments"] = array();
    foreach ($result as $row) {

        $payments = array();
        $payments ["id"] = $row["id"];
        $payments ["username"] = $row["username"];
        $payments ["activation"] = $row["activation"];
        $payments ["installation"] = $row["installation"];
        $payments ["password"] = $row["password"];
        $payments ["balance"] = $row["balance"];
        $payments ["wfield1"] = $row["wfield1"];
        $payments ["wfield2"] = $row["wfield2"];
        $payments ["wfield3"] = $row["wfield3"];
        $payments ["wfield4"] = $row["wfield4"];

        array_push($response["payments"], $payments);
    }


    echo json_encode($response);
}



?>