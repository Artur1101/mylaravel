<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page V2</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/effect.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="#">Дом</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home_v1.html" title="">Дом 1</a></li>
                        <li class="level2"><a href="home_v2.html" title="">Дом 2</a></li>
                        <li class="level2"><a href="home_v3.html" title="">Дом 3</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Магазин</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <li class="level3"><a href="category_v1.html" title="">Категория V1</a></li>
                                    <li class="level3"><a href="category_v1_2.html" title="">Категория V1.2</a></li>
                                    <li class="level3"><a href="category_v2.html" title="">Категория V2</a></li>
                                    <li class="level3"><a href="category_v2_2.html" title="">Категория V2.2</a></li>
                                    <li class="level3"><a href="category_v3.html" title="">Категорияy V3</a></li>
                                    <li class="level3"><a href="category_v3_2.html" title="">Категория V3.2</a></li>
                                    <li class="level3"><a href="category_v4.html" title="">Категория V4</a></li>
                                    <li class="level3"><a href="category_v4_2.html" title="">Категория V4.2</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Один тип продукта</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_v1.html" title="">Одноместный продукт 1</a></li>
                                    <li class="level3"><a href="product_v2.html" title="">Одноместный продукт 2</a></li>
                                    <li class="level3"><a href="product_v3.html" title="">Одноместный продукт 3</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Страница заказа</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cartpage.html" title="">Страница корзины</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Проверить</a></li>
                                    <li class="level3"><a href="compare.html" title="">Сравнивать</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Быстрый просмотр</a></li>
                                    <li class="level3"><a href="trackyourorder.html">Отследить заказ</a></li>
                                    <li class="level3"><a href="wishlist.html">Список желаний</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1">
                    <a href="#">Страницы</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="about.html" title="About Us ">О нас </a></li>
                        <li class="level2"><a href="contact.html" title="Contact">Контакты</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Блог</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog.html" title="Blog Standar">Категория блога</a></li>
                        <li class="level2"><a href="blogdetail.html" title="Blog Gird">Детали блога</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!-- Menu Mobile -->
    <div class="menu-mobile-left-content">
        <ul>
            <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Горячие предложения</p></a></li>
			<li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Еда</p></a></li>
			<li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Мобильный телефон и планшет</p></a></li>
			<li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Электрические приборы</p></a></li>
			<li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Электроника и технологии</p></a></li>
			<li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Мода</p></a></li>
			<li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Здоровье и Красота</p></a></li>
			<li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Мать и ребенок</p></a></li>
			<li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Книги и канцелярские товары</p></a></li>
			<li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Семейная жизнь</p></a></li>
			<li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Спорт и активный отдых</p></a></li>
			<li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Авто и мото</p></a></li>
			<li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Ваучерный сервис</p></a></li>
		</ul>
    </div>
    <!-- Header Box -->
    <div class="wrappage">
	    <header class="relative full-width box-shadow">
	        <div class="clearfix container-web relative">
	            <div class=" container">
	                <div class="row">
	                    <div class=" header-top">
	                        <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
	                            <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Позвоните нам <span class="text-red bold">+7 900-900-0000</span>
	                        </p>
	                        <div class="clear-padding menu-header-top text-right col-md-8 col-xs-12 col-sm-6">
	                            <ul class="clear-margin">
	                                <li class="relative"><a href="#">Мой счет</a></li>
                                    <li class="relative"><a href="#">Список желаний</a></li>
                                    <li class="relative">
                                        <a href="#">RU</a>
                                        <ul>
                                            <li class="relative"><a href="#">RU</a></li>
                                            <li class="relative"><a href="#">EN</a></li>
                                            <li class="relative"><a href="#">CN</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a href="#">RU</a>
                                        <ul>
                                            <li class="relative"><a href="#">RUB</a></li>
                                            <li class="relative"><a href="#">USD</a></li>
                                            <li class="relative"><a href="#">CAD</a></li>
	                                    </ul>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="clearfix header-content full-width relative">
	                        <div class="clearfix icon-menu-bar">
	                            <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
	                        </div>
	                        <div class="clearfix logo">
	                            <a href="#"><img alt="Logo" src="img/logo.png" /></a>
	                        </div>
	                        <div class="clearfix search-box relative float-left">
	                            <form method="GET" action="/" class="">
	                                <div class="clearfix category-box relative">
	                                    <select name="cate_search">
	                                        <option>Все категории</option>
                                            <option>Еда</option>
                                            <option>Мобильный телефон и планшет</option>
                                            <option>Электрические приборы</option>
                                            <option>Электроника и технологии</option>
                                            <option>Мода</option>
                                            <option>Здоровье и Красота</option>
                                            <option>Мать и ребенок</option>
                                            <option>Книги и канцелярские товары</option>
                                            <option>Семейная жизнь</option>
                                            <option>Спорт и активный отдых</option>
                                            <option>Авто и мото</option>
                                            <option>Ваучерный сервис</option>
	                                    </select>
	                                </div>
	                                <input type="text" name="s" placeholder="Введите ключевое слово здесь . . .">
                                    <button type="submit" class="animate-default button-hover-red">Поиск</button>
	                            </form>
	                        </div>
	                        <div class="clearfix icon-search-mobile absolute">
	                            <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
	                        </div>
	                        <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
	                            <img alt="Icon Cart" src="img/icon_cart.png" />
	                            <p class="count-total-shopping absolute">2</p>
	                        </div>
	                        <div class="cart-detail-header border">
	                            <div class="relative">
	                                <div class="product-cart-son clearfix">
	                                    <div class="image-product-cart float-left center-vertical-image ">
	                                        <a href="#"><img src="img/product_image_6-min.png" alt="" /></a>
	                                    </div>
	                                    <div class="info-product-cart float-left">
	                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
	                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
	                                    </div>
	                                </div>
	                                <div class="product-cart-son">
	                                    <div class="image-product-cart float-left center-vertical-image">
	                                        <a href="#"><img src="img/product_image_7-min.png" alt="" /></a>
	                                    </div>
	                                    <div class="info-product-cart float-left">
	                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">Сумка для йоги Voyage</a></p>
	                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="relative border no-border-l no-border-r total-cart-header">
	                                <p class="bold clear-margin">Промежуточный итог:</p>
                                    <p class=" clear-margin bold">$700</p>
                                </div>
                                <div class="relative btn-cart-header">
                                    <a href="#" class="uppercase bold animate-default">Просмотреть корзину</a>
                                    <a href="#" class="uppercase bold button-hover-red animate-default">Проверить</a>
	                            </div>
	                        </div>
	                        <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
	                        <div class="clearfix box-search-mobile">
	                        </div>
	                    </div>
	                </div>
	                                    <div class="row">
                        <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> Все категории</span>
						</a>
                    </div> 
	            </div>
	        </div>
	                <div class="header-ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu-header">
                                <ul class="main__menu clear-margin">
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Дом</a>
                                        <ul class="sub-menu mega-menu">
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                                <p><a href="home_v1.html">Дом 1</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                                <p><a href="home_v2.html">Дом 2</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                                <p><a href="home_v3.html">Дом 3</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Магазин</a>
                                        <div class="sub-menu mega-menu-v2">
                                            <ul>
                                            <li>Тип категории</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Категория v1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Категория v1.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Категория v2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Категория v2.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Категория v3</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Категория v3.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Категория v4</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Категория v4.2</a></li>
                                        </ul>
                                        <ul>
                                            <li>Один тип продукта</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Одноместный продукт 1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Одноместный продукт 2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Одноместный продукт 3</a></li>
                                        </ul>
                                        <ul>
                                            <li>Страница заказа</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Страница корзины</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Проверить</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Сравнивать</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">Быстрый просмотр</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Отследить заказ</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">Список желаний</a></li>
                                        </ul>
                                        </div>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Страницы</a>
                                            <ul>
                                                <li class="title-hover-red"><a class="animate-default" href="about.html">О нас</a></li>
                                                <li class="title-hover-red"><a class="animate-default" href="contact.html">Контакты</a></li>
                                                <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="title-hover-red">
                                            <a class="animate-default" href="#">Блог</a>
                                            <ul>
                                                <li class="title-hover-red"><a class="animate-default" href="blog.html">Категория блога</a></li>
                                                <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Детали блога</a></li>
                                            </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>
	    <!-- End Header Box -->
	    <!-- Content Box -->
	    <div class="relative clearfix full-width">
	        <!-- Menu & Slide -->
	        <div class="clearfix container-web relative">
	            <div class=" container relative">
	                <div class="row">
	                    <div class=" relative menu-slide col-lg-12 clear-padding">
	                        <!-- Menu -->
	                        <div class=" menu-web relative">
	                            <ul>
	                                <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Еда</p></a></li>
                    <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Мобильный телефон и планшет</p></a></li>
                    <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Электрические приборы</p></a></li>
                    <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Электроника и технологии</p></a></li>
                    <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Мода</p></a></li>
                    <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Здоровье и Красота</p></a></li>
                    <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Мать и ребенок</p></a></li>
                    <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Книги и канцелярские товары</p></a></li>
                    <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Семейная жизнь</p></a></li>
                    <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Спорт и активный отдых</p></a></li>
                    <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Авто и мото</p></a></li>
                    <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Ваучерный сервис</p></a></li>
                </ul>
	                        </div>
	                        <!-- Slide -->
	                        <div class=" slide-box-home slide-v2 relative">
	                            <div class=" slide-home owl-carousel owl-theme">
	                                <div class="item"><img src="img/banner_v2.png" alt="Banner Home V2"></div>
	                                <div class="item"><img src="img/banner_v2_2-min.png" alt="Banner Home V2"></div>
	                            </div>
	                        </div>
	                        <div class=" box-banner-small-v2 box-banner-small">
	                            <div class="relative effect-layla zoom-image-hover">
	                                <img src="img/banner_small_home_v2__1-min.png" alt="">
	                                <a href="#"></a>
	                            </div>
	                            <div class="relative effect-layla zoom-image-hover">
	                                <img src="img/banner_small_v2_1-min.png" alt="">
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- End Menu & Slide -->
	                </div>
	            </div>
	        </div>
	        <!-- Content Product -->
	        <div class="clearfix box-product full-width top-padding-default bg-gray">
	            <div class="clearfix container-web">
	                <div class=" container bottom-margin-default">
	                    <div class="row">
	                        <!-- Title Product -->
	                        <div class="clearfix title-box full-width">
	                            <div class="clearfix name-title-box good-deals-v2 relative">
	                                <img src="img/icon_percent_color.png" alt="Good Deal Today" class="absolute clear-left" />
	                                <p class="text-default-color">Хорошая сделка сегодня</p>
	                            </div>
	                        </div>
	                        <div class="clearfix content-product-box bottom-margin-default full-width deal-hot-v2">
	                            <!-- Deals Content -->
	                            <div class="clearfix ">
	                                <div class="deals-col-2 banners-effect5 relative overfollow-hidden float-left">
	                                    <img src="img/deals_2_col.png" alt="Deals" />
	                                    <a href="#"></a>
	                                </div>
	                                <div class="deals-col-1 banners-effect5 relative overfollow-hidden float-left">
	                                    <img src="img/banner_deal_hot_-min.png" alt="Deals">
	                                    <a href="#"></a>
	                                </div>
	                                <div class="deals-col-1 banners-effect5 relative overfollow-hidden float-left">
	                                    <img src="img/deals_1_col.png" alt="Deals">
	                                    <a href="#"></a>
	                                </div>
	                            </div>
	                            <div class="clearfix ">
	                                <div class="deals-row-2 banners-effect5 clear-margin relative overfollow-hidden float-left">
	                                    <img src="img/deals_2_row.png" alt="Deals">
	                                    <a href="#"></a>
	                                </div>
	                                <div class="deals-col-1 banners-effect5 relative overfollow-hidden float-left">
	                                    <img src="img/banner_deal_hot_2-min.png" alt="Deals">
	                                    <a href="#"></a>
	                                </div>
	                                <div class="deals-col-1 banners-effect5 relative overfollow-hidden float-left">
	                                    <img src="img/banner_deal_hot_1-min.png" alt="Deals">
	                                    <a href="#"></a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Content Product -->
	        <!-- Product Box -->
	        <div class="top-margin-default container-web">
	            <div class=" container">
	                <div class="row">
	                    <div class="clearfix title-box title-box-v2 full-width">
	                        <div class="clearfix name-title-box title-category title-green-bd relative">
	                            <img src="img/icon_food_color.png" alt="Icon Food" class="absolute">
	                            <p class="text-default-color">Еда</p>
	                        </div>
	                        <div class="clearfix menu-title-box capitalize">
	                            <ul>
	                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#confectionery','.box-food-content')">Кондитерские изделия</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#milk-cream','.box-food-content')">Молоко и сливки</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#dry-food','.box-food-content')">Сухой корм</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#vegetables','.box-food-content')">Овощи</a></li>
                                    <li><a href="javascript:;" onclick="showBoxCateHomeByID('#drinks','.box-food-content')">Напитки</a></li>
                                </ul>
	                        </div>
	                    </div>
	                    <div class=" bottom-margin-default full-width">
	                        <!-- Banner Home V2 -->
	                        <div class=" banner-category banner-category-v2 full-width float-left relative">
	                            <div class="effect-bubba zoom-image-hover overfollow-hidden">
	                                <img src="img/banner_home_v2.png" alt="Banner Home V2">
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                        <!-- List Product V2 -->
	                        <div class=" full-width float-left box-content-product-home-v2 relative">
	                            <div class="slide-product-category box-food-content relative animate-default active-box-category hidden-content-box border-collapsed-box" id="confectionery">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/img_product_category.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Сумка-мессенджер Wayfarer5</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка2</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category box-food-content relative animate-default hidden-content-box border-collapsed-box" id="milk-cream">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/img_product_category.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Сумка-мессенджер Wayfarer5</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка2</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category box-food-content relative animate-default hidden-content-box border-collapsed-box" id="dry-food">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/img_product_category.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/img_product_category.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Дорожная сумка для йоги</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_15-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_10-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка2</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/img_product_category.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка2</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_9-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка2</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- List Logo V2 -->
	                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
	                            <ul>
	                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Product Box -->
	        <!-- Banner Full With -->
	        <div class="clearfix relative full-width bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container banner_full_width">
	                    <div class="row overfollow-hidden banners-effect5 relative">
	                        <img src="img/banner_full_w.png" alt="Banner Full Width . . .">
	                        <a href="#"></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Banner Full With -->
	        <!-- Product Box -->
	        <div class="container-web">
	            <div class=" container">
	                <div class="row">
	                    <div class="clearfix title-box title-box-v2 full-width">
	                        <div class="clearfix name-title-box title-category title-jungle-green-bd relative">
	                            <img src="img/icon_phone_color.png" alt="Icon Food" class="absolute">
	                            <p class="text-default-color">Мобильный и планшет</p>
	                        </div>
	                        <div class="clearfix menu-title-box capitalize">
	                            <ul>
	                                <li><a onclick="showBoxCateHomeByID('#smart-phone','.box-mobile-content')" href="javascript:;">Смартфон</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#tablet','.box-mobile-content')" href="javascript:;">Таблетка</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#smart-watch','.box-mobile-content')" href="javascript:;">Умные часы</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#case','.box-mobile-content')" href="javascript:;">Случай</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#gadget','.box-mobile-content')" href="javascript:;">Гаджет</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class=" bottom-margin-default full-width">
	                        <!-- Banner Home V2 -->
	                        <div class=" banner-category banner-category-v2 full-width relative">
	                            <div class="effect-bubba zoom-image-hover overfollow-hidden">
	                                <img src="img/banner_cate_f_w-min.png" alt="Banner Home V2">
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                        <!-- List Product V2 -->
	                        <div class=" full-width box-content-product-home-v2 relative">
	                            <div class="box-mobile-content slide-product-category border-collapsed-box animate-default hidden-content-box active-box-category" id="smart-phone">
	                                <div class="owl-theme owl-carousel">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_4-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Конкурирующий полевой посланник</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_5-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Сумка-мессенджер Wayfarer</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_6-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_7-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Сумка-мессенджер Wayfarer</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="box-mobile-content slide-product-category border-collapsed-box animate-default hidden-content-box " id="tablet">
	                                <div class="owl-theme owl-carousel">
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_6-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_7-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_4-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_5-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="box-mobile-content slide-product-category border-collapsed-box animate-default hidden-content-box " id="smart-watch">
	                                <div class="owl-theme owl-carousel">
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_5-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_6-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_4-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_7-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="box-mobile-content slide-product-category border-collapsed-box animate-default hidden-content-box " id="case">
	                                <div class="owl-theme owl-carousel">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_4-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_6-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_7-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_5-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="box-mobile-content slide-product-category border-collapsed-box animate-default hidden-content-box " id="gadget">
	                                <div class="owl-theme owl-carousel">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_4-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_7-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Импульсная дорожная сумка/a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_5-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Сумка-мессенджер Wayfarer</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_6-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- List Logo V2 -->
	                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
	                            <ul>
	                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Product Box -->
	        <!-- Banner Full With -->
	        <div class="clearfix relative full-width bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container banner_full_width">
	                    <div class="row relative banners-effect5 overfollow-hidden">
	                        <img src="img/banner_full_w_1.png" alt="Banner Full Width . . .">
	                        <a href="#"></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Banner Full With -->
	        <!-- Product Box -->
	        <div class="container-web">
	            <div class=" container">
	                <div class="row">
	                    <div class="clearfix title-box title-box-v2 full-width">
	                        <div class="clearfix name-title-box title-category title-turquoise-bd relative">
	                            <img src="img/icon_electric_color.png" alt="Icon Food" class="absolute">
	                            <p class="text-default-color">Электрический</p>
	                        </div>
	                        <div class="clearfix menu-title-box capitalize">
	                            <ul>
	                                <li><a onclick="showBoxCateHomeByID('#television','.box-electric-content')" href="javascript:;">Телевидение</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#laptop','.box-electric-content')" href="javascript:;">Ноутбук</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#camera','.box-electric-content')" href="javascript:;">Камера</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#audio','.box-electric-content')" href="javascript:;">Аудио</a></li>
	                                <li><a onclick="showBoxCateHomeByID('#accessories','.box-electric-content')" href="javascript:;">Аксессуары</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class=" bottom-margin-default full-width">
	                        <!-- Banner Home V2 -->
	                        <div class=" banner-category banner-category-v2 full-width relative">
	                            <div class="effect-bubba zoom-image-hover overfollow-hidden">
	                                <img src="img/banner_cate_f_w_1-min.png" alt="Banner Home V2">
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                        <!-- List Product V2 -->
	                        <div class=" full-width box-content-product-home-v2 relative">
	                            <div class="slide-product-category border-collapsed-box active-box-category hidden-content-box box-electric-content animate-default" id="television">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_11-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Эмиль Генри Бразер r21</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_12-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_13-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_14-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category border-collapsed-box hidden-content-box box-electric-content animate-default" id="laptop">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_11-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_12-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_13-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_14-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category border-collapsed-box hidden-content-box box-electric-content animate-default" id="camera">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_11-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_12-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_13-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_14-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category border-collapsed-box hidden-content-box box-electric-content animate-default" id="audio">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_11-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_12-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_13-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_14-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="slide-product-category border-collapsed-box hidden-content-box box-electric-content animate-default" id="accessories">
	                                <div class="owl-carousel owl-theme">
	                                    <div class=" border-collapsed-element relative product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_11-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_12-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_13-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                    <div class=" relative border-collapsed-element product-no-ranking full-width">
	                                        <div class="effect-hover-zoom center-vertical-image">
	                                            <img src="img/product_home_14-min.png" alt="Product Image . . .">
	                                            <a href="#"></a>
	                                        </div>
	                                        <div class="clearfix absolute name-product-no-ranking">
	                                            <p class="title-product clearfix full-width"><a href="#">Диаметр Специальный1</a></p>
	                                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- List Logo V2 -->
	                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
	                            <ul>
	                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
	                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Product Box -->
	        <!-- Banner Half Website -->
	        <div class=" relative banner-half-web full-width bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container">
	                    <div class="row">
	                        <div class="clearfix content-left col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
	                            <div class="overfollow-hidden effect-oscar relative">
	                                <img class="max-width" src="img/banner_halt.png" alt="Banner . . ." />
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                        <div class="clearfix content-right col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
	                            <div class="overfollow-hidden effect-oscar relative">
	                                <img class="max-width" src="img/banner_percent_2.png" alt="Banner . . ." />
	                                <a href="#"></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Product Category Percent 2 -->
	        <div class=" full-width category-percent-two bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container">
	                    <div class="row">
	                        <div class=" clearfix content-left col-md-6 col-sm-6">
	                            <!-- Title Product -->
	                            <div class="clearfix title-box full-width border">
	                                <div class="clearfix name-title-box title-category title-gold-bg relative">
	                                    <img src="img/icon_fashion.png" alt="Icon Fashion" class="absolute" />
	                                    <p>Мода</p>
	                                </div>
	                                <div class="clearfix menu-title-box">
	                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">Посмотреть все</a></p>
	                                </div>
	                            </div>
	                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
	                                <img src="img/banner_product_percent.png" class="max-width" alt="Image . . ." />
	                                <a href="#"></a>
	                            </div>
	                            <!-- Content Product Box -->
	                            <div class="clearfix product-percent-content border-collapsed-box full-width">
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_1-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Дорожная сумка для йоги</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_2-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">MH02-Black09</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_3-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Дорожная сумка для йоги</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_4-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Дорожная сумка для йоги</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_5-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Дорожная сумка для йоги</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_6-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Дорожная сумка для йоги</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=" clearfix content-right col-md-6 col-sm-6">
	                            <!-- Title Product -->
	                            <div class="clearfix title-box full-width border">
	                                <div class="clearfix name-title-box title-category title-violet-bg relative">
	                                    <img src="img/icon_health.png" alt="Icon Health & Beauty" class="absolute" />
	                                    <p>Здоровье и Красота</p>
	                                </div>
	                                <div class="clearfix menu-title-box">
	                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">Посмотреть все</a></p>
	                                </div>
	                            </div>
	                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
	                                <img src="img/banner_p_2_1.png" class="max-width" alt="Image . . ." />
	                                <a href="#"></a>
	                            </div>
	                            <!-- Content Product Box -->
	                            <div class="clearfix product-percent-content border-collapsed-box full-width">
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_7-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_8-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_9-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_10-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_11-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_12-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Но что завтра?</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Product Category Percent 2 -->
	        <!-- Product Category Percent 2 -->
	        <div class=" full-width category-percent-two bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container">
	                    <div class="row">
	                        <div class=" clearfix content-left col-md-6 col-sm-6">
	                            <!-- Title Product -->
	                            <div class="clearfix title-box full-width border">
	                                <div class="clearfix name-title-box title-category title-magenta-bg relative">
	                                    <img src="img/icon_mother.png" alt="Icon Mother" class="absolute">
	                                    <p>Мать и ребенок</p>
	                                </div>
	                                <div class="clearfix menu-title-box">
	                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">Посмотреть все</a></p>
	                                </div>
	                            </div>
	                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
	                                <img src="img/banner_p_2_2.png" class="max-width" alt="Image . . ." />
	                                <a href="#"></a>
	                            </div>
	                            <!-- Content Product Box -->
	                            <div class="clearfix product-percent-content border-collapsed-box full-width">
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_13-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_14-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_15-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_16-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_17-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_18-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Некоторые результаты</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=" clearfix content-right col-md-6 col-sm-6">
	                            <!-- Title Product -->
	                            <div class="clearfix title-box full-width border">
	                                <div class="clearfix name-title-box title-category title-orchild-bg relative">
	                                    <img src="img/icon_auto.png" alt="Icon Auto" class="absolute">
	                                    <p>Атомобили и мотоциклы</p>
	                                </div>
	                                <div class="clearfix menu-title-box">
	                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">Посмотреть все</a></p>
	                                </div>
	                            </div>
	                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
	                                <img src="img/banner_p_2_3.png" class="max-width" alt="Image . . ." />
	                                <a href="#"></a>
	                            </div>
	                            <!-- Content Product Box -->
	                            <div class="clearfix product-percent-content border-collapsed-box full-width">
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_19-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_20-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_21-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_22-min.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_23.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
	                                    <div class="effect-hover-zoom center-vertical-image">
	                                        <img src="img/img_product_small_24.png" alt="Product Image . . .">
	                                        <a href="#"></a>
	                                    </div>
	                                    <div class="clearfix absolute name-product-no-ranking">
	                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Офицер полиции</a></p>
	                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Product Category Percent 2 -->
	        <!-- Slide Logo Brand -->
	        <div class=" slide-brand-box full-width bottom-margin-default">
	            <div class="clearfix container-web relative">
	                <div class=" container">
	                    <div class="row">
	                        <div class="nav-prev nav-slide-brand"></div>
	                        <div class="slide-logo-brand col-md-12 clear-padding relative owl-theme owl-carousel border-collapsed-box">
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_3.png" alt="Logo"></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_7.png" alt="Logo"></div>
	                            </div>
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_4.png" alt="Logo"></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_8.png" alt="Logo"></div>
	                            </div>
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_5.png" alt="Logo"></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_9.png" alt="Logo"></div>
	                            </div>
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_6.png" alt="Logo" /></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_10.png" alt="Logo" /></div>
	                            </div>
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_1.png" alt="Logo" /></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_11.png" alt="Logo" /></div>
	                            </div>
	                            <div class="item">
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_2.png" alt="Logo" /></div>
	                                <div class="clearfix border-collapsed-element relative logo-brand-son"><img src="img/logo_12.png" alt="Logo" /></div>
	                            </div>
	                        </div>
	                        <div class="nav-next nav-slide-brand"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Slide Brand -->
	        <!-- Banner Full With -->
	        <div class=" relative full-width bottom-margin-default">
	            <div class="clearfix container-web">
	                <div class=" container banner_full_width">
	                    <div class="row overfollow-hidden banners-effect5 relative">
	                        <img src="img/banner_cate_f_w_3-min.png" alt="Banner Full Width . . .">
	                        <a href="#"></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- End Banner Full With -->
	        <!-- Support -->
	        <div class=" support-box full-width bg-red support_box_v2">
	            <div class="container-web ">
	                <div class=" container">
	                    <div class="row">
	                        <div class=" support-box-info relative col-md-3 support-box-v2 col-sm-3 col-xs-6">
	                            <img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
	                            <p>Бесплатная доставка</p>
							<p>при заказе от $1000</p>
	                        </div>
	                        <div class=" support-box-info relative col-md-3 support-box-v2 col-sm-3 col-xs-6">
	                            <img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
	                            <p>Поддерживать</p>
							<p>Пожизненная поддержка 24/7</p>
	                        </div>
	                        <div class=" support-box-info relative col-md-3 support-box-v2 col-sm-3 col-xs-6">
	                            <img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
	                            <p>Помочь партнеру</p>
							<p>Помощь во всех аспектах</p>
	                        </div>
	                        <div class=" support-box-info relative col-md-3 support-box-v2 col-sm-3 col-xs-6">
	                            <img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
	                            <p>Свяжитесь с нами</p>
							<p>+7 (900) 900 0000</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- End Content Box -->
	    <!-- Footer Box -->
	    <footer class="relative full-width">
	        <div class="clearfix top-footer full-width">
	            <div class="clearfix container-web relative">
	                <div class=" container">
	                    <div class="row">
	                        <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
	                            <div class="clearfix text-subscribe">
	                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
	                                <p>Подписаться на рассылку</p>
								<p>Получайте обновления о скидках и купонах.</p>
	                            </div>
	                            <div class="clearfix form-subscribe">
	                                <input type="text" name="email-subscribe" placeholder="Введите адрес электронной почты . . .">
								<button class="animate-default button-hover-red">Подписаться</button>
							</div>
	                        </div>
	                        <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
	                            <a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
	                            <a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
	                            <a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
	                            <a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="clearfix container-web relative">
	            <div class=" container clear-padding">
	                <div class="row">
	                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
	                    <p>Мой счет</p>
						<ul class="list-footer">
							<li><a href="#">Мой счет</a></li>
							<li><a href="#">Авторизоваться</a></li>
							<li><a href="#">Моя тележка</a></li>
							<li><a href="#">Мой список пожеланийt</a></li>
							<li><a href="#">Мое сравнение</a></li>
						</ul>
					</div>
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Информация</p>
						<ul class="list-footer">
							<li><a href="#">Информация</a></li>
							<li><a href="#">История заказов</a></li>
							<li><a href="#">Мой список пожеланий</a></li>
							<li><a href="#">Политика конфиденциальности</a></li>
							<li><a href="#">Карта сайта</a></li>
                            </ul>
	                    </div>
	                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
	                        <p>Наши услуги</p>
						<ul class="list-footer">
							<li><a href="#">Отозвать продукт</a></li>
							<li><a href="#">Подарочные сертификаты</a></li>
							<li><a href="#">Возврат и обмен</a></li>
							<li><a href="#">Варианты доставки</a></li>
							<li><a href="#">Условия эксплуатации</a></li>
						</ul>
					</div>
					<div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
						<p>Связаться с нами</p>
						<ul class="icon-footer">
							<li><i class="fa fa-home" aria-hidden="true"></i> Российская Федерация, г.Сочи</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> Main@site.ru</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> +7 900 900 0000</li>
							<li><i class="fa fa-fax" aria-hidden="true"></i>+7 900 900 0000</li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 - 20:00</li>
                            </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class=" bottom-footer full-width">
	            <div class="clearfix container-web">
	                <div class=" container">
	                    <div class="row">
	                        <div class="clearfix col-md-7 clear-padding copyright">
	                            <p>Copyright © 2023 by A. M. All Rights Reserved.</p>
	                        </div>
	                        <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
	                            <div class="icon_logo_footer float-right">
	                                <img src="img/image_payment_footer-min.png" alt="">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	</div>
    <!-- End Footer Box -->
    <script src="js/jquery-3.3.1.min.js" defer=""></script>
    <script src="js/bootstrap.min.js" defer=""></script>
    <script src="js/owl.carousel.min.js" defer=""></script>
    <script src="js/scripts.js" defer=""></script>
</body>

</html>