<?php
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];

mysql_connect(".....", "....", "...") or die(mysql_error());
mysql_select_db("..."); or die(mysql_error());
mysql_query("INSERT INTO 'StudentInfo' VALUES ('$firstname','$lastname','$address','$phone')");
Print "Your information has been successfully added to the database.";
?>