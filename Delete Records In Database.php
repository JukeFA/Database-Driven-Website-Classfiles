<?php
mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
mysql_select_db("unaux_23766826_mydatabase");
mysql_query("DELETE FROM ContactInfo WHERE FirstName = 'Sarah'")
or die(mysql_error());

echo "Completed!";
?>