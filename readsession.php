<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['age']) {
    echo 'User: ' . $_SESSION['username'] . ' is ' . $_SESSION['age'] . ' years old.';
} else {
    echo 'Session variables are not set.';
}
