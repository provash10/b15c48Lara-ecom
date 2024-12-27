<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Provash E-commerce Website</title>
	@include('includes.style') 

</head>
<body>
	<header class="header-section">
		<div class="container">
			<div class="header-top-wrapper">
				<a href="index.html" class="brand-logo-outer">
					{{-- <img src="./assets/images/logo.png" alt="Logo"> --}}
					<img src="./assets/images/Provash logo.png" alt="Logo">
				</a>
				<div class="search-form-outer">
					<form action="" method="GET" class="form-group search-form">
						<input type="text" name="search" class="form-control" placeholder="Search for items...">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<div class="header-top-right-outer">
					<div class="res-search">
						<i class="fas fa-search"></i>
					</div>
					<div class="header-top-right-item dropdown">
						<div class="header-top-right-item-link">
							<span class="icon-outer">
								<i class="fas fa-cart-plus"></i>
								<span class="count-number">1</span>
							</span>
							Cart
						</div>
						<div class="cart-items-wrapper">
							<div class="cart-items-outer">
								<div class="cart-item-outer">
									<a href="#" class="cart-product-image">
										<img src="./assets/images/product.png" alt="product">
									</a>
									<div class="cart-product-name-price">
										<a href="#" class="product-name">
											Test Product
										</a>
										<span class="product-price">
											৳ 300
										</span>
									</div>
									<div class="cart-item-delete">
										<a href="#" class="delete-btn">
											<i class="fas fa-trash-alt"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="shopping-cart-footer">
								<div class="shopping-cart-total">
									<h4>
										Total <span>৳ 300</span>
									</h4>
								</div>
								<div class="shopping-cart-button">
									<a href="view-products.html" class="view-cart-link">View cart</a>
									<a href="checkout.html" class="checkout-link">Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom-wrapper">
			<div class="container">
				<div class="header__bottom-outer">
					<div class="header__category-outer">
						<div class="header__category-items-wrapper">
							<div class="header__category-icon-outer">
								<span>Categories</span>
								<i class="fas fa-chevron-down"></i>
							</div>
							<div class="header__category-items-outer">
								<ul class="header__category-list">
									<li class="header__category-list-item item-has-submenu">
										<a href="category-product.html" class="header__category-list-item-link">
											<img src="./assets/images/product.png" alt="category">
											Test Category
										</a>
										<ul class="header__nav-item-category-submenu">
											<li class="header__category-submenu-item">
												<a href="sub-category-product.html" class="header__category-submenu-item-link">
													Test Subcategory
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-toggle-btn">
						<div class="btn-inner"></div>
					</div>
					<div class="header__dynamic-page-wrapper">
						<ul class="dynamic-page-list">
							<li class="dynamic-page-list-item">
								<a href="index.html" class="dynamic-page-list-item-link">
									Home
								</a>
							</li>
							<li class="dynamic-page-list-item">
								<a href="shop.html" class="dynamic-page-list-item-link">
									Shop
								</a>
							</li>
							</li>
							<li class="dynamic-page-list-item">
								<a href="return-process.html" class="dynamic-page-list-item-link">
									Return Process
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>    
	</header>

	<main>
		<!-- /Home Slider -->
		<section class="home-slider-section">
			<div class="container">
				<div class="home__slider-sec-wrap">
					<div class="home__category-outer">
						<ul class="header__category-list">
							<li class="header__category-list-item item-has-submenu">
								<a href="category-product.html" class="header__category-list-item-link">
									<img src="./assets/images/product.png" alt="category">
									Test Category
								</a>
								<ul class="header__nav-item-category-submenu">
									<li class="header__category-submenu-item">
										<a href="sub-category-product.html" class="header__category-submenu-item-link">
											Test Subcategory
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="home__slider-items-wrapper">
						<div class="home__slider-item-outer">
							<img src="./assets/images/slider.jpg" alt="image" class="home__slider-item-image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Slider -->

		<!-- Categoris Slider -->
		<section class="categoris-slider-section">
			<div class="container">
				<div class="section-title-outer">
					<h1 class="title">
						Categories
					</h1>
				</div>
				<div class="categoris-items-wrapper owl-carousel">
					<a href="#" class="categoris-item">
						<img src="./assets/images/product.png" alt="category" />
						<h6 class="categoris-name">
							Test Category
						</h6>
						<span class="items-number">1 items</span>
					</a>
				</div>
			</div>
		</section>
		<!-- /Categoris Slider -->
		<!-- Banner -->
		<section class="banner-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="banner-item-outer">
							<img src="./assets/images/banner.jpeg" alt="banner image" />
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="banner-item-outer">
							<img src="./assets/images/banner.jpeg" alt="banner image" />
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="banner-item-outer">
							<img src="./assets/images/banner.jpeg" alt="banner image" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Banner -->
		<!-- Popular Product -->
		<section class="product-section">
			<div class="container">
				<div class="section-title-outer">
					<h1 class="title">
						Hot Products
					</h1>
					<a href="type-products.html" class="product-view-all-btn">
						View All
					</a>
				</div>
				<div class="product-items-wrapper">
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Hot
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Hot
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Hot
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Product -->
		<!-- Popular Product -->
		<section class="product-section">
			<div class="container">
				<div class="section-title-outer">
					<h1 class="title">
						New Arrival
					</h1>
					<a href="type-products.html" class="product-view-all-btn">
						View All
					</a>
				</div>
				<div class="product-items-wrapper">
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product1.jpg" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									New
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Hot
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Hot
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Product -->
		<!-- Popular Product -->
		<section class="product-section">
			<div class="container">
				<div class="section-title-outer">
					<h1 class="title">
						Regular Products
					</h1>
					<a href="type-products.html" class="product-view-all-btn">
						View All
					</a>
				</div>
				<div class="product-items-wrapper">
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Regular
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Regular
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Regular
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Product -->
		<!-- Popular Product -->
		<section class="product-section">
			<div class="container">
				<div class="section-title-outer">
					<h1 class="title">
						Discount Products
					</h1>
					<a href="type-products.html" class="product-view-all-btn">
						View All
					</a>
				</div>
				<div class="product-items-wrapper">
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product1.jpg" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Discount
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Discount
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product__item-outer">
						<div class="product__item-image-outer">
							<a href="details.html" class="product__item-image-inner">
								<img src="./assets/images/product.png" alt="Product Image" />
							</a>
							<div class="product__item-add-cart-btn-outer">
								<a href="details.html" class="product__item-add-cart-btn-inner">
									Add to Cart
								</a>
							</div>
							<div class="product__type-badge-outer">
								<span class="product__type-badge-inner">
									Discount
								</span>
							</div>
						</div>
						<div class="product__item-info-outer">
							<a href="#" class="product__item-name">
								Test Product
							</a>
							<div class="product__item-price-outer">
								<div class="product__item-discount-price">
									<del>400 Tk.</del>
								</div>
								<div class="product__item-regular-price">
									<span>300 Tk.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Product -->
	</main>

	<footer class="footer-section">
		<div class="footer__top-wrapper">
			<div class="container">
				<a href="index.html" class="footer__brand-logo-outer">
					<img src="./assets/images/logo.png" class="footer__brand-logo-inner" />
				</a>
			</div>
		</div>    
		<div class="footer__main-wrapper">
			<div class="container">        
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer__item-wrap">
							<h4 class="footer__item-title">
								Policy
							</h4>
							<ul class="footer__list">
								<li class="footer__list-item">
									<a href="privacy-policy.html" class="footer__list-item-link">
										Privacy Policy
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Terms & Conditions
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Refund Policy
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Payment Policy
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer__item-wrap">
							<h4 class="footer__item-title">
							   Contacts
							</h4>
							<ul class="footer__contact-info-list">
								<li class="footer__contact-info-list-item">
									<p class="footer__contact-info-list-item-label">
										Address:                                   
									</p>
									<p class="footer__contact-info-list-item-value">
										Uttara, Dhaka                                 
									</p>
								</li>
								<li class="footer__contact-info-list-item">
									<p class="footer__contact-info-list-item-label">
										Phone:                                   
									</p>
									<a href="tel:0123456857" class="footer__contact-info-list-item-value">
										0123456857
									</a>
								</li>
								<li class="footer__contact-info-list-item">
									<p class="footer__contact-info-list-item-label">
										Email:                                   
									</p>
									<a href="mailto:info@gmail.com" class="footer__contact-info-list-item-value">
										info@gmail.com
									</a>
								</li>
							</ul>
						</div>
					</div>                
					<div class="col-lg-3 col-md-6">
						<div class="footer__item-wrap">
							<h4 class="footer__item-title">
								Others
							</h4>
							<ul class="footer__list">
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										About Us
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Contact Us
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Blog
									</a>
								</li>
								<li class="footer__list-item">
									<a href="#" class="footer__list-item-link">
										Careers
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer__item-wrap">
							<h4 class="footer__item-title">
								Follow Us
							</h4>
							<ul class="footer__social-list">
								<li class="footer__social-list-item">
									<a href="#" class="footer__social-list-item-lisk">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="footer__social-list-item">
									<a href="#" class="footer__social-list-item-lisk">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="footer__social-list-item">
									<a href="#" class="footer__social-list-item-lisk">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li class="footer__social-list-item">
									<a href="#" class="footer__social-list-item-lisk">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom-wrapper">
			<div class="container">
				<p class="footer__bottom-text">
					© 2024, All rights reserved
					<strong class="text-brand">Nitto Mart</strong>
				</p>
			</div>
		</div>
	</footer>

	@include('includes.script') 

</body>
</html>