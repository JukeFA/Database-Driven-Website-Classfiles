<?php
$email=$_POST['Email'];
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];

mysql_connect("sql111.unaux.com", "unaux_23772555", "lc9rfmooyz9") or die(mysql_error());
mysql_select_db("unaux_23772555_photography") or die(mysql_error());
mysql_query("INSERT INTO 'photolist' VALUES ('$email' , '$firstname', '$lastname', '$address', '$phone')");
Print "Your order has been placed";
?>