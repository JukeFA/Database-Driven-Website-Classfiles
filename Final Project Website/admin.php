<html>

<head>
<title>Average
</title>
<style type="text/css">
body {
	margin-left: 100px;
	margin-top: 100px;
}
</style>
</head>

<body>

<?php
   $db_host = "sql111.unaux.com";
   $db_user = "unaux_23772555";
   $db_pwd = "lc9rfmooyz9";

   $database = "unaux_23772555_photography";
   $table = "photolist";

if (!mysql_connect($db_host, $db_user, $db_pwd))
     die("Can't connect to database");

if (!mysql_select_db($database))
     die("Can't select database");

// sending query
 $result = mysql_query("SELECT * FROM {$table}");
 if (!$result) {
     die("Query to show fields from table failed");
 }

$fields_num = mysql_num_fields($result);


echo "<h1>Table: {$table}</h1>";
 echo "<table border='1'><tr>";
 // printing table headers
 for($i=0; $i<$fields_num; $i++)
 {
     $field = mysql_fetch_field($result);
     echo "<td>{$field->name}</td>";
 }
 echo "</tr>\n";
 // printing table rows
 while($row = mysql_fetch_row($result))
 {
     echo "<tr>";

    // $row is array... foreach( .. ) puts every element
     // of $row to $cell variable
     foreach($row as $cell)
         echo "<td>$cell</td>";

    echo "</tr>\n";
 }
 mysql_free_result($result);
?>

 <form>
    Email: <input type="email" name="Email"><br>

<?php
        $email=$_POST['Email'];
        mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
        mysql_select_db("unaux_23766826_mydatabase");
        mysql_query("DELETE FROM testing WHERE Eamil='$email'")
        or die(mysql_error());
        echo "Completed!";
    ?>

</body>
</html>