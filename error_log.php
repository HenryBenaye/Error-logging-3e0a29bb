<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Skatboard (#1)</h1>
    <h1>Basketbal (#2)</h2>
    <h1>Skeelers (#3)</h3>
    <form action="error_log.php" method="get">
        Keuze: <input type="number" name="keuze"> 
        <input type="submit">
    </form>
    
</body>
</html>

<?php   
session_start();
if(isset($_GET["keuze"]) && $_GET["keuze"] <= 3) {
    $_SESSION['keuze'] = $_GET["keuze"];
    echo"Gekozen item:". $_SESSION["keuze"];
} 
else {
    echo"Getal moet tussen de 1 en 3 zijn";
    error_log('foutmelding \n', 3, "errors.log.php");

}


?>