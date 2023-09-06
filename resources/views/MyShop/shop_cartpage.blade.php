<x-header></x-header>
	<!-- Content Box -->
	<div class="relative full-width">
		<!-- Breadcrumb -->
		<div class="container-web relative">
			<div class="container">
				<div class="row">
					<div class="breadcrumb-web">
						<ul class="clear-margin">
							<li class="animate-default title-hover-red"><a href="#">Дом</a></li>
							<li class="animate-default title-hover-red"><a href="#">Корзина</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content Shoping Cart -->
		<div class="relative container-web">
			<div class="container">
				<div class="row relative">
					<!-- Content Shoping Cart -->
					<div class="col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left">
						<p class="title-shoping-cart">Корзина</p>
						<div class="relative full-width product-in-cart border no-border-l no-border-r overfollow-hidden">
							<div class="relative product-in-cart-col-1 center-vertical-image">
								<img src="img/product_home_5-min.png" alt="">
							</div>
							<div class="relative product-in-cart-col-2">
								<p class="title-hover-black"><a href="#" class="animate-default">Сумка для йоги Voyage</a></p>
							</div>
							<div class="relative product-in-cart-col-3">
								<span class="ti-close relative remove-product"></span>
								<p class="text-red price-shoping-cart">$350.00</p>
							</div>
						</div>
						<div class="relative full-width product-in-cart border no-border-l no-border-r overfollow-hidden">
							<div class="relative product-in-cart-col-1 center-vertical-image">
								<img src="img/img_product_small_9-min.png" alt="">
							</div>
							<div class="relative product-in-cart-col-2">
								<p class="title-hover-black"><a href="#" class="animate-default">Завтра настало время сотрудника</a></p>
							</div>
							<div class="relative product-in-cart-col-3">
								<span class="ti-close relative remove-product"></span>
								<p class="text-red price-shoping-cart">$350.00</p>
							</div>
						</div>
						<aside class="btn-shoping-cart justify-content top-margin-default bottom-margin-default">
							<a href="#" class="clear-margin animate-default">Продолжить покупки</a>
							<a href="#" class="clear-margin animate-default">Обновить корзину</a>
						</aside>
					</div>
					<!-- End Content Shoping Cart -->
					<!-- Content Right -->
					<div class="col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right">
						<p class="title-shoping-cart">Купон</p>
						<div class="full-width relative coupon-code bg-gray  clearfix">
							<input type="text" class="full-width" name="coupon_code" placeholder="Coupon Code">
							<button class="full-width top-margin-15-default">ПРИМЕНИТЬ КУПОН</button>
						</div>
						<p class="title-shoping-cart">Всего в корзине</p>
						<div class="full-width relative cart-total bg-gray  clearfix">
							<div class="relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l">
								<p>Промежуточный итог</p>
								<p class="text-red price-shoping-cart">$700.00</p>
							</div>
							<div class="relative border top-margin-15-default bottom-padding-15-default no-border-t no-border-r no-border-l">
								<p class="bottom-margin-15-default">Перевозки</p>
								<div class="relative justify-content">
									<ul class="check-box-custom title-check-box-black clear-margin clear-margin">
										<li>
											<label>Бесплатная доставка
												<input type="radio" name="shipping" checked="">
			  									<span class="checkmark"></span>
			  								</label>
										</li>
										<li>
											<label>Стандарт
												<input type="radio" name="shipping">
			  									<span class="checkmark"></span>
			  								</label>
										</li>
										<li>
											<label>Местный пикап
												<input type="radio" name="shipping">
			  									<span class="checkmark"></span>
			  								</label>
										</li>
									</ul>
									<p class="price-gray-sidebar">$20.00</p>
								</div>
								<div onclick="optionShiping(this)" class="relative full-width select-ship-option justify-content top-margin-15-default">
									<p class="border no-border-r no-border-l no-border-t">Рассчитать стоимость доставки</p>
									<i class="fa fa-caret-down" aria-hidden="true"></i>
									<ul class="clear-margin absolute full-width">
										<li onclick="selectOptionShoping(this)">Рассчитать стоимость доставки 1</li>
										<li onclick="selectOptionShoping(this)">Рассчитать стоимость доставки 2</li>
										<li onclick="selectOptionShoping(this)">Рассчитать стоимость доставки 3</li>
									</ul>
								</div>
							</div>
							<div class="relative justify-content top-margin-15-default">
								<p class="bold">Общий</p>
								<p class="text-red price-shoping-cart">$700.00</p>
							</div>
						</div>
						<button class="btn-proceed-checkout button-hover-red full-width top-margin-15-default">Перейти к оформлению заказа</button>
					</div>
					<!-- End Content Right -->
				</div>
			</div>
		</div>
		<!-- End Content Shoping Cart -->
		<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>Бесплатная доставка</p>
							<p>При заказе от $500</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
							<p>Поддерживать</p>
							<p>Пожизненная поддержка 24/7</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
							<p>Помочь партнеру</p>
							<p>Помощь во всех аспектах</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
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
	<x-footer></x-footer>
