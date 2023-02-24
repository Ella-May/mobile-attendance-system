<?php  
    session_start();
?>

<!DOCTYPE html>
<html lang = en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Load</title>
</head>
<body>
    <form class = "facultyload-form" method="post">
        <label for = "Subject Name">Subject Name:</label>
            <input type="text" placeholder="Subject Name" name = "Subject Name">
        <label for = "Subject Grade Level">Grade Level:</label>
            <input type="text" placeholder="Grade Level" name = "Subject Grade Level">
        <label for = "Subject Strand">Strand:</label>
            <input type="text" placeholder="Strand" name = "Strand"> 
        <label for = "Subject Section">Section:</label>
            <input type="text" placeholder="Section" name = "Subject Section"> 
        <label for = "Subject Time Start">Subject Time Start:</label>
            <input type="time" placeholder="Time" name = "Subject Time Start">     
        <label for = "Subject Time End">Subject Time End:</label>
            <input type="time" placeholder="Time" name = "Subject Time End">     
        <button type="submit">
            <span>Submit</span>
        </button>
    </form>
</body>
</html>