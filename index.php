<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tes Kecocokan?</title>
<style>
  form {
    width: 50%;
    margin: 0 auto;
    text-align: center;
  }
  input[type="text"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
  }
</style>
</head>
<body>
<h1>Cek Kococokan Pasangan</h1>
<form action="generate.php" method="post">
  <label for="name1">Nama Anda:</label><br>
  <input type="text" id="name1" name="name1"><br>
  <label for="name2">Nama Pasangan Anda:</label><br>
  <input type="text" id="name2" name="name2"><br>
  <input type="submit" value="Cek Kecocokan">
</form>
</body>
</html>