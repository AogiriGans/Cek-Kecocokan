<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Kecocokan</title>
<style>
  h1 {
    text-align: center;
  }
</style>
</head>
<body>
<h1>Hasil Kecocokan</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name1 = $_POST['name1'];
  $name2 = $_POST['name2'];

  $matchPercentage = rand(0, 100);

  echo "<p>Kecocokan antara $name1 dan $name2 Adalah : $matchPercentage%</p>";

  if ($matchPercentage <= 30) {
    echo "<p>Kalian tidak cocok.</p>";
  } elseif ($matchPercentage <= 70) {
    echo "<p>Hampir cocok!</p>";
  } else {
    echo "<p>Kalian sangat cocok!</p>";
  }
}
?>
</body>
</html>