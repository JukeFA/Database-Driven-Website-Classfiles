<?
mysql_connect("sql303.unaux.com", "unaux_23766826", "Startrek20!4");
mysql_select_db("unaux_23766826_Class");
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