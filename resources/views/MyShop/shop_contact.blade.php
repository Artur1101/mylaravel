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
							<li class="animate-default title-hover-red"><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content Contact -->
		<div class="relative container-web">
			<div class="container">
				<div class="row bottom-margin-default">
					<div id="map" class=" map-contact relative overfollow-hidden">
						
					</div>
				</div>
				<script>
						var map, marker, infoWindow;
						var SOCHI = {lat: 43.640162, lng: 39.704924};
						var OPERA_HOUSE = {lat: 43.640162, lng: 39.704924};
						function initMap() {
						  // Create a map in the usual way.
						  map = new google.maps.Map(
						      document.getElementById('map'), {
						      	center: SOCHI,
						      	zoom: 18,
						      	styles: [
									  {
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#f5f5f5"
									      }
									    ]
									  },
									  {
									    "elementType": "labels.icon",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#616161"
									      }
									    ]
									  },
									  {
									    "elementType": "labels.text.stroke",
									    "stylers": [
									      {
									        "color": "#f5f5f5"
									      }
									    ]
									  },
									  {
									    "featureType": "administrative.land_parcel",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#bdbdbd"
									      }
									    ]
									  },
									  {
									    "featureType": "poi",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#eeeeee"
									      }
									    ]
									  },
									  {
									    "featureType": "poi",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#757575"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.park",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#e5e5e5"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.park",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#9e9e9e"
									      }
									    ]
									  },
									  {
									    "featureType": "road",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#ffffff"
									      }
									    ]
									  },
									  {
									    "featureType": "road.arterial",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#757575"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#dadada"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#616161"
									      }
									    ]
									  },
									  {
									    "featureType": "road.local",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#9e9e9e"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.line",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#e5e5e5"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.station",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#eeeeee"
									      }
									    ]
									  },
									  {
									    "featureType": "water",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#c9c9c9"
									      }
									    ]
									  },
									  {
									    "featureType": "water",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#9e9e9e"
									      }
									    ]
									  }
									]
						      });

						  // Create a marker. Markers behave smoothly with the beta renderer.
						  marker = new google.maps.Marker({position: OPERA_HOUSE, map: map});
						  
						}
				</script>
				<div class="row footer-from-address">
					<div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
						<div class="row">
							<p class="title-contact bold bottom-margin-default">Контактная информация</p>
							<div class="relative clearfix row-info-contact full-width bottom-margin-default">
								<div class="relative left-row-info-contact">
									<img src="img/icon_office-min.png" alt="" />
								</div>
								<div class="relative right-row-info-contact">
									<p class="bold name-row-contact">Мой офис</p>
									<p>Российская Федерация, г.Сочи</p>
									<p>Горячая линия: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Fax: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Email: <a href="mailto:Main@site.ru">Main@site.ru</a></p>
								</div>
							</div>
							<div class="relative clearfix row-info-contact full-width bottom-margin-default top-margin-15-default">
								<div class="relative left-row-info-contact">
									<img src="img/icon_point_map-min.png" alt="" />
								</div>
								<div class="relative right-row-info-contact">
									<p class="bold name-row-contact">Офис продаж</p>
									<p>Российская Федерация, г.Сочи</p>
									<p>Горячая линия: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Fax: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Email: <a href="mailto:Main@site.ru">Main@site.ru</a></p>
								</div>
							</div>
							<div class="relative clearfix row-info-contact full-width bottom-margin-default top-margin-15-default">
								<div class="relative left-row-info-contact">
								</div>
								<div class="relative right-row-info-contact">
									<p>Российская Федерация, г.Сочи</p>
									<p>Горячая линия: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Fax: <a href="tel:+79009000000">+7 900 900 0000</a></p>
									<p>Email: <a href="mailto:Main@site.ru">Main@site.ru</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 relative contact-info col-sm-12 col-xs-12">
						<div class="row">
							<p class="title-contact bold bottom-margin-default">Отправить сообщение</p>
							<div class="relative full-width form-contact">
								<form method="POST" action="/" class="form-placeholde-animate">
						            <div class="field-wrap">
							            <label>
							            	Имя<span class="req">*</span>
							            </label>
							            <input type="text" name="name" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Номер телефона<span class="req">*</span>
							            </label>
							            <input type="text" name="phone" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Ваш адрес электронной почты<span class="req">*</span>
							            </label>
							            <input type="text" name="email" required autocomplete="off" />
						            </div>
						            <div class="field-wrap">
							            <label>
							            	Сообщение<span class="req">*</span>
							            </label>
							            <textarea required name="message" rows="6" autocomplete="off"></textarea>
						            </div>
						            <button type="submit" class="uppercase animate-default button-hover-red">Отправить сообщение</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Contact -->
		<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>Бесплатная доставкаg</p>
							<p>При заказе от $1000</p>
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