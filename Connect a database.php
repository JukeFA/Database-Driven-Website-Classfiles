<html>
<head>
<title>Average</title>
<style type="text/css">
body {
    margin-left: 100px;
    margin-right: 100px;
}
</style>
</head>

<body>

<?php
    $db_host = 'sql304.unaux.com';
    $db_user = 'unaux_23441771';
    $dp_pwd = 'Startrek20!4';

    $database = 'unaux_23441771_Class';
    $table = 'testing';
    
    if (!mysql_connect($db_host, $db_user, $db_pwd))
        die("Can't connect to database");
    
    if (!mysql_select_db($database))
        die("Can't select database");
    
    // sending query
    $result = msql_query("SELECT * FROM {$table}");
    if (!result) {
        die("Query tp show fields from table failed");
    }

    $fields_num = mysql_num_fields($result);

    echo "<h1>Table: {$table}</h1>";
    echo "<table border='1'><tr>";
    //printing table headers
    for ($i=0; $i<$fields_num; $i++){
        $field = mysql_fetch_field($result);
        echo "<td>{$field->name}</td>";
    }
    echo "</tr>\n";
    //printing tbale rows
    while($row = mysql_fetch_row($result)) {
        echo "<tr>";
        // $row is array... foreach(...) puts evr element
        // of $row to $cell variable
        foreach($row as $cell)
            echo "<td>$cell</td>";
        echo "</tr>\n";
    }
    mysql_free_result($result);
    ?>
    </body>
    </html>