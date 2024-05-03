<?php

session_start();
$_SESSION['usuario'] =  null;
$_SESSION['senha'] = null;
session_destroy(); //essa linha é muito foda destrói tudo mesmo sem ela da problema
header("Location: index.php");
