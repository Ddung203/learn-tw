<?php
session_start();

require "../utils/utils.php";

checkAccessRole(1);

autoLogoutAfterInactivity(1000, "../src/login.php");
