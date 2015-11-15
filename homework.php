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
$subject = $_GET['subject'];
$studentclass = $_GET['studentclass']; 
$description = $_GET['description'];
$teacher = $_GET['teacher'];
$assignedDate = $_GET('assignedDate');
$dueDate = $_GET('dueDate');
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

        addHomework();

        break;

    case 2:

        findHomework();
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

function addHomework() {
    global $dbh,
$action,
$username ,
$activation,
$installation ,
$password ,
$subject ,
$studentclass,
$description,
$teacher,
$assignedDate,
$dueDate,
$wfield1 ,
$wfield2 ,
$wfield3 ,
$wfield4 ,
$id;



    $verifySQL = "SELECT * FROM homework WHERE username ='$username'";
    $message = "";
    if (findCount($verifySQL) <= 0) {

        $sql = "INSERT INTO homework (
   `username` ,`activation`,`installation`, `password`, `subject`, `studentclass`, `description`,`teacher`, `assignedDate`, `dueDate`, `wfield1`, `wfield2`, `wfield3`, `wfield4`) "
                . "VALUES('$username', '$activation', '$installation', '$password'"
                . ",'$subject', '$studentclass', '$description', '$teacher', '$assignedDate', '$dueDate', '$wfield1', '$wfield2', '$wfield3', '$wfield4' )";

    //   echo $sql;

        $db_result = $dbh->query($sql);

        $response["success"] = 1;
        $response["message"] = 'Homework sent successfully';
   } else {
        $response["success"] = 0;
        $response["message"] = 'Homework already exists';
    }

    echo json_encode($response);
}

function findHomework() {

global $dbh;
 

    //query to check if posted email already exists or not
    $sql = "SELECT * FROM homework";
   //  echo $sql ;
    $result = $dbh->query($sql);
    $response["homework"] = array();
    foreach ($result as $row) {

        $homework = array();
        $homework ["id"] = $row["id"];
        $homework ["username"] = $row["username"];
        $homework ["activation"] = $row["activation"];
        $homework ["installation"] = $row["installation"];
        $homework ["password"] = $row["password"];
        $homework ["subject"] = $row["subject"];
        $homework ["studentclass"] = $row["studentclass"];
        $homework ["description"] = $row["description"];
        $homework ["teacher"] = $row["teacher"];
        $homework ["assignedDate"] = $row["assignedDate"];
        $homework ["dueDate"] = $row["dueDate"];
        $homework ["wfield1"] = $row["wfield1"];
        $homework ["wfield2"] = $row["wfield2"];
        $homework ["wfield3"] = $row["wfield3"];
        $homework ["wfield4"] = $row["wfield4"];

        array_push($response["homework"], $homework);
    }


    echo json_encode($response);
}



?>