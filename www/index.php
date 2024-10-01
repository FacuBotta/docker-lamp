<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Docker Lamp</title>
</head>

<body>
  <h1>hello from docker lamp</h1>
  <?php
  $host = 'db';
  $dbname = 'phpDatabase';
  $user = 'user';
  $pass = 'password';

  try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT 'Connexion to database successful' as message");

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $row['message'];
  } catch (PDOException $e) {
    echo 'Error connecting to database: ' . $e->getMessage();
  }
  ?>
</body>

</html>