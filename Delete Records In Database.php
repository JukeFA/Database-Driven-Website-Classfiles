<?php
mysql_connect(".....", "....", "...");
mysql_select_db("...");
mysql_query("DELETE FROM ContactInfo WHERE FirstName = 'Sarah'")
or die(mysql_error());

echo "Completed!";
?>