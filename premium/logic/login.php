<?php
if(is_logged_in()) {
  redirect_to("index.php");
} else {

  if(is_post_request()) {
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $sql = "SELECT email, password, is_admin FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user["password"])) {
          $_SESSION['logged_in'] = true;
          if ($user['is_admin'] == 1) {
            $_SESSION['is_admin'] = true;
            redirect_to("backend/index.php", "Erfolgreich eingeloggt!");
          } else {
            redirect_to("index.php", "Erfolgreich eingeloggt!");
          }
        } else {
          $error = 1;
        }
    } else {
      $error = 1;
    }

    if($error == 1) {
      $errors["auth"] = "Die eingegebene Email-Passwort-Kombination stimmt nicht überein.";
    }
  }

  include("views/login_form.php");
}
?>
