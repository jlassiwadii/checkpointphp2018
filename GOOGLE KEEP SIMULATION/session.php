<?php
$title = $_POST['title'];
$paragraphe = $_POST['paragraphe'];

session_start();
$_SESSION['googlekeep'][$title]=$paragraphe;
?>


<!DOCTYPE html>
<html>
<head>
    <title>ToDo List App</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .title{
        color: #005cbf;
        margin-left: 30px;
        margin-top: 10px;
    }
    .app{
        margin-top: 50px;

    }
    .form {
        width: 500px;
        margin-left: 20px;
        margin-top: 20px;
    }
    .form input {
        margin: 7px;
    }
    .notes {
        flex-wrap: wrap;
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 750px;
        margin: 60px 180px;
    }
    .note {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 12em;
        min-height: 10em;
        background: #f8de59;
        filter: drop-shadow(3px 3px 10px rgba(0, 0, 0, 0.8));
        transform: rotate(7deg) translateX(-50%);

    }
    .note:before {
        content: "";
        position: absolute;
        right: 2em;
        bottom: -2em;
        left: 0;
        border: 1em solid #f8de59;
        z-index: -1;
    }
    .note:after {
        content: "";
        position: absolute;
        right: 0;
        bottom: -2em;
        border-width: 2em 2em 0 0;
        border-style: solid;
        border-color: #d69722 transparent;
        filter: drop-shadow(-4px 5px 9px rgba(0, 0, 0, 0.5));
    }

    h4 {.
        margin-left: 15px;
        top: 50px;
    }
    p{
        margin-left: 20px ;
    }
</style>
<body>
<div class="app">
<h3 class="title">Google Keep Simulation</h3>
<form class="form" method="post" action="session.php" enctype="multipart/form-data">
    <input type="text" class="form-control" aria-label="Small"  name="title" placeholder="Title">
    <input type="text" class="form-control" aria-label="Small"  name="paragraphe" placeholder="Object">
    <input type="submit" class="btn btn-info" value="Add">
</form>
</div>
<div class="notes">
    <?php

    foreach ($_SESSION['googlekeep'] as $title => $value) {
        ?>
       <div class="note">
            <h4><?= $title; ?></h4>
            <p><?= $value; ?></p>
       </div>

        <?php
    }
    echo "<br>";

    ?>


</div>
</body>
</html>