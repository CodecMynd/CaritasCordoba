<?php
require 'functions.php';
conectar();
id();

session_start();
session_unset();
session_destroy();
header('Location: ../index.php');

