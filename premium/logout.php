<?php

require_once("functions/helpers.php");

session_start();
session_destroy();

redirect_to("index.php", "Erfolgreich ausgeloggt!");

 ?>
