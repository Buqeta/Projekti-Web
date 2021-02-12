<?php

session_start(); //to close a session, we must first start it on this script
session_unset();
session_destroy();
header("Location: ../logIn.php");