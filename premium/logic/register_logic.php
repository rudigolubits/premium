<?php
if(is_logged_in()) {
  redirect_to("index.php");
} else {

  if(is_post_request()) {
    $fname = mysqli_real_escape_string($link, $_POST["fname"]);
    $sname = mysqli_real_escape_string($link, $_POST["sname"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $_SESSION['logged_in'] = false;
       $echo = "Ungültige Emailadresse!";
       $error = 1;

    } else {

      $password = mysqli_real_escape_string($link, $_POST["password"]);
      $password = password_hash($password, PASSWORD_DEFAULT);
      $is_admin = 0;

      $sql = "SELECT fname, sname, email FROM users WHERE fname = '$fname', sname = '$sname', email = '$email'";
      $result = mysqli_query($link, $sql);

      if(mysqli_num_rows($result) === 1) {
        $_SESSION['logged_in'] = false;
        echo "Benutzer schon vorhanden!";
        $error = 1;

      } else {
          $sql = "INSERT INTO users (fname, sname, email, password, is_admin)
                  VALUES ('$fname', '$sname', '$email', '$password', '$is_admin')";

          $result = mysqli_query($link, $sql);

          if (mysqli_affected_rows($link) > 0) {
            $_SESSION['logged_in'] = true;
            redirect_to("index.php", "Erfolgreich registriert!");

          } else {
            echo "Fehler in MySQL : ".mysqli_error($link);
          }
        }
      }
  }
  include("views/register_form.php");
}
?>
