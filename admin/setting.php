<?php
require('include/essensitials.php');
adminLogin();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Setting</title>
    <?php require('include/links.php'); ?>
</head>

<body class="bg-light">

<?php require('include/header.php'); ?> 

   

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
               <h3></h3>
            </div>
        </div>
    </div>


    <?php
    require('include/scripts.php'); ?>

</body>

</html>