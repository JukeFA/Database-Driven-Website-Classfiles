<?php
mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
mysql_select_db("unaux_23766826_mydatabase");

mysql_query("CREATE TABLE  BOB(
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
        name VARCHAR(30),
        age INT)"),
        or die(mysql_error());

echo "Table Created!";
?>