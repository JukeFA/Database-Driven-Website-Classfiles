<?
mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
mysql_select_db("unaux_23766826_mydatabase");
$order = "INSERT INTO Contactinfo
    (FirstName)
    VALUES
    ('George Washington')";

$result = mysql_query($order);
if($result){
    echo("<br>Input is success");
} else {
    echo("<br>Input Failure.");
}
?>