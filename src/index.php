<!DOCTYPE html>
<?php ob_start();?>
<html>
<head>
<meta charset="utf-8" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<title>"Taxi-Oscar" - Франшиза прибыльного таксопарка с чистой прибылью от 100 000р в месяц.</title>
<meta name="viewport" content="width=1000">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css?v=10" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="js/glide/jquery.glide.css" type="text/css" media="screen, projection" />
<!--<link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!--[if lte IE 8]><link rel="stylesheet" href="css/style-ie.css" type="text/css" media="screen, projection" /><![endif]-->
<script type="text/javascript" src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/glide/jquery.glide.min.js"></script>
<script type="text/javascript" src="js/inputmask/jquery.inputmask.js"></script>
<script type="text/javascript" src="js/scripts.js?v=8"></script>
<!--[if !IE]>-->
<script type="text/javascript" src="js/wow.min.js"></script>
<!--<![endif]-->
<!--[if IE ]>
<script type="text/javascript">
isBrowserIE = true;
</script>
<![endif]-->
</head2
<?php
require('config.php');

function show_catalog_item($key)
{
	global $catalog;
	$item = $catalog[$key];
	?>
		<div class="item animated wow zoomIn">
			<img src="content/catalog/<?=$item['image'];?>" alt="<?=$item['title'];?>" />
			<h4 class="title"><?=$item['title'];?></h4>
			<div class="price">
				<?php if (isset($item['mater'])) : ?><p>Материал: <?=$item['mater'];?></p><?php endif; ?>
				<p>Цена: <?php if (isset($item['price-old'])) : ?><s><?=$item['price-old'];?> руб.</s><?php endif; ?> <b><?=$item['price'];?> руб.</b></p>
				<?php if (isset($item['rent'])) : ?><p>Цена аренды: <span><?=$item['rent'];?> руб./сутки</span></p><?php endif; ?>
			</div>
		</div> <!--.item-->
	<?php
}
?>
<body>
<main class="g-page">
<header class="s-header">
	<nav class="topnav">
		<ul>
			<li class="current"><a href="#home" class="page-goto">Главная</a></li>
			<li><a href="#action" class="page-goto">Рынок такси</a></li>
			<li><a href="#advantages" class="page-goto">О нас</a></li>
			<li class="important"><a href="#whyus" class="page-goto">Калькулятор прибыли</a></li>
			<li><a href="#catalog" class="page-goto">Сравнение</a></li>
			<li><a href="#tarifs" class="page-goto">Тарифы</a></li>
			<li><a href="#our-channel" class="page-goto">Наш канал</a></li>
			<li><a href="#address" class="page-goto">Контакты</a></li>
		</ul>
	</nav>
</header> <!--.s-header-->

<section class="s-primary-slider anchor" id="home">
	<div id="primary-slider" class="slider">
		<ul class="slides">
			<?php for ($i=1; $i<=2; $i++) : ?>
				<li class="slide slide-content" style="background-image: url('content/slider/<?=$i;?>.jpg');"></li>
			<?php endfor; ?>
		</ul>
	</div>

	<section class="info">
		<div class="wrapper">
			<section class="caption">
				<div class="logo-holder">
					<span class="logo"></span>
					<div class="desc">
					
						<h1 class="title">Франшиза прибыльного таксопарка</h1>
						<h2 class="offer">Свой бизнес с возможностью роста по другим городам </h2>
					</div>
				</div> <!--.logo-holder-->
				<div class="contacts">
					<p class="phone">8 <i>495</i> 128-03-08</p>
					<a href="#callform" class="btn-light-styled js-fancybox-form">Заказать обратный звонок</a>
				</div> <!--.contacts-->
				<div class="clear"></div>
			</section> <!--.caption-->
			<section class="content">
				<p class="title">Откройте прибыльный бизнес в сфере такси</p>
				<p class="offer">
				
за 14 дней, с чистой прибылью<br> 
от 100.000 рублей/мес., и гарантией результата
				</p>
				<p class="min">Окупаемость до 5&mdash;ти месяцев</p>
				<div class="assortment">
					<div class="item"><div class="item-content">
						<p>Без вложений <br>в &nbsp;покупку машин.</p>
					</div></div>
					<div class="item"><div class="item-content">
						<p>Без аренды большого &nbsp;&nbsp;офиса.</p>
					</div></div>
					<div class="item"><div class="item-content">
						<p>С минимальным<br>штатом&nbsp;сотрудников.</p>
					</div></div>
					<div class="item"><div class="item-content">
						<p>С автоматизированными<br>&nbsp;бизнес&nbsp;процессами.</p>
					</div></div>
				</div> <!--.assortment-->
				<p class="price-notice">
					Запуск бизнеса с нуля за 1 месяц.<br>
					<b>Первую прибыль вы увидите уже в 1-й месяц работы. </b>
				</p>
				<p class="pricelist animated wow pulse">
					<a href="#pricelistform" class="btn-styled btn-styled-yellow js-fancybox-form">Получить презентацию</a>
				</p>
			</section> <!--.content-->
		</div>
	</section>
</section> <!--.s-primary-slider-->

<section class="s-action anchor" id="action">
	<div class="wrapper">
		<div class="content">
			<h2>Рынок такси в России</h2>
			<p>
				По состоянию на 2018 год
			</p>
		
			<img src="images/action1.jpg" alt="Делать бизнес на растущем рынке всегда проще!"> 
			<p class="gift">
				В <b>Москве</b> и других городах-миллионниках созданы все условия для того, чтобы люди отказывались от своих машин. <b>Платные парковки</b> в центре дорожают, бесплатных парковок для автомобилей такси становится все больше и больше.  В рамках проекта города планируется увеличить кол-во такси в ближайшие пол года на <b>2000 автомобилей</b>. Все это ведет к тому, что на такси становится ездить выгодней, чем содержать собственный автомобиль.
<br><br>
Такие компании как <b>Яндекс.Такси</b> и <b>UBER</b> открываясь в новых городах стимулируют водителей доплатами за поездки от <b>70%</b> до <b>120%</b> за каждый заказ. 
<br><br>
Теперь подработка на своем автомобиле стала возможной благодаря удобным сервисам UBER.
<br><br>
Вы имеете возможно <b>зарабатывать процент</b> от заказа <b>с каждого водителя</b> как на своем, так и арендованном автомобиле.
			</p>
		</div> <!--.content-->
	</div>
	
</section> <!--.s-action-->




<section class="s-advantages" id="advantages">
	<div class="wrapper">
		<h2 class="section-title bordered-after">Начиная бизнес самостоятельно</h2>
		<p class="offer">Вы скорей всего столкнетесь с:</p>
		<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Непонятно с чего начать?
					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Как построить систему налогообложения?
				</h3>
		
			</div> <!--.item-->



<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Где и как брать водителей и заказы на Такси?
					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Как заинтересовать водителя работать у вас?
				</h3>
		
			</div> <!--.item-->
		
		<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Неизвестно сколько инвестиций требуется на этапе запуска и срок окупаемости?

					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Сколько можно зарабатывать в этом бизнесе?
				</h3>
		
			</div> <!--.item-->
		


			<div class="clear"></div>
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon3"></span>
					Как строится система расчетов выплат водителям?
					
				</h3>
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon4"></span>
					Как контролировать работу водителей?
				</h3>
			</div> <!--.item-->
			<div class="clear"></div>
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
				<span class="icon icon5"></span>
			        С какими системами заказов работать и почему?
					
				</h3>
		
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon6"></span>
					Брать свои машины или нет? И если брать то, что выгодней: лизинг, аренда или кредит?
				</h3>
				
			</div> <!--.item-->
			<div class="clear"></div>
		</div> <!--.items-->
	</div>
</section> <!--.s-advantages-->




<section class="s-advantages1" id="advantages">
	<div class="wrapper">
		<h2 class="section-title bordered-after">Но можно и по-другому...</h2>
		<p class="offer">Компания <b>«Оскар Такси»</b> предлагает предпринимателям, начинающим бизнес такси или уже действующим такспаркам, решение значительного количества задач при старте и развитии бизнеса:</p>
		<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Предоставим полный алгоритм запуска своей службы такси
					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Предоставим бизнес-план под разные объемы стартового бюджета
				</h3>
		
			</div> <!--.item-->



<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Поможем разобраться с бухгалтерией, выбором оптимальных налоговых режимов и правовыми аспектами
					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Предоставим базу знаний с накопленным более, чем за 3 года опытом
				</h3>
		
			</div> <!--.item-->
		
		<div class="items">
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon1"></span>
					Предоставим сайт с настроенной рекламной кампанией

					
				</h3>
			
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon2"></span>
					Предоставим пошаговый алгоритм действий и <br>
предоставим гарантию окупаемости инвестиций в течении нескольких месяцев
				</h3>
		
			</div> <!--.item-->
		


			<div class="clear"></div>
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon3"></span>
					Закроем вопрос по поиску и наймом водителей
					
				</h3>
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon4"></span>
					Предоставим различные проверенные и наиболее выгодные схемы работы в бизнесе такси
				</h3>
			</div> <!--.item-->
			<div class="clear"></div>
			<div class="item animated wow fadeInLeft">
				<h3 class="title">
					<span class="icon icon5"></span>
			      Поможем стать партнерами крупнейших мировых агрегаторов заказов
					
				</h3>
		
			</div> <!--.item-->
			<div class="item item-right animated wow fadeInRight">
				<h3 class="title">
					<span class="icon icon6"></span>
					Поможем с открытием юр. лица и расчетного счета
				</h3>
				
			</div> <!--.item-->
			<div class="clear"></div>
		</div> <!--.items-->
	</div>
</section> <!--.s-advantages-->





<section class="s-covers anchor" id="covers">
	<center><img src="images/cdr.jpg" alt="Такси оскар в цифрах. Статистика по оборотам компании."> </center>

	<h2 class="section-title bordered-after bordered-after-red">На чем строится заработок?</h2>
	<p class="why">Заработок строится</p>
	<div class="reasons">
		<p class="item animated wow fadeInDown">
			<span class="icon icon1;"></span>
			<font style="background:#2681f3;color:#fff;"> На подключение водителей к системам заказов UBER, GetTaxi, Яндекс.Такси и Wheely (бизнес-класс). <br>
Вы получаете процент от заказа, которые равен от 3% до 5%.</font>
		</p>
		<p class="item animated wow fadeInDown">
			<span class="icon icon2"></span>
		<font style="background:#2681f3;color:#fff;">На сдаче машин в аренду или предоставления зарплатных графиков для водителей. <br>Прибыль в этом случае составит от 500р до 1 500р с автомобиля в сутки.
	</font></span>	</p>
		<p class="item animated wow fadeInDown">
			<span class="icon icon3"></span><font style="background:#2681f3;color:#fff;">
       -  Изготовлении лицензий на таксомоторную деятельность. <br>- Топливных программах.
		 <br>- Оклейки автомобилей.</span></font>
		</p>
	</div>
			<p class="order">
				<br><a href="#catalogform" class="btn-styled js-fancybox-form" data-section="Начать зарабатывать">Начать зарабатывать</a>
			</p>

	
</section> <!--.s-covers-->



<section class="s-whyus anchor" id="whyus">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-red">Калькулятор прибыли</h2>
		<div class="content">
			<div class="items items-left">
				<div class="item animated wow fadeInLeft" data-rel="legend1">
					<p><span class="icon icon1"></span>
					Водители на своих машинах<br>по комфорт классу</p>
				</div>
				<div class="item animated wow fadeInLeft" data-rel="legend2">
					<p><span class="icon icon2"></span>
					Сдача машин<br> в аренду </p>
				</div>
				<div class="item animated wow fadeInLeft" data-rel="legend3">
					<p><span class="icon icon3"></span>
					Изготовление лицензий</p>
				</div>
				<div class="item animated wow fadeInLeft" data-rel="legend4">
					<p><span class="icon icon4"></span>
					Топливные программы</p>
				</div>
			</div>
			<div class="image">
				<div class="legend legend1">
					<p>В среднем прибыль с одного водителя составляет 1400 рублей/месяц. <br> <br> 100 водителей на своих машинах по эконом/комфорт классу в среднем приносят = 140 000р/месяц. <br><br>* <i>При выборе ТП "Продвинутый" мы научим привлекать водителей без вложений.</i></p>
				</div>
				<div class="legend legend2">
					<p>Прибыль с машины эконом-класса в месяц при сдаче в аренду составит <br>12 000р/месяц.<br><br>Рекомендемое количество для старта: <br>10 машин, т.к. есть риски "битья" машин.<br><br>Есть возможность приобретения машин с первоначальным взносом всего <br>100 000р за единицу.  </p>
				</div>
				<div class="legend legend3">
					<p>Изготовление лицензий отличный способ привлекать новых водителей на своих авто.<br><br>Прибыль с изготовления одной лицензии составит = 1 500 - 4 000р.</p>
				</div>
				<div class="legend legend4">
					<p>Топливные компании платят от 0.5% до 6% с заправки каждого автомобиля.<br><br> Процент бонуса зависит от выбора топливной программы и объема заправок вашими водителями.</p>
				</div>
				<div class="legend legend5">
				    <p>Один Mercedes E-Class или BMW 5-Ser приносят такую же прибыль как три машины эконом-класса. <br><br>Заработок с водителя в среднем составляет 4 200 рублей/месяц. <br><br>* <i>При выборе ТП "Продвинутый" мы научим привлекать автопарки от 5-ти машин с машинами бизнес-класса.</i></p>
				</div>
				<div class="legend legend6">
					<p>Прибыль с машины эконом-класса <br>26 000р - 39 000/месяц. <br><br>В отличие от сдачи машин в аренду зарплатный проект имеет большее количество издержек, но при объеме прибыль в разы выше. <br><br>Рекомендемое количество для старта: <br>10 машин, т.к. есть риски "битья" машин.</p>
				</div>
				<div class="legend legend7">
					<p>После изготовления лицензий необходимо оклеить машину по ГОСТу. <br><br>Прибыль с оклейки составит <br>от 1000р до 4 000р с машины<br><br>Без своего покрасочного бокса.</p>
				</div>
				<div class="legend legend8">
					<p>Рекламные кампании платят 1 000р/мес за оклейку на стеклах автомобилей.<br><br>Оклейка в UBER и GetTaxi позволяет получать приоритет по заказам для водителей, что позволяет <br>зарабатывать больше!<br><br>Некоторые агрегаторы платят за оклейку <br>от 5 000 до 8 000р/месяц. </p>
				</div>
			</div>
			<div class="items items-right">
				<div class="item animated wow fadeInRight" data-rel="legend5">
					<p><span class="icon icon5"></span>
					Водители на своих машинах <br>по бизнес классу</p>
				</div>
				<div class="item animated wow fadeInRight" data-rel="legend6">
					<p><span class="icon icon6"></span>
					Сдача машин <br>на зарплатные графики</p>
				</div>
				<div class="item animated wow fadeInRight" data-rel="legend7">
					<p><span class="icon icon7"></span>
					Оклейка автомобилей</p>
				</div>
				<div class="item animated wow fadeInRight" data-rel="legend8">
					<p><span class="icon icon8"></span>
					Реклама на машинах </p>
				</div>
			</div>


			<div class="clear"></div>

			<p class="order">
				<br><a href="#catalogform" class="btn-styled js-fancybox-form" data-section="Начать зарабатывать">Получить финансовую модель</a>
			</p>
		</div> <!--.content-->
	</div>
</section> <!--.s-whyus-->




<section class="s-catalog anchor" id="catalog">



	<div class="offer">
		СРАВНЕНИЕ С ДРУГИМИ
		<b>БИЗНЕСАМИ</b>
	</div>





	<div class="bordered-after bordered-after-red"></div>
	<div class="wrapper">
		<div class="catsection">
			<h3 class="catsection-title">Три популярных бизнеса в рф:</h3>
			<br/>

			<table class="table-comparison">

				<tr class="table-title">
					<th></th>
					<th>Строительство</th>
					<th>Салон красоты</th>
					<th>Такси</th>
				</tr>

				<tr>
					<td>Состояние рынка (конкуренция)</td>
					<td class="table-elevent-center">Рынок в упадке</td>
					<td class="table-elevent-center">Рынок в стогнации</td>
					<td class="table-elevent-center">Растущий рынок</td>
				</tr>

				<tr>
					<td>Процент банкротства (статистика)</td>
					<td class="table-elevent-center">5-25%</td>
					<td class="table-elevent-center">15-45%</td>
					<td class="table-elevent-center">5-25%</td>
				</tr>

				<tr>
					<td>Количество сотрудников (для содержания бизнеса)</td>
					<td class="table-elevent-center">5 - 45</td>
					<td class="table-elevent-center">3 - 25</td>
					<td class="table-elevent-center">1 - 5</td>
				</tr>

				<tr>
					<td>Вложение в рекламу</td>
					<td class="table-elevent-center">30 000 - 350 000р</td>
					<td class="table-elevent-center">20 000 - 60 000р</td>
					<td class="table-elevent-center">5 000 - 45 000р</td>
				</tr>

				<tr>
					<td>Ремонт помещения (вложения)</td>
					<td class="table-elevent-center">30 000 - 500 000р</td>
					<td class="table-elevent-center">20 000 - 600 000р</td>
					<td class="table-elevent-center">0р</td>
				</tr>

				<tr>
					<td>Аренда помещения (вложения)</td>
					<td class="table-elevent-center">40 000 - 2000 000р</td>
					<td class="table-elevent-center">40 000 - 180 000р</td>
					<td class="table-elevent-center">0 - 25 000р</td>
				</tr>

				<tr>
					<td>Срок "раскрутки" бизнеса</td>
					<td class="table-elevent-center">1 - 3 года</td>
					<td class="table-elevent-center">6 - 12 мес</td>
					<td class="table-elevent-center">0 - 4 мес</td>
				</tr>

				<tr>
					<td>Масшатбирование (рост по городам)</td>
					<td class="table-elevent-center">-</td>
					<td class="table-elevent-center">-</td>
					<td class="table-elevent-center">+</td>
				</tr>

				<tr>
					<td>Бизнес "без Вашего участия" </td>
					<td class="table-elevent-center">-</td>
					<td class="table-elevent-center">+</td>
					<td class="table-elevent-center">+</td>
				</tr>

			</table>

		</div>
		<!--.catsection-->
</section>



<section class="s-for-dealers anchor" id="for-dealers">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-yellow">Преимущества нашей <b>франшизы</b>!</h2>
		<p class="offer2">Что Вы получите, работая с нами?</p>

		<div class="items">
			<div class="row js-eq-h">
				<div class="item item1 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">01</h3>
						<div class="text">
							<p>Прибыль с первой недели после запуска.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item2 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">02</h3>
						<div class="text">
							<p>Окупаемость от 2-х до 5 месяцев.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->
			<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">03</h3>
						<div class="text">
							<p>
  								<ul>
  									<li>Без аренды большого офиса.</li>
  									<li>Без вложений в автопарк.</li>
  									<li>Без большого зарплатного фонда.</li>
  									<li>Без затрат на закупку товара.</li>
  									<li>Без затрат на покупку оборудования.</li>
  								</ul>

							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">04</h3>
						<div class="text">
							<p>Низкая конкуренция, <br>большой объем рынка</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->



	<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">05</h3>
						<div class="text">
							<p>
  								Бизнес легко масштабируется. <br>Больше водителей - выше доход!
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">06</h3>
						<div class="text">
							<p>Возможность автоматизации бизнес-процессов.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->



<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">07</h3>
						<div class="text">
							<p>
  								Невозможно уйти в минус.
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">08</h3>
						<div class="text">
							<p>Гарантия результата, либо вернем деньги</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->


<div class="row js-eq-h">
				<div class="item item5 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">09</h3>
						<div class="text">
							<p>
  								Быстрый запуск.
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item6 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">10</h3>
						<div class="text">
							<p>Бизнесом просто управлять, не затрачивая много времени.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->

			</div>
				<div class="clear"></div>
			</div> <!--.row-->
		</div> <!--.items-->

	</div>
</section> <!--.s-for-dealers-->


<section class="s-whyus anchor" id="geography">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-red">География франшизы</h2>

		<div class="geography">
			<p align="center">
				<img src="images/geography.png" width="900">
				<ul class="legend">
					<li class="legend-item green">Забронированные франшизы</li>
					<li class="legend-item yellow">Проданные франшизы</li>
					<li class="legend-item main">Головной офис (Москва)</li>
				</ul>
			</p>
		</div>
	</div>
</section>


		</div> <!--.catsection-->
	</div> <!--.wrapper-->
</section> <!--.s-catalog-->





<section class="s1-for-dealers anchor" id="for-dealers">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-yellow">Что Вы получаете при покупке франшизы</b>!</h2>
		<p class="offer2">Бизнес с нами станет выгодней:</p>

		<div class="items">
			<div class="row js-eq-h">
				<div class="item item1 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">01</h3>
						<div class="text">
							<p>Уникальную автоматизированную систему собственной разработки для расчета зарплат водителей.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item2 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">02</h3>
						<div class="text">
							<p>Оптимизированную схему налогообложения – минимум налоговой нагрузки и издержек.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->
			<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">03</h3>
						<div class="text">
							<p>
  						      Полную поддержку с нашей стороны после создания бизнеса. В том числе бухгалтерскую и юридическую.
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">04</h3>
						<div class="text">
							<p>Полное обучение. Все тонкости, секреты и дополнительные способы заработка на этом бизнеса.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->



	<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">05</h3>
						<div class="text">
							<p>
  								Эффективно настроенные каналы рекламные каналы привлечения клиентов и рекомендации по продвижению.
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">06</h3>
						<div class="text">
							<p>VIP статус партнера Get&Uber. *</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->



<div class="row js-eq-h">
				<div class="item item3 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">07</h3>
						<div class="text">
							<p>
  								Бесплатный способ получения новых водителей. *
							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item4 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">08</h3>
						<div class="text">
							<p>Проверенные зарплатные графики для водителей + экономическая модель. *</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->


<div class="row js-eq-h">
				<div class="item item5 animated wow fadeInLeft">
					<div class="content js-eq-h-item">
						<h3 class="title">09</h3>
						<div class="text">
							<p>
  								Бонусы: столовые для таксистов, установка GPS-спутников, ГБО для машин.

							</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="item item6 animated wow fadeInRight">
					<div class="content js-eq-h-item">
						<h3 class="title">10</h3>
						<div class="text">
							<p>Мойки для водителей со скидками, адреса недорогих хостелов.</p>
						</div>
					</div> <!--.content-->
				</div>
				<div class="clear"></div>
			</div> <!--.row-->

			</div>
				<div class="clear"></div>
			</div> <!--.row-->
		</div> <!--.items-->
		<div class="order">
			<p class="present">И маленький презент первым 100 отправившим заявку – <b>промокод на бесплатные поездки Такси</b>!</p>
			<p class="message">Отправьте заявку на получение подробностей по франшизе Такси</p>
			<a href="#dealerform" class="btn-styled btn-styled-yellow js-fancybox-form">Получить бизнес план</a>
		</div> <!--.order-->
	</div>
</section> <!--.s-for-dealers-->





<section class="s-special-offer">
	<h2 class="section-title">Специальное предложение!</h2>
	<p class="offer">Гарантия первой прибыли в 1-й месяц работы</p>
	<p class="order">
		<a href="#covers" class="btn-styled btn-styled-white page-goto">Узнайте подробности</a>
	</p>
</section> <!--.s-special-offer-->



<section class="s-whyus anchor" id="tarifs">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-red">Каковы cтартовые инвестиции?
			<br/>Возможны три варианта приобретения франшизы</h2>
		<div class="content">
			<div class="tarifs">
				<div class="tarif">
					<h2>Тариф «Удобный»</h2>
					<ul>
						<li>Обучающая программа&nbsp;+ материалы</li>
						<li>Обучение и тренинги для сотрудников</li>
						<li>Оптимизация налогообложения</li>
						<li>Фин. модель</li>
						<li>Примеры объявлений для поиска водителей и общий принцип подбора персонала</li>
					</ul>
					<p class="price">100&nbsp;000 руб.</p>
					<a href="#franshizaform_1" class="btn-styled small js-fancybox-form">Открыть свой бизнес</a>
				</div>
				<div class="tarif tarif-best">
					<h2>Тариф «Продвинутый»</h2>
					<p class="description">Всё что включено в тариф «удобный»&nbsp;+</p>
					<ul>
						<li>Сайт +РК для поиска водителей</li>
						<li>10 готовых водителей в вашу компанию</li>
						<li>Гарантия прибыли</li>
						<li>Атоматизация расчета зарплат водителей</li>
						<li>Создание своего автопарка с графиками для водителей</li>
						<li>Бесплатный способ привлечения водителей</li>
						<li>Дополнительные способы заработка + БОНУСЫ и ПОДАРКИ!</li>
					</ul>
					<p class="price">250&nbsp;000 руб.</p>
					<a href="#franshizaform_2" class="btn-styled small js-fancybox-form">Открыть свой бизнес</a>
				</div>
				<div class="tarif">
					<h2>Тариф «Всё включено»</h2>
					<p class="description">Всё что включено в тариф «Продвинутый»&nbsp;+</p>
					<ul>
						<li>Готовый бизнес, который приносит от 100&nbsp;000 р/мес. чистой прибыли</li>
						<li>3 личных кабинета с водителями в нем</li>
					</ul>
					<p class="price">1&nbsp;000&nbsp;000 руб.</p>
					<a href="#franshizaform_3" class="btn-styled small js-fancybox-form">Получить бизнес</a>
				</div>
			</div>	
		</div>
	</div>
</section>
<!--.s-whyus-->





<section class="s-partners anchor" id="partners">
	<h2 class="section-title bordered-after">Что потребуется для начала работы?</h2>
	<div class="samples">
		<div class="item item1 animated wow fadeInLeft delay2"></div>
		<div class="item item2 animated wow fadeInLeft">
			<div class="legend"><div><div>
				<h3 class="bordered-after bordered-after-small">30 дней</h3>
				<p>Для запуска бизнеса в полном объеме.</p>
			</div></div></div>
		</div>
		<div class="item item3 animated wow fadeInRight">
			<div class="legend"><div><div>
				<h3 class="bordered-after bordered-after-small">Желание</h3>
				<p>Вникать во все тонкости бизнеса</p>
			</div></div></div>
		</div>
		<div class="item item4 animated wow fadeInRight delay2"></div>
		<div class="item item5 animated wow fadeInLeft delay2"></div>
		<div class="item item6 animated wow fadeInLeft">
			<div class="legend"><div><div>
				<h3 class="bordered-after bordered-after-small">Юр. лицо</h3>
				<p>Мы поможем Вам правильно зарегистрировать юридическое лицо.</p>
			</div></div></div>
		</div>
		<div class="item item7 animated wow fadeInRight">
			<div class="legend"><div><div>
				<h3 class="bordered-after bordered-after-small">Мы открыли уже 14 филиалов  <br></h3>
				<p>У нас получилось.<br>Получится и у Вас!</p>
			</div></div></div>
		</div>
		<div class="item item8 animated wow fadeInRight delay2"></div>
	</div>
	<div class="clear"></div>
	<div class="wrapper logos">
		<table><tr>
			<td>
				<div class="item-in-block">
				
					<span>На основе нашего опыта гарантируем:<br>все вложения окупятся в первые 6 месяцев работы</span>
				</div>
			</td>
			
			<td>
				<div class="item animated wow fadeInRight delay2">
							<div class="buttons">
					<input type="submit" class="btn-styled small" value="Получить расчет инвестиций" />
					<input type="hidden" name="subject" value="Получить расчет инвестиций" />
				</div> <!--.buttons-->
				</div>
			</td>
		</tr></table>
	</div>
</section> <!--.s-partners-->

<section class="s-calc" id="our-channel">
	<div class="wrapper">
		<h2 class="section-title bordered-after bordered-after-red">Посмотрите видео нашего канала на <font style="color:#ff0033;font-weight: bold;">YouTube</font></h2>
		<div class="form">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ZaynTq1GYPc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</section> <!--.s-calc-->

<section class="s-address anchor" id="address">
	<h2 class="section-title bordered-after">Наш адрес</h2>
	<p class="address">
		Москва, метро нагатинская<br>Варшавское шоссе, д. 28А, 6-й этаж<br>
		8 <font style="color:#ff0033;">495</font> 128-03-08<br>
		E-mail: taxioskar@yandex.ru
	</p>
	<div class="yamap" id="yamap"></div>
</section> <!--.s-address-->



<section class="s-action s-action2">
	<div class="wrapper">
		<div class="content">
			<h2>У Вас остались вопросы?</h2>
			<h3>Закажите обратный звонок и наш сотрудник перезвонит Вам</h3>
			<form action="#" method="post" class="b-sendform js-sendform">
				<p class="b-sendform-head"></p>
				<div class="b-sendform-body">
					<div class="row">
						<label>
							<span class="label">Введите Ваше имя:</span>
							<input type="text" class="i-text" name="name" />
						</label>
					</div> <!--.row-->
					<div class="row">
						<label>
							<span class="label">Введите Ваш <span>телефон</span>:</span>
							<input type="tel" class="i-text" name="phone" />
						</label>
					</div> <!--.row-->
					<div class="row">
						<label>
							<span class="label">Введите Ваш e-mail:</span>
							<input type="text" class="i-text" name="email" />
						</label>
					</div> <!--.row-->
					<div class="buttons">
						<input type="submit" class="btn-styled" value="Заказать обратный звонок" />
						<input type="hidden" name="subject" value="Заказать обратный звонок" />
					</div> <!--.buttons-->
				</div> <!--.b-sendform-body-->
			</form> <!--.b-sendform-->
		</div> <!--.content-->
	</div>
</section> <!--.s-action2-->

<footer class="s-footer">
	<div class="wrapper">
		<a href="#home" class="gotop page-goto"></a>
		<p class="copyright">&copy; Такси-Оскар, 2015-2018<br><i>Все права защищены</i></p>
		<p class="landingclub">Разработано Taxi-Oscar</p>
		<p class="contacts">
			<a href="mailto:taxioskar@yandex.ru">taxioskar@yandex.ru</a>
			&nbsp;&nbsp;
			8 495 128-03-08

		</p>
	</div>
</footer>
</main>

<div id="callform" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Закажите обратный звонок</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Заказать" />
				<input type="hidden" name="subject" value="Заказ обратного звонка" />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>

<div id="pricelistform" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Получите прайс-лист прямо сейчас!</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Получить прайс-лист" />
				<input type="hidden" name="subject" value="Заказ прайс-листа" />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>

<div id="catalogform" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Закажите каталог прямо сейчас!</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Заказать каталог" />
				<input type="hidden" name="subject" value="Заказ каталога" />
				<input type="hidden" name="section" value="" />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>

<div id="dealerform" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Заявка на заключение<br>дилерского контракта</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Отправить" />
				<input type="hidden" name="subject" value="Заявка на заключение дилерского контракта" />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>

<div id="franshizaform_1" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Заявка на приобритение франшизы<br>Тариф "Удобный"</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Отправить" />
				<input type="hidden" name="subject" value='Заявка на приобритение франшизы. Тариф "Удобный"' />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>


<div id="franshizaform_2" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Заявка на приобритение франшизы<br>Тариф "Продвинутый"</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Отправить" />
				<input type="hidden" name="subject" value='Заявка на приобритение франшизы. Тариф "Продвинутый"' />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>

<div id="franshizaform_3" class="hidden">
	<form action="#" method="post" class="b-sendform js-sendform">
		<p class="b-sendform-head">Заявка на приобритение франшизы<br>Тариф "Всё включено"</p>
		<div class="b-sendform-body">
			<div class="row">
				<label>
					<span class="label">Введите Ваше имя:</span>
					<input type="text" class="i-text" name="name" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш <span>телефон</span>:</span>
					<input type="tel" class="i-text" name="phone" />
				</label>
			</div> <!--.row-->
			<div class="row">
				<label>
					<span class="label">Введите Ваш e-mail:</span>
					<input type="text" class="i-text" name="email" />
				</label>
			</div> <!--.row-->
			<div class="buttons">
				<input type="submit" class="btn-styled" value="Отправить" />
				<input type="hidden" name="subject" value='Заявка на приобритение франшизы. Тариф "Всё включено"' />
			</div> <!--.buttons-->
		</div> <!--.b-sendform-body-->
	</form> <!--.b-sendform-->
</div>
<div id="sendresult" class="hidden">
	<div class="popup-win">
		<p class="title">Спасибо!</p>
		<p class="msg">Наш специалист с Вами свяжется<br>в течение нескольких часов</p>
	</div>
</div>


</body>
</html>

<?php
/*
* HTML-минимизация
*/
$out = ob_get_clean();
$out = preg_replace('/(?![^<]*<\/pre>)[\n\r\t]+/', "\n", $out);
$out = preg_replace('/ {2,}/', ' ', $out);
$out = preg_replace('/>[\n]+/', '>', $out);
echo $out;
?>
