<?php
// Here use procedural methods
$connection = mysqli_connect("127.0.0.1", "root", "root", "school", 8889);

if ($connection) {
    echo "Success connection!" . "<br>" . "<br>";
} else {
    die("Error connection!");
}

// Las dos formas de hacer lo mismo
$result = mysqli_query($connection, "SELECT 1 + 1 AS result");
$resul = $connection->query("SELECT 1 + 1 AS r");
//var_dump($result);
var_dump(mysqli_fetch_assoc($result));
echo '<br>';
//var_dump($resul->fetch_assoc());
echo '<br>';
//var_dump($resul->fetch_assoc()["r"]);
//var_dump($resul->fetch_object()->r);
//var_dump($resul->fetch_array()[0]);
//var_dump($resul);

echo "<br><br>Here!";
echo "<br><br>";
echo "$_POST[name]";

$sql = "INSERT INTO test (name) values ('$_POST[name]')";
if ($connection->query($sql)) {
    echo "Success!";
} else {
    echo "Error!";
}

mysqli_close($connection);
