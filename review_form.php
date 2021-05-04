<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Netland</title>
</head>
<body>
<style>

body {
    font-weight: bold;
}
form { 
    display: table;      
}
p { 
    display: table-row; 
}
label { 
    display: table-cell; 
}
input { 
    display: table-cell; 
}
#omschrijving {
    vertical-align: middle;
}

</style>

<?php

include('db_connection.php');

$stmt = $db->prepare("SELECT * FROM cv_website");
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$formNaam = $row['naam'];
$formEmail = $row['email'];
$formFunctie = $row['functie'];
$formDatum = $row['datum'];
$formComment = $row['commentaar'];
$formRatingCv = $row['rating_cv'];
$formRatingWebsite = $row['rating_website'];

?>
<a href="index.php">Terug </a>
<br>
<br>
<h1> Beoordeling Form </h1>
<br>
<br>
<form action="review_form_stmt_insert.php" method="post">
<p>
    <label for="naam"> Naam: </label>
    <input id="naam" type="text" name="naam">
</p>
<p>
    <label for="email"> Email: </label>
    <input id="email" type="text" name="email">
</p>
<p>
    <label for="functie"> Functie: </label>
    <input id="functie" type="text" name="functie">
</p>
<p>
    <label for="datum"> Datum: </label>
    <input id="datum" type="text" name="datum" value="yyyy/mm/dd">
</p>
<p>
    <label for="commentaar"> Commentaar/Feedback: </label>
    <textarea id="commentaar" type="text" name="commentaar" rows="8" cols="50"></textarea>
</p>
<p>
    <label for="rating_cv"> Beoordeling CV: </label>
    <input type="text" name="rating_cv">
</p>
<p>
    <label for="rating_website"> beoordeling Website: </label>
    <input type="text" name="rating_website">
</p>
    <input type="submit" name="submit" value="OK">
</form>
</body>
</html>