<head>
        <title>Shop</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="src/css/font-awesome.css" rel="stylesheet">

        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

		<!-- head js -->
    </head>

<main>

				<!-- .page-header -->
				<div class="page-header" style="background-image:url(images/title-1.jpg)" data-stellar-background-ratio="0.2">
			        <div class="page-header__container">
			            <div class="page-header__row">
			            	<div class="page-header__column">
								<ol class="page-header__breadcrumb">
								  <li><a href="homepage.html">Home</a></li>
								  <li class="page-header__breadcrumb--active">Shop</li>
								</ol>
							  <h1>Buy wines & foods</h1>
			            	</div>
						</div>
		            </div>
		        </div>
				<!-- /.page-header -->

				<!-- .nav-bar -->
				<nav id="filter-nav-bar" class="navbar">
				  <div class="navbar__container">

					<!-- Sort by -->
					<div class="pull-left navbar__btn-group">
					  <button type="button" class="navbar__btn navbar__btn-default dropdown-toggle btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    All Products <span class="fa fa-angle-down carat"></span>
					  </button>
					  <ul class="dropdown-menu">
					  	<li class="dropdown-header">Filter by type</li>
					    <li><a href="#">All Products</a></li>
					    <li><a href="#">Red Wines</a></li>
					    <li><a href="#">White Wines</a></li>
					    <li><a href="#">Rosé Wines</a></li>
					    <li><a href="#">Food Specialties</a></li>
					  </ul>
					</div>

					<!-- Price range -->
					<div class="navbar__btn-group">
					  <button type="button" class="navbar__btn navbar__btn-default navbar__dropdown-toggle btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    $20 - $29 <span class="fa fa-angle-down carat"></span>
					  </button>
					  <ul class="dropdown-menu">
					  	<li class="dropdown-header">Filter by price</li>
					    <li><a href="#">Up to $19</a></li>
					    <li><a href="#">$20 - $29</a></li>
					    <li><a href="#">$30 - $39</a></li>
					  </ul>
					</div>


					<div id="view-option" class="navbar__pull-right navbar__btn-group navbar__navbar-icons 			navbar__hidden-xs" role="group">
					  <button data-view="product-gallery__column-1" type="button" class="navbar__btn navbar__btn-default"><span class="fa fa-th-large"></span></button>
					  <button data-view="product-gallery__column-2" type="button" class="navbar__btn navbar__btn-default active"><span class="fa fa-th"></span></button>
					  <button data-view="product-gallery__column-3 product-gallery__column-3--margin-left list-view" type="button" class="navbar__btn navbar__btn-default"><span class="fa fa-th-list"></span></button>
					</div>

				  </div>
				</nav>
				<!-- /.nav-bar -->

				<div id="product-gallery">
					<div class="product-gallery__container">
						<div class="product-gallery__row">

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__red-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/red-wine-5.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.html">Pinot Noir</a></h3>
									<h4 class="product-gallery__red-wines-text">Dry red wine</h4>
									<h5 class="product-gallery__red-wines-price">$29.95</h5>
									</div>
								</article>
							</div>

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__white-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/white-wine-5.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.html">Chardonnay</a></h3>
									<h4 class="product-gallery__white-wines-text">Dry white wine</h4>
									<h5 class="product-gallery__white-wines-price">$29.95</h5>
									</div>
								</article>
							</div>

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__rose-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/rose-wine-5.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.html">Bordeaux</a></h3>
									<h4 class="product-gallery__rose-wines-text">Dry rose wine</h4>
									<h5 class="product-gallery__rose-wines-price">$29.95</h5>
									</div>
								</article>
							</div>

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__rose-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/rose-wine-2.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.html">Zinfandel</a></h3>
									<h4 class="product-gallery__rose-wines-text">Dry rose wine</h4>
									<h5 class="product-gallery__rose-wines-price">$29.95</h5>
									</div>
								</article>
							</div>

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__red-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/red-wine-2.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="product-sheet.html">Pinot Gris</a></h3>
									<h4 class="product-gallery__red-wines-text">Dry red wine</h4>
									<h5 class="product-gallery__red-wines-price">$29.95</h5>
									</div>
								</article>
							</div>

							<div class="shop-item product-gallery__column-1 col-lg-4">
								<article>
									<figure class="product-gallery__white-wines">
										<a href="index.php?site=product-detail"><img class="product-gallery__img-responsive" src="images/white-wine-2.png" alt="" width="300" height="600"></a>
										<a href="cart.html" class="add-to-cart fa fa-shopping-cart"></a>
									</figure>
									<div>
									<h3><a href="index.php?site=product-detail">Sirah</a></h3>
									<h4 class="product-gallery__white-wines-text">Dry white wine</h4>
									<h5 class="product-gallery__white-wines-price">$29.95</h5>
									</div>
								</article>
							</div>


						</div>
					</div>
				</div>
		</main>
