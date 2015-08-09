﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

	<header class="header">		
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
				<h1>Smart Watch</h1>
				<p>умные часы</p>
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="header__phones">
					<p>+38 (096) 111 11 11</p>
					<p>+38 (096) 111 11 11</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<h4> ДОСТАВКА ПО КИЕВУ В ДЕНЬ ЗАКАЗА</h4>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a data-toggle="modal" href="#callme" class="header__but">Заказать звонок</a>
			</div>
		</div>	
	</header>

	<section class="slide">
		<div class="contain">
			<h1><b>Smart-часы</b> GT-08 с видео-камерой
			со скидкой 50% всего <b>2100</b> грн.</h1>
			<a data-toggle="modal" href="#callme" class="slide__but">Оформить заказ по акции</a>
		</div>
	</section>

	<section class="order">
		<div class="contain">
			<h1>Оформите заказ прямо сейчас
			и получите <b>скидку 50 %</b></h1>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="order__clock">
						<div class="order__clock__price"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="order__options"></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="order__form">
						<h3>Закажите smart-часы GT-08
						прямо <b>сейчас</b>, чтобы <br>
						<b>получить скидку 50 %</b></h3>
					
						<?php echo do_shortcode("[contact-form-7 id='64' title='buy_form']"); ?>

						<p>100% гарантии<br>конфиденциальности данных</p>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section class="video">
		<div class="contain">
			<h1>Посмотрите видео-обзор <b>Smart-часов GT-08</b></h1>
			<div class="video__box">
				<iframe width="585" height="360" src="https://www.youtube.com/embed/CkhLoaAQYxY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
    
    <section class="photo">
    	<h1>Посмотрите фото-обзор <b>Smart-часов GT-08</b></h1>
    	<div class="contain">
    	 <div class="photo__box">
		      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic1.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic1.png" alt=""/></a>
		      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic2.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic2.png" alt="" /></a>
		      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic3.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic3.png" alt="" /></a>
		      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic4.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic4.png" alt="" /></a>
		      	      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic5.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic5.png" alt="" /></a>
		      <a class="example-image-link" href="<?php bloginfo('template_directory'); ?>/img/pic6.png" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="<?php bloginfo('template_directory'); ?>/img/pic6.png" alt="" /></a>
	    </div>
	    <a data-toggle="modal" href="#callme" class="photo__but">Заказать сейчас</a>    
		</div>
    </section>

    <section class="options">
    	<h1>Технические характеристики</h1>
    	<div class="contain">
    		<div class="options__watch"></div>
    		<div class="options__desc"></div>
    		<a data-toggle="modal" href="#callme" class="options__but">Заказать сейчас</a>  
    	</div>
    </section>

    <section class="optionBut">
    	<div class="contain">
    		<div class="optionBut__block">
    			<div class="optionBut__block__img">
    				<img src="<?php bloginfo('template_directory'); ?>/img/mic.png" alt="">
    			</div>
    			<p>Микрофон</p>
    		</div>
    		<div class="optionBut__block">
    			<div class="optionBut__block__img">
    				<img src="<?php bloginfo('template_directory'); ?>/img/vibro.png" alt="">
    			</div>
    			<p>Вибромотор</p>
    		</div>
    		<div class="optionBut__block">
    			<div class="optionBut__block__img">
    				<img src="<?php bloginfo('template_directory'); ?>/img/mp3.png" alt="">
    			</div>
    			<p>MP3-плеер</p>
    		</div>
    		<div class="optionBut__block">
    			<div class="optionBut__block__img">
    				<img src="<?php bloginfo('template_directory'); ?>/img/radio.png" alt="">
    			</div>
    			<p>Радио</p>
    		</div>
    	</div>
    </section>

    <section class="advantages">
    	<div class="contain">
    		<h1>5 преимуществ <b>Smart-часов GT-08</b>,<br>
				которые Вы обязательно оцените</h1>	
				<div class="advantages__block">
					<div class="advantages__block__img">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv1.png" alt="">
					</div>
					<div class="advantages__block__text">
						<h3>Звукозапись</h3>
						<p>Запись в формате <b>HD WAV</b><br>Звук высокого качества</p>
					</div>
				</div>
				<div class="advantages__block">
					<div class="advantages__block__text">
						<h3>Функция анти-потеря</h3>
						<p>Когда Ваш телефон <b>далеко</b> от часов, они начинают <b>вибрировать</b></p>
					</div>
					<div class="advantages__block__img">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv2.png" alt="">
					</div>
				</div>
				<div class="advantages__block">
					<div class="advantages__block__img">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv3.png" alt="">
					</div>
					<div class="advantages__block__text">
						<h3>Батерея 320 mAh</h3>
						<p><b>Режим разговора:</b> 3 часа <br><b>Режим ожидания:</b> 180 часов</p>
					</div>
				</div>
				<div class="advantages__block">
					<div class="advantages__block__text">
						<h3>Медиа</h3>
						<p>Подключается к Вашему смартфону и
							<b>синхронизируется</b> с play-листом,
							или просто проигрывает музыку,
							которая находится на карте памяти</p>
					</div>
					<div class="advantages__block__img">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv4.png" alt="">
					</div>
				</div>
				<div class="advantages__block">
					<div class="advantages__block__img">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv5.png" alt="">
					</div>
					<div class="advantages__block__text">
						<h3>Интеграция</h3>
						<p>Возможна интеграция со всеми устройствами iOS и Android</p>
					</div>
				</div>	
			<div class="advantages__but">
				<a data-toggle="modal" href="#callme">Заказать сейчас</a>
			</div>  
    	</div>
    </section>

    <section class="reviews">
    	<div class="contain">
    		<h1>Почитайте <b>отзывы</b> тех, кто уже
				в восторге от smart-часов</h1>
    		<div class="reviews__block">
    			<div class="reviews__block__img">
    				<img src="<?php bloginfo('template_directory'); ?>/img/rev1.png" alt="">
    			</div>
    			<div class="reviews__block__text">
    				<h3>Иван Петреченков, 25 лет </h3>
    				<p>Очень понравился дизайн часов. Очень похожи на оригинальные Apple Watch. 
    					У меня периодически спрашивают где я купил их до официального старта продаж. 
    					На руке сидят удобно. Сенсор хороший, отзывчивый.
    					 Часы связь с телефоном не теряют, соединение четкое. 
    					 Очень удобно управлять плеером с часов и смотреть входящие вызовы и смс.</p>
    			</div>
    		</div>
    		<div class="reviews__block">
    			<div class="reviews__block__img"><img src="<?php bloginfo('template_directory'); ?>/img/rev2.png" alt=""></div>
    			<div class="reviews__block__text">
    				<h3>Юрий Петров, 20 лет </h3>
    				<p>Очень люблю продукцию фирмы Apple. 
    					Часами загорелся сразу после презентации, но увидев ценник расстроился- дороговато. 
    					Решил взять себе аналог, так как они не сильно отличаются.
    					Как в любой техники есть плюсы и минусы. Начну отзыв с плюсов. 
    					Отображаются входящие звонки с возможностью принять или отклонить. 
    					Музыкальный плеер -слушаю музыку в свободное время. 
    					Опять же аккумулятор держит до трёх дней и это не плохо.</p>
    			</div>
    		</div>
    		<div class="reviews__block">
    			<div class="reviews__block__img"><img src="<?php bloginfo('template_directory'); ?>/img/rev3.png" alt=""></div>
    			<div class="reviews__block__text">
    				<h3>Диана Петракова, 23 года </h3>
    				<p>Всегда относилась к умным часам с скептикой, 
    					думала что это очередная выкачка денег от производителя. 
    					А оказалось, что данный девайс весьма полезен. 
						Очень удобна вибрация при потере связи с телефоном. 
						Помогает не забывать свой мобильный где попало. 
						Крутой экран, замечательно работающий на солнышке. 
						Сенсор на морозе не проверял, так как пока тепло, 
						но думаю должен вести себя нормально.
						Плюс куча всяческих приятных мелочей, типа будильника и управления.</p>
    			</div>
    		</div>
    		
    	</div>
    </section>
    	
    <section class="how">
    	<div class="contain">
    		<h1>Как сделать заказ</h1>
    			<div class="how_row">
	    			<div class="how__block">
	    				<div class="how__block__img"><img src="<?php bloginfo('template_directory'); ?>/img/how1.png" alt=""></div>
	    				<h2>Заказ</h2>
	    				<p>Позвоните по указанным телефонам
						или закажите обратный звонок</p>
	    			</div>
	    			<div class="how__block">
	    				<div class="how__block__img"><img src="<?php bloginfo('template_directory'); ?>/img/how2.png" alt=""></div>
	    				<h2>Оплата</h2>
	    				<p>Оплатите на карточку ПриватБанка
						или наоженным платеж</p>
	    			</div>
	    			<div class="how__block">
	    				<div class="how__block__img"><img src="<?php bloginfo('template_directory'); ?>/img/how3.png" alt=""></div>
	    				<h2>Доставка</h2>
	    				<p>Доставка по Киеву бесплатна
						Возможна отправка Новой почтой
						(по территории Украины)</p>
	    			</div>
    			</div>
    			<div class="how__but">
					<a data-toggle="modal" href="#callme">Заказать сейчас</a>
				</div>     		
    	</div>
    </section>

	<footer class="footer">
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
				<h1>Smart Watch</h1>
				<p>умные часы</p>
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="footer__phones">
					<p>+38 (096) 111 11 11</p>
					<p>+38 (096) 111 11 11</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<h4> ДОСТАВКА ПО КИЕВУ В ДЕНЬ ЗАКАЗА</h4>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a data-toggle="modal" href="#callme" class="footer__but">Заказать звонок</a>
			</div>
		</div>	
	</footer>		

	<div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
	            <h3>Закажите smart-часы GT-08
						прямо <b>сейчас</b>, чтобы <br>
						<b>получить скидку 50 %</b></h3>
					
						<?php echo do_shortcode("[contact-form-7 id='64' title='buy_form']"); ?>
						<p>100% гарантии<br>конфиденциальности данных</p>
	            
	        </div>
	    </div>
	</div>

<?php wp_footer(); ?>
</body>
</html>