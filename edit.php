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
        $stmt = $conn->prepare("SELECT * FROM myTable WHERE id=$id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $k => $v) {
            $email = $v['email'];
            $name = $v['name'];
            $postalZip = $v['postalZip'];
            $address = $v['address'];
            $phone = $v['phone'];
            $region = $v['region'];
            $country = $v['country'];
            echo "
             <form action=\"edit.php\" method='post'>
              <label for=\"id\">id:</label><br>
              <input type=\"text\" id=\"id\" name=\"id\" value='$id'><br>
              <label for=\"fname\">name:</label><br>
              <input type=\"text\" id=\"name\" name=\"name\" value='$name'><br>
              <label for=\"address\">address:</label><br>
              <input type=\"text\" id=\"address\" name=\"address\" value='$address'><br>
              <label for=\"email\">email:</label><br>
              <input type=\"text\" id=\"email\" name=\"email\" value='$email'><br>
              <label for=\"phone\">phone:</label><br>
              <input type=\"text\" id=\"phone\" name=\"phone\" value='$phone'><br>
              <label for=\"postalZip\">postalZip:</label><br>
              <input type=\"text\" id=\"postalZip\" name=\"postalZip\" value='$postalZip'><br>
              <label for=\"region\">region:</label><br>
              <input type=\"text\" id=\"region\" name=\"region\" value='$region'><br>
              <label for=\"country\">country:</label><br>
              <input type=\"text\" id=\"country\" name=\"country\" value='$country'><br><br>
              <input type=\"submit\" value=\"Wegschrijven\">
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
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $postalZip = $_POST['postalZip'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE myTable 
                    SET 
                        name='$name', 
                        address='$address',
                        country='$county',
                        phone='$phone',
                        region='$region',
                        postalZip='$postalZip',
                        email='$email'
                WHERE id=$id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
