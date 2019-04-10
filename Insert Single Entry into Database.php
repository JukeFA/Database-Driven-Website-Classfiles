<?
mysql_connect(".....", "....", "...");
mysql_select_db("...");
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