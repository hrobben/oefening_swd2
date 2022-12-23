<?php

// file been called by /delete.php?id={id}   $_GET['id']
echo '<h1>Update van id ' . $_GET['id'] . '<h1>';

include_once('openDB.php');

echo "<p><a href='index.php'>terug naar index</a></p>";

if ($_GET['id']) {
    $id = $_GET['id'];
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM $tbl WHERE id=$id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $k => $v) {
            // values fill
            foreach ($table_fields as $row) {
                if ($row <> 'id') {
                    $$row = $v[$row];
                }
            }
            // form
            echo "<form action=\"edit.php\" method='post'>
                  <input type='hidden' name='id' value=$id>
                 ";
            foreach ($table_fields as $row) {
                if ($row <> 'id') {
                    echo "<label for=\"$row\">$row:</label><br>
                          <input type=\"text\" id=\"$row\" name=\"$row\" value='" . $$row . "'><br>";
                }
            }
            // submit
            echo "<br><input type=\"submit\" value=\"Wegschrijven\">
                  </form> 
                  <a href='index.php'>Terug naar index</a>
                 ";
        }

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

if ($_POST) {
    try {
        foreach ($table_fields as $row) {
            $$row = $_POST[$row];
        }

        $sql = "UPDATE $tbl SET ";
        foreach ($table_fields as $row) {
            if ($row <> 'id') {
                $sql .= "$row = '" . $$row . "',";
            }
        }
        $sql = substr_replace($sql, "", -1);  // laatste komma weg.
        $sql .= "WHERE id = $id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . " < br>" . $e->getMessage();
    }

    $conn = null;
}
