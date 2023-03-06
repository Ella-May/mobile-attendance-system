<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheets/dashboard.css">
</head>
<body>
   
    <? if(!empty($_SESSION['username'])): ?> 
    <p> <?php echo $_SESSION['username'] ?> </p>
    <? endif; ?>

    <a href="../includes/logout.php">Logout</a>
    
    <!--Dashboard Container-->
    <aside id="content-right">
        <div><p>MEMA LANG PO</p></div>
    </aside>
    <main id="main-content">
        <div><p>TRY LANG PO KUNG SAN TO MAPUPUNTA</p></div>
    </main>
    <aside id="modules-left">
        <div>
        <p>ITO RIN SAN KA PUPUNTA</p>
        <ul id="modules-tab">
            <li> <a href="studentinfo.php">Student Information</a></li>
            <li> <a href="schoolpersonnel.php">School Personnel</a></li>
            <li> <a href="facultyload.php">Faculty Loads</a></li>
        </ul>
        </div>
    </aside>
</body>
</html>