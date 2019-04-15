<?php
mysql_connect("sql303.unaux.com", "unaux_23766826", "Startrek20!4");
mysql_select_db("unaux_23766826_Class");
mysql_query("DELETE FROM ContactInfo WHERE FirstName = 'Sarah'")
or die(mysql_error());

echo "Completed!";
?>