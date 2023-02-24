<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Personnel</title>
</head>
    <body> 
    <!-- School Personnel Info -->
    <main class = "spersonnelinfo-main">
        <div class = "spersonnelinfo-con">
            <form class = "spersonnelinfo-form" method = "post">
                <label for = "Personnel Last Name">Last Name:</label>
                    <input type="text" placeholder="Last Name" name = "Personnel Last Name">
                <label for = "Personnel First Name">First Name:</label>
                    <input type="text" placeholder="First Name" name = "Personnel First Name">
                <label for = "Personnel Middle Name">Middle Name:</label>
                    <input type="text" placeholder="Middle Name" name = "Personnel Middle Name">
                <label for = "Personnel Extension Name">Extension Name:</label>
                    <input type="text" placeholder="Extension Name" name = "Personnel Extension Name">
                <label for = "Personnel Address">Complete Address:</label>
                    <input type="text" placeholder="Address" name="Personnel Address">
                <label for = "Personnel Contact Number"> Contact Number:</label>
                    <input type="tel" placeholder="Contact Number" name = "Personnel Contact Number" pattern="[0-9]{11}">
                <label for = "Personnel Position">Position:</label>
                    <select name = "Personnel Position">
                        <option value = "Faculty">Faculty</option>
                        <option value = "Clinician">Clinician</option>
                        <option value = "Security">Security</option>
                    </select>
                <button type="submit">
                    <span>Submit</span>
                </button>
            </form>
        </div>
    



    </body>
</html>