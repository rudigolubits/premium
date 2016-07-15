<?php

ob_start();

session_start();
error_reporting(-1);

date_default_timezone_set("Europe/Vienna");
setlocale(LC_ALL, "de_AT");

$errors = [];
$entries_per_page = 10;
$current_page = isset($_GET['page']) ? $_GET["page"] : 1;
$site = isset($_GET['site']) ? $_GET["site"] : "welcome";
$order_by = isset($_GET['order_by']) ? $_GET["order_by"] : "id";
$order_dir = isset($_GET['order_dir']) ? $_GET["order_dir"] : "DESC";

require("../dbconnect.php");
require("views/header.php");

include("views/homepage.php");
// if($site == "reservations") {
//   include("logic/reservations.php");
// } elseif($site == "auth") {
//   include("logic/auth.php");
// } elseif($site == "welcome") {
//   include("views/welcome.php");
// } elseif($site == "register") {
//   include("logic/register.php");
// } else {
//   include("views/homepage.php");
// }

mysqli_close($link);

require("views/footer.php");

ob_end_flush();

?>
