<? require_once 'common/ti.php' ?>

<? startblock('controller') ?>
<? endblock() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.1
		Site	: www.buildinternet.com/project/supersized

		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		<title>
			<? startblock('headTitle') ?>
				Gold Cashmir
			<? endblock() ?>
		</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>

		<script type="text/javascript" src="js/supersized.3.2.1.min.js"></script>
		<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="../js/jquery.qtip.min.js"></script>

		<? startblock('head') ?>
		<? endblock() ?>

		<script type="text/javascript">
		// the slide number we are on
		var state = $.bbq.getState();
		var counter = state.counter || 0;
		console.log(counter);

		// Bind an event to window.onhashchange that, when the history state changes,
		// iterates over all tab widgets, changing the current tab as necessary.
		$(window).bind( 'hashchange', function(e) {
			checkCounter();
			console.log(counter);
			$('#divGroup').animate({"left": counter*$(window).width()}, 900);
		});

		<? startblock('headJs') ?>
		<? endblock() ?>

		$(document).ready(function () {
			jQuery('ul.sf-menu').superfish();

			$('.scr').width($(window).width());
			$('.scr').height($(window).height());

			//$('.scr>div').qtip({hide: {event: 'unfocus'}, style: { classes: 'ui-tooltip-shadow ui-tooltip-rounded ui-tooltip-yellow'}});;

			// Since the event is only triggered when the hash changes, we need to trigger
			// the event now, to handle the hash the page may have loaded with.
			$(window).trigger( 'hashchange' );

			<? startblock('headReadyJs') ?>
			<? endblock() ?>

		});

		</script>


	</head>

	<style type="text/css">
			html, body { width:100%; height: 100%; overflow: hidden; margin:0; padding:0; }
			ul#demo-block{ margin:0 15px 15px 15px; }
			ul#demo-block li{ margin:0 0 10px 0; padding:10px; padding-top:0px;  padding-left:0px; display:inline; float:left; clear:both; color:#aaa;/* background:url('img/bg-black.png'); */font-family:Times New Roman, Times, serif; font-size:14px; }
			ul#demo-block li a{ color:#eee; font-weight:bold; }
			ul.sf-menu { position: absolute; right: 50px; }

			#divGroup { overflow: hidden; position: relative; width: 10000px;}
			.scr {  width:40%; height: 100%; border: 0px solid black; position: relative; float: left; color: #fff2c7; }
			.scr div { border: 0px solid white; width: 40%; height: 40%; position: absolute; left: 20%; top: 0%; font-family:Times New Roman, Times, serif; font-size:18px; padding: 30px; background:#00512f;  text-align:justify;}
			#prevslide, #nextslide { z-index: 100; }
			<? startblock('headCss') ?>
			<? endblock() ?>
	</style>

<body>
	<!--Demo styles (you can delete this block)-->

	<ul id="demo-block">
		<li><a href="company.php" target="_parent"><img src="img/logo_green.png"/></a></li>
		<li>
			<? startblock('header'); endblock() ?>
		</li>
	</ul>

	<!--Site's menu-->
	<? require_once 'menu.php'; ?>
	<!--End of styles-->

	<!--Thumbnail Navigation-->
<div id="prevthumb"></div>
	<div id="nextthumb"></div>

	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>

	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>

	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">

			<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>

			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>

			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>

			<!--Thumb Tray button-->
			<a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>

			<!--Navigation-->
			<ul id="slide-list"></ul>

		</div>
	</div>


	<? startblock('content') ?>
	<? endblock() ?>


<script type="text/javascript">
$(window).resize(function() {
	$('.scr').width($(window).width());
	$('.scr').height($(window).height());
	//console.log($(window).width());
});

function goLeft() {
	counter = counter + 1;
	$.bbq.pushState({'counter':counter}, 0);
}

function goRight() {
	counter = counter - 1;
	$.bbq.pushState({'counter':counter}, 0);
}

function checkCounter() {
	if (counter == 0) {
		$('#left').hide();
	} else {
		$('#left').show();
	}

	if (counter == -($('.scr').length - 1)) {
		$('#right').hide();
	} else {
		$('#right').show();
	}

	if (counter < -($('.scr').length - 1)) {
		counter = 0;
		//$('#divGroup').animate({"left": 0}, 3205);
		$.bbq.pushState({'counter':counter}, 0);
	}

	if (counter > 0) {
		counter = 0;
		//$('#divGroup').animate({"left": 0}, 3205);
		$.bbq.pushState({'counter':counter}, 0);
	}
}

<? startblock('footerJs') ?>
<? endblock() ?>
</script>

</body>
</html>