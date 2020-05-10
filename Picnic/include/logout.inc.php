<?php
require '../classes/accounts.class.php';

session_unset();
session_destroy();
header('Location:../index.php');
