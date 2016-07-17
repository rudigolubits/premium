<?php

function is_logged_in() {
  return (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true);
}

function is_post_request() {
  return (strtolower($_SERVER["REQUEST_METHOD"]) == "post" && !empty($_POST));
}

function redirect_to($location, $message = "") {
  $_SESSION["flash"] = $message;
  header("location: $location");
  exit();
}

function get_error($errors, $key) {
  if(isset($errors[$key])) {
    // HEREDOC-Syntax
    $error = <<<HEREDOC

<p class="help-block">
  {$errors[$key]}
</p>
HEREDOC;

  } else {
    $error = "";
  }

  return $error;
}





 ?>
