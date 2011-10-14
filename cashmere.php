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
	<style type="text/css">
	.scr div { width:40%; height: 40%; position: absolute; left: 20%; top: 0%; font-family:Times New Roman, Times, serif; font-size:18px; padding: 30px; background:#00512f; border: #013a22 solid 1px; text-align:justify; overflow:auto;}
	</style>
<div id="divGroup" >
	<div class="scr"><div>
<h2>CASHMERE</h2><br/>
<img src="img/cashmere-goat.jpg" align="right"  style="margin-left: 20px; margin-bottom:5px; border: solid 1px #ffdc73;"/>Our Company uses only the highest quality raw materials.All sweaters, vests, shawls and some accessories are made by pure cashmere. <br/>
Our company has an exclusive agreement with the biggest  Italian company for the supply of cashmere. <br/>
                                                                               
      The finest lots of this precious fiber come from Northern China and Mongolia. Cashmere wool fiber used for clothing and other textile articles is obtained from Cashmere and other goats. The goats sometimes live in a very rough climate in the Goby desert an altitude 4500 m at minus 35 degrees.  Each of the goat gives 150-200 gr. per year. It takes one little goat four years to produce enough wool to make just one cashmere sweater. Longer fibers from the belly and the throat area make the wool especially soft and cause less "pilling" when the fibers are woven into garments such as sweaters, shawls, capes, dresses, and coats for both men and women. The original undyed or natural colors of cashmere wool are in various shades of grey, brown and white. Cashmere is fine in texture, strong, light and soft.That is why the garments made from it provide excellent isolation. <br/>
       <b>Our cashmere is also precious due to its long-life quality.</b> <br/><br/>
        Most experts claim it is eight times warmer than the usual wool.The quality and feel of cashmere will leave you longing for more. Owning a garment made of cashmere is a fashion treat to be truly treasured.<br/><br/>

                  For these and many other reasons people call cashmere “The noble fibers’ “The Fiber of Kings"! 


    </div></div>
</div>

<? endblock() ?>

<? startblock('footerJs') ?>
//alert('It works');
<? endblock() ?>