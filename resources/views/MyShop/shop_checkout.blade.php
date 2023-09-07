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
							<li class="animate-default title-hover-red"><a href="#">Проверить</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content Checkout -->
		<div class="relative container-web">
			<div class="container">
				<div class="row relative">
					<div class="full-width relative top-checkout-box overfollow-hidden top-margin-default">
						<div class="col-md-6 col-sm-12 col-xs-12 clear-padding-left left-top-checkout">
							<div class="full-width box-btn-top-click">
								<p>Возвращающийся клиент? <a href="#" class="animate-default title-hover-red">Кликните здесь чтоб войти</a></p>
								<p class="intro-top-click top-margin-default bottom-margin-default">Если вы уже покупали у нас раньше, пожалуйста, введите свои данные в поля ниже. Если вы новый клиент, перейдите в раздел «Оплата и доставка».</p>
								<div class="relative">
									<form method="POST" action="/" class="form-placeholde-animate">
										<div class="field-wrap">
								            <label>
								            	Имя пользователя или адрес электронной почты<span class="req">*</span>
								            </label>
								            <input type="text" name="name" required autocomplete="off" />
							            </div>
							            <div class="field-wrap">
								            <label>
								            	Пароль<span class="req">*</span>
								            </label>
								            <input type="text" name="name" required autocomplete="off" />
							            </div>
							            <div class="relative justify-content form-login-checkout">
							            	<button type="submit" class="animate-default button-hover-red">АВТОРИЗОВАТЬСЯ</button>
							            	<ul class="check-box-custom list-radius clear-margin clear-margin">
												<li>
													<label class="clear-margin">Запомнить меня
														<input type="checkbox" >
					  									<span class="checkmark"></span>
					  								</label>
												</li>
											</ul>
							            	<a href="#" class="animate-default title-hover-red">Забыли пароль?</a>
							            </div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 clear-padding-right right-top-checkout">
							<div class="full-width box-btn-top-click">
								<p>Есть купон? <a href="#" class="animate-default title-hover-red">Нажмите здесь, чтобы ввести код</a></p>
							</div>
							<div class="relative coupon-box-checkout form-placeholde-animate top-margin-default">
								<div class="field-wrap list-radius">
						            <label>
						            	Код купона
						            </label>
						            <input type="text" name="name" required autocomplete="off" />
					            </div>
					            <button class="apply_coupon animate-default button-hover-red">ПРИМЕНЯТЬ</button>
							</div>
						</div>
					</div>
					<!-- Content Shoping Cart -->
					<div class="col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left">
						<p class="title-shoping-cart">Платежные реквизиты</p>
						<div class="relative clearfix full-width">
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
								<label>Имя *</label>
								<input class="full-width" type="text" name="firstname">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
								<label>Фамилия *</label>
								<input class="full-width" type="text" name="lastname">
							</div>
						</div>
						<div class="form-input full-width clearfix relative">
							<label>Название компании</label>
							<input class="full-width" type="text" name="companyname">
						</div>
						<div class="relative clearfix full-width">
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
								<label>Адрес электронной почты *</label>
								<input class="full-width" type="text" name="firstname">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
								<label>Телефон *</label>
								<input class="full-width" type="text" name="lastname">
							</div>
						</div>
						<div class="form-input full-width clearfix relative">
							<label>Страна *</label>
							<select class="full-width">
								<option value="1">Вьетнам</option>
								<option value="2">США</option>
								<option value="3">Таиланд</option>
								<option value="4">Россия</option>
							</select>
						</div>
						<div class="form-input full-width clearfix relative">
							<label>Адрес *</label>
							<input class="full-width" type="text" name="address">
						</div>
						<div class="relative full-width clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
								<label>Почтовый индекс *</label>
								<input class="full-width" type="text" name="firstname">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
								<label>Город *</label>
								<input class="full-width" type="text" name="lastname">
							</div>
						</div>
						<ul class="check-box-custom list-radius title-check-box-black clear-margin top-margin-default">
							<li>
								<label class="">Завести аккаунт?
									<input type="checkbox" >
  									<span class="checkmark"></span>
  								</label>
							</li>
						</ul>
						<p class="title-shoping-cart">Отгрузочные реквизиты</p>
						<ul class="check-box-custom title-check-box-black list-radius clear-margin top-margin-default">
							<li>
								<label class="">Доставить по другому адресу?
									<input type="checkbox" >
  									<span class="checkmark"></span>
  								</label>
							</li>
						</ul>
						<div class="form-input clearfix full-width relative">
							<label>Примечание к заказу</label>
							<textarea placeholder="Notes about your order, e.g. special notes for delivery." class="full-width" name="ordernote" rows="4"></textarea>
						</div>
					</div>
					<!-- End Content Shoping Cart -->
					<!-- Content Right -->
					<div class="col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right">
						<p class="title-shoping-cart">Твоя очередь</p>
						<div class="full-width relative overfollow-hidden">
							<div class="relative clearfix full-width product-order-sidebar border no-border-t no-border-r no-border-l">
								<div class="image-product-order-sidebar center-vertical-image">
									<img src="img/product_home_5-min.png" alt="" />
								</div>
								<div class="relative info-product-order-sidebar">
									<p class="title-product top-margin-15-default animate-default title-hover-black"><a href="#">Рюкзак Endeavour Daytrip x1</a></p>
									<p class="price-product">$350.00</p>
								</div>
							</div>
							<div class="relative clearfix full-width product-order-sidebar border no-border-t no-border-r no-border-l">
								<div class="image-product-order-sidebar center-vertical-image">
									<img src="img/img_product_small_9-min.png" alt="" />
								</div>
								<div class="relative info-product-order-sidebar">
									<p class="title-product top-margin-15-default animate-default title-hover-black"><a href="#">Диам Специальный08 x1</a></p>
									<p class="price-product">$350.00</p>
								</div>
							</div>
						</div>
						<p class="title-shoping-cart">Всего в корзине</p>
						<div class="full-width relative cart-total bg-gray  clearfix">
							<div class="relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l">
								<p>Промежуточный итог</p>
								<p class="text-red price-shoping-cart">$700.00</p>
							</div>
							<div class="relative border top-margin-15-default bottom-padding-15-default no-border-t no-border-r no-border-l">
								<p class="bottom-margin-15-default">Доставка</p>
								<div class="relative justify-content">
									<ul class="check-box-custom title-check-box-black clear-margin clear-margin">
										<li>
											<label>Бесплатная доставка
												<input type="radio" name="shiping-order" checked="">
			  									<span class="checkmark"></span>
			  								</label>
										</li>
										<li>
											<label>Стандарт
												<input type="radio" name="shiping-order">
			  									<span class="checkmark"></span>
			  								</label>
										</li>
										<li>
											<label>Местный пикап
												<input type="radio" name="shiping-order">
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
						<div class="full-width relative payment-box bg-gray top-margin-15-default clearfix">
							<ul class="check-box-custom list-radius title-check-box-black clear-margin clear-margin">
								<li>
									<label class="">Проверить платеж
										<input type="radio" name="payment" checked="">
	  									<span class="checkmark"></span>
	  								</label>
	  								<br><p class="info-payment">Пожалуйста, отправьте чек на имя магазина, улицу магазина, город магазина, штат/округ магазина, почтовый индекс магазина..</p>
								</li>
								<li>
									<label class="">Paypal <img class="left-margin-15-default" src="img/logo_payment-min.png" alt="Logo Paypal" />
										<input type="radio" name="payment">
	  									<span class="checkmark"></span>
	  								</label>
								</li>
							</ul>
						</div>
						<button class="btn-proceed-checkout full-width top-margin-15-default">Перейти к оформлению заказа</button>
					</div>
					<!-- End Content Right -->
				</div>
			</div>
		</div>
		<!-- End Content Checkout -->
		<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>Бесплатная доставка</p>
							<p>при заказе от $1000</p>
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