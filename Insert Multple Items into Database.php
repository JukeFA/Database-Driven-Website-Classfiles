<?
mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
mysql_select_db("unaux_23766826_mydatabase");

$order = "INSERT INTO Contactinfo
    (FirstName, LastName, Address, Phone)
    VALUES
    ('Sarah', 'Humphrey', '30 Main Street', '867-5309')";

$result = mysql_query($order);
if($result) {
    echo("<br>Input data success.");
} else {
    echo("<br>Input failure");
}
?>