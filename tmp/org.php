<? require_once 'ti.php' ?>

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

		<title>Supersized - Full Screen Background Slideshow jQuery Plugin</title>
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
		<script type="text/javascript" src="../js/jquery.qtip.min.js"></script>

		<script type="text/javascript">
		// the slide number we are on
		var counter = 0;

		$(document).ready(function () {
			jQuery('ul.sf-menu').superfish();

			$.supersized({

					// Functionality
					autoplay				:	0,			// use slideshow?
					slide_interval          :   3000,		// Length between transitions
					transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition

					// Components
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-1.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-2.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-3.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-1.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-1.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-2.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-2.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
														{image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-3.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-3.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'}
												]

			});

			$('.scr').width($(window).width());
			$('.scr').height($(window).height());

			if (window.location.href.indexOf('#') > 0) {
				counter = window.location.href.substring(window.location.href.indexOf('#')+1);
				if ($('.scr').length < counter) counter = 0;
			}

			$('#divGroup').animate({"left": -counter*$(window).width()}, 3205);
			$('.scr>div').qtip({show: {ready: true}, hide: {event: 'unfocus'}, style: { classes: 'ui-tooltip-shadow ui-tooltip-rounded ui-tooltip-yellow'}});;

			checkCounter();

		});

		</script>

		<script type="text/javascript">



		</script>

	</head>

	<style type="text/css">
			html, body { width:100%; height: 100%; overflow: hidden; margin:0; padding:0; }
			ul#demo-block{ margin:0 15px 15px 15px; }
			ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('img/bg-black.png'); font:11px Helvetica, Arial, sans-serif; }
			ul#demo-block li a{ color:#eee; font-weight:bold; }
			ul.sf-menu { position: absolute; right: 50px; }

			#divGroup { overflow: hidden; position: relative; width: 10000px;}
			.scr {  width:40%; height: 100%; border: 0px solid black; position: relative; float: left; color: white; }
			.scr div { border: 3px solid white; width: 40%; height: 50%; position: absolute; left: 30%; top: 10%; }
			#left { position: fixed; left:0; top:50%; z-index: 100; }
			#right { position: fixed; right:0; top:50%; z-index: 100; }
			#prevslide, #nextslide { z-index: 100; }
	</style>

<body>
	<!--Demo styles (you can delete this block)-->

	<ul id="demo-block">
		<li><a href="http://buildinternet.com/project/supersized/" target="_blank"><img src="img/supersized-logo.png"/></a></li>
		<li>Photographers: <a href="http://cargocollective.com/mariakazvan" target="_blank">Maria Kazvan</a>, <a href="http://colecovizion.deviantart.com/" target="_blank">Colin Wojno</a>, &amp; <a href="http://brookeshaden.com/" target="_blank">Brooke Shaden</a></li>
	</ul>

	<ul class="sf-menu">
			<li class="current">
				<a href="#a">HOME</a>
				<ul>
					<li>
						<a href="#aa">menu item that is quite long</a>
					</li>
					<li class="current">
						<a href="#ab">menu item</a>
						<ul>
							<li class="current"><a href="#">menu item</a></li>
							<li><a href="#aba">menu item</a></li>
							<li><a href="#abb">menu item</a></li>
							<li><a href="#abc">menu item</a></li>
							<li><a href="#abd">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">COMPANY</a>
			</li>
			<li>
				<a href="#">COLLECTION</a>
				<ul>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">CONTACT US</a>
			</li>
            <li>
				<a href="#">NEWS</a>
			</li>
		</ul>

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

	<!--News-->
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item" onclick="javascript:goLeft();"></a>
	<a id="nextslide" class="load-item" onclick="javascript:goRight();"></a>
	<div id="divGroup" >
		<div class="scr"><div>q</div></div>
		<div class="scr"><div>qq</div></div>
		<div class="scr"><div>qqq</div></div>
	</div>

<script type="text/javascript">
$(window).resize(function() {
	$('.scr').width($(window).width());
	$('.scr').height($(window).height());
	//console.log($(window).width());
});
function goLeft() {
	counter = counter + 1;
	$('#divGroup').animate({"left": counter*$(window).width()}, "slide");
	//console.log(counter);
	checkCounter();
}

function goRight() {
	counter = counter - 1;
	$('#divGroup').animate({"left": counter*$(window).width()}, "slide");
	//console.log(counter);
	checkCounter();
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
}
</script>

</body>
</html>