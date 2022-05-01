<?php
function notify()
{
    if (isset($_SESSION['check'])) {
        echo $_SESSION['check'];
        unset($_SESSION["check"]);
    }
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION["success"]);
    }
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION["error"]);
    }
}