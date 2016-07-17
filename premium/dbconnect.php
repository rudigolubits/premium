<?php

$link = mysqli_connect('mysql5.kleineschweiz.at', 'db111390_15', 'sae_wdd2016', 'db111390_15');

if (!$link) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
  . mysqli_connect_error());
}
