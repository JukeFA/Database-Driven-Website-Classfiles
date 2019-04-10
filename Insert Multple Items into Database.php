<?
mysql_connect(".....", "....", "...");
mysql_select_db("...");

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