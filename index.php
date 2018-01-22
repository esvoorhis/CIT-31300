<html>
<head>
    <title>CIT313 - Spring 2018 - Exercise 1 - Emily Voorhis</title>
</head>
<body>
<?php
$name =  "Emily Voorhis";
$facts = array("color" => "black", "movie" => "Practical Magic",
"book" => "Neverwhere", "website" => "https://www.wikipedia.org/");

echo"<h1>{$name}</h1>";
foreach($facts as $key => $item) {
echo"My favorite $key is $item. <br/>";}
?>
</html>

