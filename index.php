<?php
echo "<h1>testen</h1>";

echo "<a href='new.php'>Nieuw</a>";
echo "<table style='border: solid 1px black;'>";
$id = 'id';
$adress= 'adress';
$email = 'email';
$phone = 'phone';
echo '<tr><th>'.$id.'</th><th>'.$adress.'</th><th>'.$email.'</th><th>'.$phone.'</th><th>name</th><th>postalZip</th><th>region</th><th>country</th><th>Action</th></tr>';

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

include_once ('openDB.php');

try {
  $stmt = $conn->prepare("SELECT * FROM myTable");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
    if ($k=='id') {
      $id = strip_tags($v);
    }
    if ($k=='country') {
      echo '<td><a href=\'delete.php?id=\'' .$id.'>X</a></td>';
    }
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

echo "<a href='new.php'>Nieuw</a>";
?>
