<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Reviews</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>

body {
    font-weight: bold;
}

</style>

<?php

include('db_connection.php');

$stmt = $db->prepare("SELECT naam, email, functie, datum, rating_cv, rating_website FROM formulier");
$stmt->execute();

$stmtTotalCv = $db->prepare("SELECT SUM(rating_cv) AS totalCv FROM formulier");
$stmtTotalCv->execute();

$stmtTotalWebsite = $db->prepare("SELECT SUM(rating_website) AS totalWebsite FROM formulier");
$stmtTotalWebsite->execute();


?>

<h1> Beoordelingen </h1>
<br>
<br>
<h2> Lijst </h2>
<?php
    echo "Totale cv cijfer: " . $stmtTotalCv;
    echo "Totale Website cijfer: " . $stmtTotalWebsite
?>
<div class="container">

<div class="item" style="width: 60%;">
<h2>Reviews</h2>
<table style="width: 100%; height: 300px;">
    <tr>
        <th> Naam </th>
        <th> Email </th>
        <th> Functie </th>
        <th> Datum</th>
        <th> Rating van CV</th>
        <th> Rating van Website</th>
    </tr>
    <tr>
<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $naam = $row['naam'];
    $email = $row['email'];
    $functie = $row['functie'];
    $datum = $row['datum'];
    $ratingCv = $row['rating_cv'];
    $ratingWebsite = $row['rating_website'];

    echo "<td>" . $naam . "</td> <td>" . $email . "</td> <td>" . $functie . "</td> <td>" . $datum . "</td> <td>" . $ratingCv . "</td> <td>" . $ratingWebsite . "</td> <tr>";
}

?>

    </tr>
</table>
</div>
</div>
</body>
</html>