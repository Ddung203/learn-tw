<?php
session_start();

require "utils.php";

checkAccessRole(1);

autoLogoutAfterInactivity(1000, "login.php");
