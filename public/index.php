<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title>untitled</title>
</head>
<body>
<?php
require_once('..\includes\database_connections.php');

$databaseConnection = new DatabaseConnections();
$databaseConnection->insertASubject("About Us",1,1);

$databaseConnection->queryNamesOfSubjects();



?>



</body>
</html>
