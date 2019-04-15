<?php
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];

mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9") or die(mysql_error());
mysql_select_db("unaux_23766826_Class") or die(mysql_error());
mysql_query("INSERT INTO 'StudentInfo' VALUES ('$firstname','$lastname','$address','$phone')");
Print "Your information has been successfully added to the database.";
?>