<?php

require_once "openDB.php";

echo '<h1>Nieuwe regel toevoegen</h1>';

if ($_POST) {
    echo "<h2>regel toevoegen.</h2>";
}

// formulier aanmaken
echo "
 <form action=\"new.php\" method='post'>
  <label for=\"fname\">name:</label><br>
  <input type=\"text\" id=\"name\" name=\"name\"><br>
  <label for=\"adress\">adress:</label><br>
  <input type=\"text\" id=\"adress\" name=\"adress\"><br>
  <label for=\"email\">email:</label><br>
  <input type=\"text\" id=\"email\" name=\"email\"><br>
  <label for=\"phone\">phone:</label><br>
  <input type=\"text\" id=\"phone\" name=\"phone\"><br>
  <label for=\"postalZip\">postalZip:</label><br>
  <input type=\"text\" id=\"postalZip\" name=\"postalZip\"><br>
  <label for=\"region\">region:</label><br>
  <input type=\"text\" id=\"region\" name=\"region\"><br>
  <label for=\"country\">country:</label><br>
  <input type=\"text\" id=\"country\" name=\"country\"><br><br>
  <input type=\"submit\" value=\"Wegschrijven\">
</form> 

<a href='index.php'>terug naar begin</a>
";