<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>
    <? if(!empty($_SESSION['username'])): ?>
    <p> <?php echo $_SESSION['username'] ?> </p>
    <? endif; ?>

    <a href="../includes/logout.php">Logout</a>

</body>
</html>