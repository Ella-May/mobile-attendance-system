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
    
    <!--Dashboard Container-->
    <header>
        <h1>DASHBOARD</h1>
    </header>
    <main>
        <p>TRY LANG PO KUNG SAN TO MAPUPUNTA</p>
    </main>
    <aside>
        <p>ITO RIN SAN KA PUPUNTA</p>
    </aside>
</body>
</html>