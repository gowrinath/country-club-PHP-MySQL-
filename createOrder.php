<html>
<head>
<title> Create Order </title>
</head>
<body>
<?php
require 'coursesDB.php';

$ono = mysql_query("SELECT DISTINCT id as id FROM parts_selected")
		or die(mysql_error());
$id = mysql_fetch_array($ono);

$cdate = mysql_query("SELECT CURDATE() AS date")
		or die(mysql_error());
$date = mysql_fetch_array($cdate);
echo $date['date']."<br>";

echo "Your Order is confirmed. Please note the order number for further communication: ".$id['id']."<br>";
mysql_query("INSERT INTO ordHead(ordno, ordStat, ordDate) VALUES(".$id['id']. ", 'A' ,CURDATE())")
	or die(mysql_error());

$data = mysql_query("SELECT * FROM parts_selected")
		 or die(mysql_error());
$cost = 0;		
while($info = mysql_fetch_array($data)){
	$q = $info['ord_qty'];
	$p = $info['price'];
	$cost += ($q * $p);
	mysql_query("INSERT INTO ordDetail(ordno, itemno, ord_qty, price) VALUES(". $id['id']. "," .$info['number']. ",". $q. ",". $p.")");
}
?>
</body>
</html>