<head>
	<meta charset="utf-8">
	<title>Kontakt</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="../Homepage/src/css/font-awesome.css">
</head>

<?php
  require("../views/header.php");
 ?>

<main>

    	<div class="page-header" style="background-image:url(../images/Kontakt-Bild.jpg)" data-stellar-background-ratio="0.2">
			<div class="container">
			    <div class="row">
			        <div class="page-header__column">
						<ol class="page-header__breadcrumb">
							<li><a href="homepage.html">Home</a></li>
							<li class="page-header__breadcrumb--active">Kontakt</li>
						</ol>
			    		<h1>Kontakt</h1>
			        </div>
				</div>
		    </div>
		</div>

		<section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <form>
                            <h2>Kontaktieren Sie uns</h2>
                                <div class="form-group">
                                    <label for="msg-email">Emailaddresse</label>
                                    <input type="email" class="form-control" id="msg-email" placeholder="Email">
                                </div>
                          	    <div class="form-group">
                                    <label for="msg-email">Betreff</label>
                                    <select class="form-control">
                          	            <option>Produktinformationen</option>
                                      	<option>Bestellungssupport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="msg-text">Nachricht</label>
                                    <textarea rows="6" class="form-control" id="msg-text" placeholder="Ihre Nachricht"></textarea>
                                </div>

                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
                                <span class="btn-label">Nachricht senden</span>
                                </button>
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <h2>Anfahrt</h2>
                        <h3>Weingut</h3>
                        <p>
                        	<span class="fa fa-map-marker primary bigger"></span> Hügelstrasse 1, 7093 Jois
                        </p>
                        <h3>Firmensitz</h3>
                        <p>
                        	<span class="fa fa-map-marker primary bigger"></span> Rathausplatz 12, 7093 Jois
                        </p>
                        

                    </div>
                </div>
            </div>
        </section>
        <!-- Google Map -->
                <section id="location">
                    <div id="map">

                    </div>
                </section>


    </main>

    <?php
      require("../views/footer.php");
     ?>
