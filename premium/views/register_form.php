<div class="container-fluid bg-cover" style="background-image:url(images/login.jpg)">
                    <div class="row">

	                    <section id="register" class="clearfix os-animation" data-os-animation="fadeIn">

		                    <div class="col-sm-6 col-sm-offset-3">
		                    	<div class="form-box">

                            <?php echo get_error($errors, "register"); ?>

								<form method="POST">

									<h2 class="text-center">Registrierung</h2>
								  <div class="form-group">
								    <label for="fname">Vorname</label>
								    <input type="text" name="fname" class="form-control" id="fname" placeholder="Vorname">
								  </div>
								  <div class="form-group">
								    <label for="sname">Nachname</label>
								    <input type="text" name="sname" class="form-control" id="sname" placeholder="Nachname">
								  </div>
								  <div class="form-group">
								    <label for="email">Email Adresse</label>
								    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
								  </div>
								  <div class="form-group">
								    <label for="password">Passwort</label>
								    <input type="password" name="password" class="form-control" id="password" placeholder="Passwort">
								  </div>
								  <div class="form-group">
								    <label for="password_conf">Passwort wiederholen</label>
								    <input type="password" class="form-control" id="password_conf" placeholder="Passwort">
								  </div>
								  <div class="checkbox">
								  </div>
								  <button type="submit" class="btn btn-primary btn-lg btn-style-1 center-block">Registrieren</button>

								</form>
								<div class="form-box-msg text-center">
								  Du hast bereits ein Konto? <a href="index.php?site=login">Hier einloggen!</a>
								</div>
		                    	</div>

		                    </div>
	                    </section>

                    </div>
                </div>
