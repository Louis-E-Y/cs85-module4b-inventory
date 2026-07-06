<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
</head>
<body>


<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=inventory_db", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->query("SELECT * FROM items");
  $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($items as $item) {
        echo "<tr>";
        echo "<td>{$item['item_name']}</td>";
        echo "<td>{$item['quantity']}</td>";
        echo "</tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

</body>
</html>