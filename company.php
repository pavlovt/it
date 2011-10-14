<?php
require_once 'base.php';
?>

<? startblock('controller') ?>
<? endblock() ?>

<? /*startblock('headTitle') ?>
<? endblock()*/ ?>

<? startblock('head') ?>
<? endblock() ?>

<? startblock('headJs') ?>
<? endblock() ?>

<? startblock('headReadyJs') ?>
	$.supersized({

			// Functionality
			slideshow				:	1,			// use slideshow?
			autoplay				:	1,			// autoplay slideshow?
			slide_interval          :   3000,		// Length between transitions
			transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	700,		// Speed of transition

			// Components
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
			slides 					:  	[			// Slideshow Images
												{image : 'img/img/1fon0.jpg', title : 'Feel the passion of our Royal Collection!', thumb : 'img/img/1fon0_.jpg', url : '#'},
												{image : 'img/img/1fon1.jpg', title : 'Feel the passion of our Royal Collection!', thumb : 'img/img/1fon1_.jpg', url : '#'},
												{image : 'img/img/1fon2.jpg', title : 'Feel the passion of our Royal Collection!', thumb : 'img/img/1fon2_.jpg', url : '#'},
												{image : 'img/img/1fon3.jpg', title : 'Feel the passion of our Royal Collection!', thumb : 'img/img/1fon3_.jpg', url : '#'},
												{image : 'img/img/1fon4.jpg', title : 'Feel the passion of our Royal Collection!', thumb : 'img/img/1fon4_.jpg', url : '#'}
										]

	});
<? endblock() ?>

<? startblock('headCss') ?>
<? endblock() ?>

<? startblock('header') ?>
<!--<span style="font-weight: bold; color: white;">It works!!!</span>-->
<? endblock() ?>

<? startblock('content') ?>

<!--News-->
<div id="divGroup" >
	<div class="scr"><div>
<h2>ARISTOKRAT  ROYAL GOLD COLLECTION</b> is a patented company by “MAXI" LTD. </h2><br/>

     In 2011, “MAXI" LTD decided to expand its activities and establish a new company with a collection for ladies and gents including cashmere sweaters, classic shirts, elegant trousers, shoes and accessories. <br/><br/>
      Our company is pleased to satisfy all of our clients’ expectations. Our mission has always been to achieve excellence in creation and promotion of luxury and leisure among men and women. <br/><br/>
     In order to achieve and maintain the distinctive quality of Aristokrat’s products, the company uses completely pure and organic materials. The traditional processing techniques are a distinctive element in the establishment of valuable products which are suitable for a noble lifestyle.

    </div></div>
</div>

<? endblock() ?>

<? startblock('footerJs') ?>
//alert('It works');
<? endblock() ?>