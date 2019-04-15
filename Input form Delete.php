<html>
<head>
<title>Input Delete</title>
<style type="text/css">
body {
    margin-left: 100px;
    margin-right: 100px;
}
</style>
</head>

<body>
    <?php
        $name=$_POST['name'];
        mysql_connect("sql303.unaux.com", "unaux_23766826", "73oj1ns9");
        mysql_select_db("unaux_23766826_mydatabase");
        mysql_query("DELETE FROM testing WHERE FirstName='$name'")
        or die(mysql_error());
        echo "Completed!";
    ?>
</body>
 </html>