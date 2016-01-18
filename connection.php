<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: It has all the connection information to connect to the database
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             
        $hostname = "students"; 		//hostname
$username = "z1744852";				//username
$password = "19930717";			//password
$db = "z1744852";					//database

$conn = mysql_connect($hostname,$username,$password);		//connecting to the host
if (!$conn) {
die("could not connect to the database:" .mysql_error());		//display error on failure
}
//echo "Connected";
$db_selected = mysql_select_db($db, $conn);				//connecting to database
if (!$db_selected) {
die ("cannot use " . $db . mysql_error());				//display error on failure
}

        ?>
    </body>
</html>
