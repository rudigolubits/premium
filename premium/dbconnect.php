<?php

$link = mysqli_connect('localhost', 'root', 'password_admin', 'premium');

if (!$link) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
  . mysqli_connect_error());
}
