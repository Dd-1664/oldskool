<?php

if (isset($_POST['dc']))
{
    session_unset();
    require('index.html');
    die();
}
?>