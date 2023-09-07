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
		<!-- Content Track Your Order -->
		<div class="relative container-web">
			<div class="container">
				<div class="row relative">
					<div class=" relative content-track-order	">
						<p class="intro-track-order">Пожалуйста, введите свой идентификатор заказа в поле ниже и нажмите Enter. Это было указано вам в квитанции и в электронном письме с подтверждением, которое вы должны были получить. </p>
						<form method="POST" action="/">
							<div class="relative form-check-track">
								<label>НОМЕР ЗАКАЗА</label>
								<input class="border" type="text" name="order_id" placeholder="" value="">
							</div>
							<div class="relative form-check-track">
								<label>Платежный адрес электронной почты</label>
								<input class="border" type="text" name="email" placeholder="" value="">
							</div>
							<button type="submit" class="btn-check-track animate-default button-hover-red">ОТСЛЕЖИВАТЬ</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Track Your Order -->
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