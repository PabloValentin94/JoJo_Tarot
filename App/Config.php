<?php

// Variável usada no Autoload.

define("BASEDIR", dirname(__FILE__, 2) . "/");

// Variável usada na, classe superglobal, Controller.

define("VIEWS", dirname(__FILE__) . "/View/Modules/");

// Variáveis usadas na, classe superglobal, DAO.

$_ENV["db"]["host"] = "localhost:3306";
$_ENV["db"]["user"] = "root";
$_ENV["db"]["password"] = "etecjau";
$_ENV["db"]["database_name"] = "db_jojo_tarot";

?>