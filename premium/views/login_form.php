<?php echo get_error($errors, "auth"); ?>

<?php if(is_logged_in()): ?>

  <p>
    Hallo Admin, <a href="logout.php">Ausloggen</a>
  </p>

<?php else: ?>


<div class="container-fluid bg-cover" style="background-image:url(images/login.jpg)">
	<div class="row">

	    <section id="login" class="clearfix os-animation" data-os-animation="fadeIn">

		    <div class="col-sm-6 col-sm-offset-3">
		        <div class="form-box">

					<form method="POST">

						<h2 class="text-center">Login</h2>
							<div class="form-group">
								<label for="InputEmail">Email-Adresse</label>
							    <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email">
					    	</div>
							<div class="form-group">
								<label for="InputPassword1">Passwort</label>
								<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Passwort">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Passwort speichern
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-style-1 center-block">Einloggen</button>

					</form>
							<div class="form-box-msg text-center">
							Kein Konto? Jetzt eines anlegen! <a href="index.php?site=register">Hier registrieren!</a>
							</div>
				</div>
			</div>

	    </section>

    </div>
</div>
<?php endif; ?>
