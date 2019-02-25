<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Browse our cakes!">
			<title>About Us | ButtaCakes</title>
			<link href="css/index.css" rel="stylesheet">
			<link href="css/aboutus.css" rel="stylesheet">
			<link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico" />
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet">
			<script src="js/jquery-3.3.1.min.js"></script>
		</head>

		<body>
			<script>
				$(function(){
				    $("#nav-placeholder").load("nav.html");
				});
			</script>
			<div id="nav-placeholder"></div>
			<div class="container">
				<script src="js/jssor.slider.min.js" type="text/javascript"></script>
				<script type="text/javascript">
					jssor_1_slider_init = function() {

					var jssor_1_options = {
					$AutoPlay: 1,
					$Idle: 2000,
					$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
					},
					$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$
					}
					};

					var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

					/*#region responsive code begin*/

					var MAX_WIDTH = 480;

					function ScaleSlider() {
					var containerElement = jssor_1_slider.$Elmt.parentNode;
					var containerWidth = containerElement.clientWidth;

					if (containerWidth) {

					var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

					jssor_1_slider.$ScaleWidth(expectedWidth);
					}
					else {
					window.setTimeout(ScaleSlider, 30);
					}
					}

					ScaleSlider();

					$Jssor$.$AddEvent(window, "load", ScaleSlider);
					$Jssor$.$AddEvent(window, "resize", ScaleSlider);
					$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
					/*#endregion responsive code end*/
					};
				</script>
				<style>
				/* jssor slider loading skin spin css */
				.jssorl-009-spin img {
				animation-name: jssorl-009-spin;
				animation-duration: 1.6s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
				}

				@keyframes jssorl-009-spin {
				from {
				transform: rotate(0deg);
				}

				to {
				transform: rotate(360deg);
				}
				}


				.jssorb052 .i {position:absolute;cursor:pointer;}
				.jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
				.jssorb052 .i:hover .b {fill-opacity:.7;}
				.jssorb052 .iav .b {fill-opacity: 1;}
				.jssorb052 .i.idn {opacity:.3;}

				.jssora053 {display:block;position:absolute;cursor:pointer;}
				.jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
				.jssora053:hover {opacity:.8;}
				.jssora053.jssora053dn {opacity:.5;}
				.jssora053.jssora053ds {opacity:.3;pointer-events:none;}
			</style>
				<div id="jssor_1" style="position:relative;margin:0 auto;top:50px;left:0px;width:380px;height:380px;overflow:hidden;visibility:hidden;float: left;">
					<!-- Loading Screen -->
					<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="imgs/spin.svg" />
					</div>
					<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:380px;height:380px;overflow:hidden;">
						<div>
							<img data-u="image" src="imgs/buttacakes.jpg"/>
						</div>
						<div data-p="170.00">
							<img data-u="image" src="imgs/perry2.jpg"/>
						</div>
						<div>
							<img data-u="image" src="imgs/girls2.jpg" />
						</div>
						<div>
							<img data-u="image" src="imgs/girls.jpg"/>
						</div>
						<div>
							<img data-u="image" src="imgs/perry.jpg"/>
						</div>
					</div>
					<!-- Bullet Navigator -->
					<div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
						<div data-u="prototype" class="i" style="width:16px;height:16px;">
							<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<circle class="b" cx="8000" cy="8000" r="5800"></circle>
							</svg>
						</div>
					</div>
					<!-- Arrow Navigator -->
					<div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
						<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:75%;height:75%;">
							<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
						</svg>
					</div>
					<div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
						<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:75%;height:75%;">
							<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
						</svg>
					</div>
				</div>
				
				<div class="container-text">
					<h1 style="font-size: 45px; color: #68391A;">About Us</h1>
					<h1 style="margin: 0;">We Are ButtaCakes!</h1>
					<h3 style="margin-top: 0;">
						Butta Cakes all started in my small kitchen.
						<br>
						I was given a challenge by a friend to make
						<br>
						an all natural butter cake for a dinner party. So I
						<br>
						collected the finest ingredient's possible and
						<br>
						began the process.
						<br>
					</h3>
					<h3>
						Over a short period of time I perfected my recipe
						<br>
						and the cake was a dinner party success.
						<br>
					</h3>
					<h3>Soon everyone wanted one.</h3>
					<h3>
						I enjoy bringing happiness to others.
						<br>
						What better way to do so than with Butta Cakes.
						<br>
					</h3>
					<h3>
						I enjoy sweets as much as anyone and if I am going
						<br>
						to splurge I want it to be worth it.
					</h3>
					<h3 style="font-size: 25px; margin-bottom: 0;">Because...</h3>
					<h2 style="font-family: 'Norican', cursive;font-weight: 100;font-size: 40px;margin-top: 0;">&quot;It's the simple pleasures in life.&quot;</h2>
				</div>
			</div>
			<img src="imgs/rule.png" class="rule" alt="Horizontal Rule">
			<footer>&copy;2019 Butta Cakes </footer>

			<script type="text/javascript">jssor_1_slider_init();</script>
		</body>
	</html>
