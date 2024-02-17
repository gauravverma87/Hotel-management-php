<?php
    require('include/essensitials.php');

    session_start();
    session_destroy();
    redirect('index.php');
?>


