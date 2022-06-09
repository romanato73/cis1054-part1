<?php
session_start();

if (isset($_POST['username']) && isset($_POST['age'])) {
    $_SESSION['username'] = $_POST["username"];
    $_SESSION['age'] = $_POST["age"];
}

if (isset($_GET['username']) && isset($_GET['age'])) {
    $_SESSION['username'] = $_GET["username"];
    $_SESSION['age'] = $_GET["age"];
}

header('Location: /readsession.php');