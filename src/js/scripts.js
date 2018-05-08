var isBrowserIE = false;
var yaGoalTitle = 'SEND';

// ***
// * Выравнивание объектов по высоте
// ***

function eqHeights()
{
	jQuery('.js-eq-h').each(function(){
		var h = 0;
		jQuery(this).find('.js-eq-h-item').css('height', 'auto');
		jQuery(this).find('.js-eq-h-item').each(function(){
			if ( jQuery(this).height() > h ) h = jQuery(this).height();
		});
		jQuery(this).find('.js-eq-h-item').css('height', h);
	});
}


// ***
// * Инициализация карты
// ***

function yamapInit()
{
	var myMap = new ymaps.Map('yamap', {
		center: [55.6829705690577,37.61827299999997],
		zoom: 17
	});

	myMap.controls
		// Кнопка изменения масштаба.
		.add('zoomControl', { left: 5, top: 5 })
		// Список типов карты
		.add('typeSelector')
		// Стандартный набор кнопок
		.add('mapTools', { left: 35, top: 5 });

	// Создаем метку
	var myPlacemark = new ymaps.Placemark(
		[55.6829705690577,37.61827299999997],
		{
	    	balloonContent: 'Москва, Варшавское шоссе, д. 28А, 6 этаж'
		},
		{
		    preset: "twirl#redDotIcon",
		    // Отключаем кнопку закрытия балуна.
		    balloonCloseButton: true,
		    // Балун будем открывать и закрывать кликом по иконке метки.
		    hideIconOnBalloonOpen: true
		}
	);

	// Добавляем метку на карту
	myMap.geoObjects.add(myPlacemark);
}

jQuery(document).ready(function($){
	ymaps.ready(yamapInit);

	if (!isBrowserIE)
	{
		new WOW().init();
	}

	eqHeights();

	// Перемещение при клике на главное меню
	$('.page-goto').click(function(e){
		e.preventDefault();

		var href = $(this).attr('href');
		$('html,body').animate({
			scrollTop : $(href).offset().top
		}, 1500, function(){
		})
	});

	// Изменение пункта меню при скроллинге
	window.onscroll = function() {
		var ids = new Array;
		var offsets = new Array;
		$('.anchor').each(function(){
			ids.push($(this).attr('id'));
			offsets.push($(this).offset().top);
		});

		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		var n = offsets.length;
		for (i=0; i<n; i++)
		{
			if (scrolled >= offsets[i])
			{
				$('.topnav li').removeClass('current');
				$('.topnav li a[href=#'+ids[i]+']').parent().addClass('current');
			}
		}

		if ( scrolled > 0)
		{
			$('body').addClass('scrolled');
		}
		else
		{
			$('body').removeClass('scrolled');
		}
	}

	// Ограничение на символы в полях ввода телефона
	$.extend($.inputmask.defaults.definitions, {
	    'f': {
	        'validator': "[0-9\-\(\)\ ]",
	        'cardinality': 1,
	        'prevalidator': null,
	    }
	});
	$('input[name=phone]').inputmask({ 'mask': 'f', 'repeat': 20, 'greedy': false });

	// Основной слайдер
	var primarySlider = $('#primary-slider').glide({
		autoplay: 3500,
		animationDuration: 800,
		arrows: true,
		navigation: false
	}).data('api_glide');

	// Почему выбирают нас
	$('.s-whyus .item').hover(
		function(){
			var legendClass = $(this).data('rel');
			$(this).parent().parent().find('.image .'+legendClass).fadeIn();
		},
		function(){
			$(this).parent().parent().find('.image .legend').fadeOut();
		}
	);

	// ***
	// * Всплывающее окно Fancybox
	// ***

	$('.js-fancybox-image').each(function(){
		$(this).attr('rel', $(this).data('rel'));
	});
	$('.js-fancybox-image').fancybox({
		'nextEffect': 'fade',
		'prevEffect': 'fade',
		'padding': 5,
		'autoCenter': true,
		'helpers': {
			overlay: {
				locked: false
			}
		}
	});
	$('.js-fancybox-form').fancybox({
		'padding': 0,
		'autoCenter': true,
		'scrolling': false,
		'fitToView': false,
		'openEffect': 'elastic',
		'wrapCSS': 'fancybox-form',
		'helpers': {
			overlay: {
				locked: false
			}
		},
		'beforeShow': function(){
			var m = $(this.element).data('section');
			if (m) $.fancybox.wrap.find('input[name=section]').val(m);
		}
	});

	// Отправка формы
	$('.js-sendform').submit(function(e){
		e.preventDefault();

		function markErrorField($el, msg)
		{
			var $row = $el.parent().parent();
			$row.addClass('row-error').append('<p class="err">'+msg+'</p>');

			$el.bind('click keydown', function(){
				if ($row.hasClass('row-error'))
				{
					$row.removeClass('row-error');
					$row.find('.err').remove();
				}
			});
		}

		// Проверка на ошибки
		var errorFound = false;
		var $phone = $(this).find('input[name=phone]');
		var phone = $.trim( $phone.val() );
		if (phone == '')
		{
			markErrorField($phone, 'Укажите номер телефона');
			errorFound = true;
		}


		var $email = $(this).find('input[name=email]');
		if ($email.length>0)
		{
			var email = $.trim( $email.val() );
			if (email != '' && email.indexOf('@') == -1 || email == '')
			{
				markErrorField($email, 'Укажите адрес электронной почты');
				errorFound = true;
			}
		}

		if (!errorFound)
		{
			$.ajax({
				type: 'post',
				url: 'send.php',
				data: jQuery(this).serialize(),
				success: function(msg){
					//alert(msg);
				}
			});

			if (typeof yaCounter25847597 != 'undefined') {

				yaCounter25847597.reachGoal(yaGoalTitle);

			}

			$(this).find('input[type=text],input[type=tel],input[type=email],textarea').val('');

			$.fancybox.open('#sendresult', {
				'padding': 20,
				'wrapCSS': 'fancybox-form',
				'scrolling': false,
				'helpers': {
					overlay: {
						locked: false
					}
				}
			});
		}
	});
})

jQuery(window).load(function(){
	eqHeights();
});
