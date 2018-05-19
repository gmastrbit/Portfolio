<?php include("mypage/connect.php"); /* ini_set('display_errors','Off'); */ ?>
<!-- gmastrbit@gmail.com -->
<!DOCTYPE html>
<html lang="uk">
	<head> 
		<title> Моя сторінка </title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="mypage/img/ico.png" type="image/x-icon">
		<style>
			body{ font-family: pt_sans; overflow-x: hidden; }
			.load-container {
				background: linear-gradient(140deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92);
				background: #fff;
				background-size: 1400% 1400%;
				height: 100%;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 99999;}
			.no-cssanimations .load-container .loader {
				animation: none;
				background: none;
				box-shadow: none;
				border: 0 none;
				color: #fff;  
				font-size: 17px;
				height: auto;
				margin: 1em auto;
				overflow: visible;
				text-indent: 0;
				text-align: center;
				width: auto;
				-webkit-animation: none;}
			.no-cssanimations .load-container .loader:before, .no-cssanimations .load-container .loader:after { display: none; }
			.load8 .loader {
				animation: load8 1.1s infinite linear;
				border-top: 0.6em solid rgba(255, 255, 255, 0.2);
				border-right: 0.6em solid rgba(255, 255, 255, 0.2);
				border-bottom: 0.6em solid rgba(255, 255, 255, 0.2);
				border-left: 0.6em solid #fff;
				left: 50%;
				margin-left: -4.3em;
				margin-top: -4.3em;
				font-size: 10px;
				position: absolute;
				top: 50%;
				text-indent: -9999em;
			-webkit-animation: load8 1.1s infinite linear;}
			.load8 .loader, .load8 .loader:after { border-radius: 50%; height: 8em; width: 8em;} 
			.c-c{ align-items: center; display: flex; justify-content: center; }
			.cssload-container { width: 114px; margin: 0 auto; }
			.cssload-circle-1 { height: 114px; width: 114px; background: rgb(49,27,146); }
			.cssload-circle-2 { height: 95px; width: 95px; background: rgb(69,39,160); }
			.cssload-circle-3 { height: 76px; width: 76px; background: rgb(82,45,168); }
			.cssload-circle-4 { height: 57px; width: 57px; background: rgb(94,53,177); }
			.cssload-circle-5 { height: 38px; width: 38px; background: rgb(104,58,183); }
			.cssload-circle-6 { height: 19px; width: 19px; background: rgb(126,87,194); } 
			.cssload-circle-7 { height: 9px; width: 9px; background: rgb(150,117,205); }
			.cssload-circle-8 { height: 5px; width: 5px;  background: rgb(179,157,219); }
			.cssload-circle-1, .cssload-circle-2, .cssload-circle-3, .cssload-circle-4, .cssload-circle-5, .cssload-circle-6, .cssload-circle-7, .cssload-circle-8 {
				border-bottom: none;
				border-radius: 50%;
				-o-border-radius: 50%;
				-ms-border-radius: 50%;
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-o-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-ms-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				-moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
				animation-name: cssload-spin;
				-o-animation-name: cssload-spin;
				-ms-animation-name: cssload-spin;
				-webkit-animation-name: cssload-spin;
				-moz-animation-name: cssload-spin;
				animation-duration: 4600ms;
				-o-animation-duration: 4600ms;
				-ms-animation-duration: 4600ms;
				-webkit-animation-duration: 4600ms;
				-moz-animation-duration: 4600ms;
				animation-iteration-count: infinite;
				-o-animation-iteration-count: infinite;
				-ms-animation-iteration-count: infinite;
				-webkit-animation-iteration-count: infinite;
				-moz-animation-iteration-count: infinite;
				animation-timing-function: linear;
				-o-animation-timing-function: linear;
				-ms-animation-timing-function: linear;
				-webkit-animation-timing-function: linear;
				-moz-animation-timing-function: linear;}
			@keyframes cssload-spin { from { transform: rotate(0deg);} to { transform: rotate(360deg);} }
			@-o-keyframes cssload-spin { from { -o-transform: rotate(0deg);} to { -o-transform: rotate(360deg);} }
			@-ms-keyframes cssload-spin { from { -ms-transform: rotate(0deg);} to { -ms-transform: rotate(360deg);} }
			@-webkit-keyframes cssload-spin { from { -webkit-transform: rotate(0deg);} to { -webkit-transform: rotate(360deg);} }
			@-moz-keyframes cssload-spin { from { -moz-transform: rotate(0deg);} to { -moz-transform: rotate(360deg);} }
			.only-mob{ display: none; }
			@media screen and (max-width:800px) {
				.project-img, .zoom, .bmark-image{ display: none; }
				.project-img-mobile{
				border-radius: 5px;
				border: 1px solid #D1C4E9;
				display: flex;
				width: 100%;}
				.only-mob{ display: block; }
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="My personal page // gmastrbit">
		<meta name="keywords" content="gmastrbit, Bogdan, Shcherbakov, Bogdan Shcherbakov">
	</head>
	<body id="js-scrollspy">
	<div class="load-container load8 c-c">
		<div class="cssload-container">
		<div class="cssload-circle-1"> <div class="cssload-circle-2"> <div class="cssload-circle-3"> <div class="cssload-circle-4"> <div class="cssload-circle-5"> <div class="cssload-circle-6"> <div class="cssload-circle-7"> <div class="cssload-circle-8">
		</div> </div> </div> </div> </div> </div> </div> </div> </div> 
	</div>
	<span id="my-head"> </span>
	<div class="all">
		<div class="header">
			<div class="logo">
				<div class="ico gradient1" data-gradient-css="linear-gradient(45deg, #9575cd, #7e57c2, #673ab7, #5e35b1, #512da8, #4527a0, #311b92)"> G </div> 
			</div>
			<div class="ripple"> 
				<div class="overlay-text"> Богдан Щербаков </div>
				<br>
				<div class="overlay-href"><a class="overlay-href" href="mailto:gmastrbit@gmail.com" target="_blank">gmastrbit@gmail.com</a></div>
			</div>
			<script src="mypage/js/jquery.min.js"></script>
			<script src="mypage/js/ripple.js"></script>
			<div class="menu">
				<nav class="menu menu--ferdinand">
					<ul class="menu__list js-scrollspy-nav" id="top-menu">
						<li class="menu__item menu__item--current">
							<a href="#my-head" class="menu__link">Головне</a>
						</li>
						<li class="menu__item">
							<a href="#my-projects" id="ss2" class="menu__link">Проекти</a>
						</li>
						<li class="menu__item">
							<a href="#my-contacts" class="menu__link">Контакти</a>
						</li>
						<li class="menu__item">
							<a href="#my-message" class="menu__link">Напишіть мені</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="only-mob"><br><br></div>
		<div class="jumbotron">
			<div class="jumbotron-box">
				<div class="hello">
					Привіт! Це — я,	<br><br>
				</div>
				<div class="info-box">
					<div class="myimage">
						<div class="my_image">
							<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
						</div>
						<a href="https://www.instagram.com/p/BU6N6O5AAZV/?taken-by=gmastrbit" target="_blank"> 
							<!-- <img class="lazy" src="mypage/img/pixel.png" data-original="mypage/img/image.jpg" width="250" height="250" alt="I am"> -->
							<img src="mypage/img/image.jpg" width="250" height="250" alt="I am">
						</a>
					</div>
					<div class="mytext">
						Богдан Щербаков <br>
						Мені 18 років <br>
						Захоплююсь дизайном <br>
						Навики: html, css, php, js <br>
						<div class="only-mob"><br><br></div>
					</div>
				</div>
			</div>
			<span id="my-projects"> </span>
		</div>
		<div class="projects-mob"> </div>
		<div class="projects">
			<div class="hello wow fadeIn animated">
				Проекти
			</div>
			<br><br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_1/project_image_1.png" class="lazy project-img zoom om" alt="TBEC">
					<img src="mypage/img/project_1/project_image_1.png" class="lazy project-img-mobile"  alt="TBEC">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Презентація коледжу
					</div>
					<div class="project-text">
						Виконаний в стилі презентації сайт, який розповідає і показує про ТБЕК різноманітну інформацію, статистику та інше.
						<div class="ots"></div>
						В нижній частині такоє є відео- та фото-презентації аби ще більше поринути в атмосферу коледжу.	
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-1">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-1" class="button button--1 wow fadeIn animated" onclick="window.open('https://hwork.net/tbec/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container">
						<span class="circle top-left"></span>
						<span class="circle top-left"></span>
						<span class="circle top-left"></span>
						<span class="button__bg"></span>
						<span class="circle bottom-right"></span>
						<span class="circle bottom-right"></span>
						<span class="circle bottom-right"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_2/project_image_2.png" class="lazy project-img zoom"  alt="My profile">
					<img src="mypage/img/project_2/project_image_2.png" class="lazy project-img-mobile"  alt="My profile">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Мій профіль
					</div>
					<div class="project-text">
						Натхненний дизайном iOS, створив сторінку про себе та свої творіння часто використовуючи ефект розмиття для різних елементів.
						<div class="ots"></div>
						Мої перші спроби зробити якісний сайт.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-2">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-2" class="button button--2 wow fadeIn animated" onclick="window.open('https://hwork.net/profile/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container2">
						<span class="circle2 top-left2"></span>
						<span class="circle2 top-left2"></span>
						<span class="circle2 top-left2"></span>
						<span class="button__bg2"></span>
						<span class="circle2 bottom-right2"></span>
						<span class="circle2 bottom-right2"></span>
						<span class="circle2 bottom-right2"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_3/project_image_3.png" class="lazy project-img zoom"  alt="PS-46">
					<img src="mypage/img/project_3/project_image_3.png" class="lazy project-img-mobile"  alt="PS-46">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Сайт для студентів
					</div>
					<div class="project-text">
						На сайті є все необхідне для студента: зміни в розкладі, графік дзвінків, домашнє завдання та інша різноманітна інформація.
						<div class="ots"></div>
						Також є адміністративний розділ для того, аби можна було редагувати інформацію на сайті будь-де і будь-коли.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
					<filter id="filter-goo-3">
						<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
						<feComposite in="SourceGraphic" in2="goo" />
					</filter>
					</defs>
				</svg>
				<button id="component-3" class="button button--3 wow fadeIn animated" onclick="window.open('https://hwork.net/ps/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container3">
						<span class="circle3 top-left3"></span>
						<span class="circle3 top-left3"></span>
						<span class="circle3 top-left3"></span>
						<span class="button__bg3"></span>
						<span class="circle3 bottom-right3"></span>
						<span class="circle3 bottom-right3"></span>
						<span class="circle3 bottom-right3"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_4/project_image_4.png" class="lazy project-img zoom"  alt="Fupl">
					<img src="mypage/img/project_4/project_image_4.png" class="lazy project-img-mobile"  alt="Fupl">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Власний файлообмінник
					</div>
					<div class="project-text">
						Дозволяє завантажити файл, для того, аби потім можна було зручно ним поділитися чи використовувати в своїх цілях будь-де і будь-коли. 
						<div class="ots"></div>
						На скріншоті видно адміністративні розділи, за допомогою яких можна стежити за роботою файлообмінника та керувати ним.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-4">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-4" class="button button--4 wow fadeIn animated" onclick="window.open('https://hwork.net/files/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container4">
						<span class="circle4 top-left4"></span>
						<span class="circle4 top-left4"></span>
						<span class="circle4 top-left4"></span>
						<span class="button__bg4"></span>
						<span class="circle4 bottom-right4"></span>
						<span class="circle4 bottom-right4"></span>
						<span class="circle4 bottom-right4"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_5/project_image_5.png" class="lazy project-img zoom"  alt="Secta">
					<img src="mypage/img/project_5/project_image_5.png" class="lazy project-img-mobile"  alt="Secta">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Соцмережа для об'єднання
					</div>
					<div class="project-text">
						Тут можна створити профіль, ділитися творчістю, спілкуватися з іншими учасниками.
						<div class="ots"></div>
						Дана соцмережа хоч і має мало функцій, але цілком робоча і порадує користувачів з творчими амбіціями.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-5">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-5" class="button button--5 wow fadeIn animated" onclick="window.open('https://hwork.net/secta/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container5">
						<span class="circle5 top-left5"></span>
						<span class="circle5 top-left5"></span>
						<span class="circle5 top-left5"></span>
						<span class="button__bg5"></span>
						<span class="circle5 bottom-right5"></span>
						<span class="circle5 bottom-right5"></span>
						<span class="circle5 bottom-right5"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_6/project_image_6.png" class="lazy project-img zoom"  alt="Kazka">
					<img src="mypage/img/project_6/project_image_6.png" class="lazy project-img-mobile"  alt="Kazka">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Сайт вихователя
					</div>
					<div class="project-text">
						Створений в стилі Material Design сайт для того, щоб продемонструвати багаторічну працю викладача.
						<div class="ots"></div>
						Сайт містить багато матеріалів, які пригодяться багатьом вихователям.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-6">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-6" class="button button--6 wow fadeIn animated" onclick="window.open('http://kazka8.esy.es/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container6">
						<span class="circle6 top-left6"></span>
						<span class="circle6 top-left6"></span>
						<span class="circle6 top-left6"></span>
						<span class="button__bg6"></span>
						<span class="circle6 bottom-right6"></span>
						<span class="circle6 bottom-right6"></span>
						<span class="circle6 bottom-right6"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_7/project_image_7.png" class="lazy project-img zoom"  alt="Okta">
					<img src="mypage/img/project_7/project_image_7.png" class="lazy project-img-mobile"  alt="Okta">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Сторінка-лендінг
					</div>
					<div class="project-text">
						Перші спроби створити landing page власними руками. На сторінці є перелік товарів, їх представлення, опис і т.д.
						<div class="ots"></div>
						Прихований адміністративний розділ дозволяє обробляти та збирати замовлення.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-7">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-7" class="button button--7 wow fadeIn animated" onclick="window.open('http://konstruktor-okta.esy.es/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container7">
						<span class="circle7 top-left7"></span>
						<span class="circle7 top-left7"></span>
						<span class="circle7 top-left7"></span>
						<span class="button__bg7"></span>
						<span class="circle7 bottom-right7"></span>
						<span class="circle7 bottom-right7"></span>
						<span class="circle7 bottom-right7"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_8/project_image_8.png" class="lazy project-img zoom"  alt="Welcome to the jungle">
					<img src="mypage/img/project_8/project_image_8.png" class="lazy project-img-mobile"  alt="Welcome to the jungle">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Улюблений трек
					</div>
					<div class="project-text">
						Знайомство з html5-плеєром переросло у фан-сторінку треку вісімдесятих років.
						<div class="ots"></div>
						На сторінці є кнопки керування плеєром, слова та відеокліп.
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-8">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-8" class="button button--8 wow fadeIn animated" onclick="window.open('https://hwork.net/only/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container8">
						<span class="circle8 top-left8"></span>
						<span class="circle8 top-left8"></span>
						<span class="circle8 top-left8"></span>
						<span class="button__bg8"></span>
						<span class="circle8 bottom-right8"></span>
						<span class="circle8 bottom-right8"></span>
						<span class="circle8 bottom-right8"></span>
					</span>
				</button>
			</section>
			<br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="project">
				<div class="project-image">
					<div class="my_image_project">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw spinner"></i>
					</div>
					<img src="mypage/img/pixel.png" data-original="mypage/img/project_10/project_image_10.png" class="lazy project-img zoom"  alt="Mailer">
					<img src="mypage/img/project_10/project_image_10.png" class="lazy project-img-mobile"  alt="Mailer">
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Надсилач повідомлень
					</div>
					<div class="project-text">
						Тепер ви можете анонімно або відкрито надіслати будь-яке повідомлення на будь-яку email адресу.
						<div class="ots"></div>
						Надсилання повідомлень онлайн без реєстрації. 
					</div>
				</div>
			</div>
			<br><br><br>
			<section class="section">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
					<defs>
						<filter id="filter-goo-9">
							<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
							<feComposite in="SourceGraphic" in2="goo" />
						</filter>
					</defs>
				</svg>
				<button id="component-9" class="button button--9 wow fadeIn animated" onclick="window.open('https://hwork.net/mail/', '_blank')">
					Перейти <i class="fa fa-arrow-right" aria-hidden="true"></i>
					<span class="button__container9">
						<span class="circle9 top-left9"></span>
						<span class="circle9 top-left9"></span>
						<span class="circle9 top-left9"></span>
						<span class="button__bg9"></span>
						<span class="circle9 bottom-right9"></span>
						<span class="circle9 bottom-right9"></span>
						<span class="circle9 bottom-right9"></span>
					</span>
				</button>
			</section>
			<br><br><br>
		</div>
		<div class="bookmarks">
			<br><br><br><br>
			<div class="hello wow fadeIn animated">
				Концепція
			</div>
			<br><br><br><br><br><br><br>
			<div class="bmark1">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-1">
						<i class="fa fa-heart-o pad blur" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-1">
						<i class="fa fa-heart-o pad blur" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
						<i class="fa fa-heart pad red" aria-hidden="true"></i>
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Розмиття
					</div>
					<div class="project-text">
						Використайте цей прийом для того, аби спрямувати увагу на текст і мати при цьому гарний фон. Не треба забувати, що можна використовувати розмиття не лише для фону, а й для окремих елементів. Бажано застосовувати і з іншими прийомами. 
					</div>
				</div>
			</div>
			<br><br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="bmark2">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-2">
						<i class="fa fa-music gradient" aria-hidden="true"></i>
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-2">
						<i class="fa fa-music gradient" aria-hidden="true"></i>
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Градієнт
					</div>
					<div class="project-text">
						Популярний нині прийом може урізноманітнити кольорову гаму сайта, привернути увагу користувача. Як радіальний так і лінійний градієнти можна використовувати як елементи фону сторінки або ж простої кнопки. 
					</div>
				</div>
			</div>
			<br><br><br><br><br>
			<div class="separator wow fadeIn animated"></div>
			<br><br><br><br><br>
			<div class="bmark3">
				<div class="bmark-image wow fadeIn animated zoom">
					<div class="bmark-logo-3">
						<div class="row1">
							<i class="fa fa-user one" aria-hidden="true"></i> 
							<i class="fa fa-user two" aria-hidden="true"></i>
							<i class="fa fa-user three" aria-hidden="true"></i>
						</div>
						<div class="row2">
							<i class="fa fa-user four" aria-hidden="true"></i> 
							<i class="fa fa-user five" aria-hidden="true"></i>
							<i class="fa fa-user six" aria-hidden="true"></i>
						</div>
						<div class="row3">
							<i class="fa fa-user seven" aria-hidden="true"></i> 
							<i class="fa fa-user eight" aria-hidden="true"></i>
							<i class="fa fa-user nine" aria-hidden="true"></i>
						</div>				
					</div>
				</div>
				<div class="bmark-image-mob wow fadeIn animated">
					<div class="bmark-logo-3">
						<div class="row1">
							<i class="fa fa-user one" aria-hidden="true"></i> 
							<i class="fa fa-user two" aria-hidden="true"></i>
							<i class="fa fa-user three" aria-hidden="true"></i>
						</div>
						<div class="row2">
							<i class="fa fa-user four" aria-hidden="true"></i> 
							<i class="fa fa-user five" aria-hidden="true"></i>
							<i class="fa fa-user six" aria-hidden="true"></i>
						</div>
						<div class="row3">
							<i class="fa fa-user seven" aria-hidden="true"></i> 
							<i class="fa fa-user eight" aria-hidden="true"></i>
							<i class="fa fa-user nine" aria-hidden="true"></i>
						</div>				
					</div>
				</div>
				<div class="project-info wow fadeIn animated">
					<div class="project-header">
						Прозорість
					</div>
					<div class="project-text">
						За допомогою цього прийому можна створити цікаві місця для тексту, чи сфокосувати користувача на якомусь елементі. Можна використовувати для великих і малих елементів і експериментувати з рівнями прозорості.
					</div>
				</div>
			</div>
			<br><br><br><br>
			<span id="my-contacts"> </span>
			<div class="contacts-mob">
				<br><br><br><br>
			</div>
		</div>
		<div class="contacts">
			<div class="hello wow fadeIn animated">
				Контакти
			</div>
			<br><br><br><br><br><br>
			<div class="contacts-box">
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://www.facebook.com/gmastrbit" target="_blank">
								<i class="fa fa-facebook-official" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Профіль в Facebook
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="mailto:gmastrbit@gmail.com" target="_blank">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									E-mail адреса
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://vk.com/gmastrbit" target="_blank">
								<i class="fa fa-vk" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Сторінка VKontakte
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://t.me/gmastrbit" target="_blank">
								<i class="fa fa-telegram" aria-hidden="true"></i>
								<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
									Профіль в Telegram
									</span> </span> 
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="dummy dummy-menu wow fadeIn animated">
					<ul>
						<li>
							<a class="tooltip" href="https://www.behance.net/gmastrbit" target="_blank">
							<i class="fa fa-behance" aria-hidden="true"></i>
							<span class="tooltip-content"> <span class="tooltip-text"> <span class="tooltip-inner">
								Профіль на Behance
								</span> </span> 
							</span>
						</a>
						</li>
					</ul>
				</div>
			</div> 
		</div>
		<div class="mess">
			<span id="my-message"> </span> 
			<div class="message-mob">
				<br><br><br><br>
			</div>
		</div>
		<div class="write-me">
			<div class="hello wow fadeIn animated">
				Напишіть мені
			</div>
			<br><br><br><br>
			<div class="feedback">
				<form method="post" action="sendMessage.php"  class="feedbck">
					<div class="row-feedback-1 wow fadeIn animated">
						<input class="footer__input inp" placeholder="Введіть ім'я чи адресу пошти" name="author" id="author" type="text" required>
					</div>
					<br><br>
					<div class="row-feedback wow fadeIn animated">
						<textarea placeholder="Введіть повідомлення" name="message" id="message" class="footer__input textarea-f" required></textarea>
						<input name="js" type="hidden" value="no" id="js">
					</div>
					<br><br>
					<div class="row-feedback wow fadeIn animated">					
						<section class="section">
							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
								<defs>
								<filter id="filter-goo-10">
									<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
									<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
									<feComposite in="SourceGraphic" in2="goo" />
								</filter>
							</defs>
							</svg>
							<button id="send" class="button button--10 wow fadeIn animated component-10" type="submit" name="button">
								Надіслати  <i class="fa fa-paper-plane" aria-hidden="true"></i>
								<span class="button__container10">
									<span class="circle10 top-left10"></span>
									<span class="circle10 top-left10"></span>
									<span class="circle10 top-left10"></span>
									<span class="button__bg10"></span>
									<span class="circle10 bottom-right10"></span>
									<span class="circle10 bottom-right10"></span>
									<span class="circle10 bottom-right10"></span>
								</span>
							</button>
						</section>
					</div>
					<br>
					<div class="res">
					<span id="resp"></span>
					</div>
				</form>
			</div>
		</div>
		<br><br><br><br><br>
	</div>
	<script>
	$(window).load(function () {
		$(".load-container").delay(100).fadeOut(500);
	});
	$(window).scroll(function() { 
		$('.header').toggleClass('header-shadow', $(this).scrollTop() > 10); 
	});
	$(document).ready(function() {
		$("head").append("<link rel='stylesheet' type='text/css' href='mypage/css/animate.min.css'>");
		$("head").append("<link rel='stylesheet' type='text/css' href='mypage/css/normalize.css'>");
		$("head").append("<link rel='stylesheet' type='text/css' href='mypage/css/component.css'>");
		$("head").append("<link rel='stylesheet' type='text/css' href='mypage/css/zoom.css'>");
	})
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 0
		}, 500, 'swing', function () {
			window.location.hash = target;
		});
	});
	$(function() {
		var $page = $('html, body');
		$('a[href*="#"]').click(function() {
			$page.animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});
	});
	</script>
		<script src="mypage/js/wow.min.js"></script>
		<script src="mypage/js/zoomerang.js"></script>
		<script src="mypage/js/TweenMax.min.js"></script>
		<script src="mypage/js/main.js"></script>
		<script src="mypage/js/classie.js"></script>
		<script src="mypage/js/jquery.lazyload.min.js"></script>
	<script>
	$(function() {
		$("#send").click(function(){
			var author = $("#author").val();
			var message = $("#message").val();						
			$.ajax({
			type: "POST",
			url: "mypage/sendMessage.php",
			data: {"author": author, "message": message, },
			cache: false,						
			success: function(response){
			var messageResp = new Array('Ваше повідомлення відправлене','Повідомленян не відправлене, помилка БД','Не можна відправляти порожні повідомлення');
			var resultStat = messageResp[Number(response)];
			if(response == 0){
				$("#author").val("");
				$("#message").val("");
			}
				$("#resp").text(resultStat).show().delay(1500).fadeOut(800);
			}
			});
			return false;
		});
	});
	$('.top').click(function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		});
	});
	Array.prototype.forEach.call(document.querySelectorAll('p'), function (p, i) {
		p.style.marginLeft = i * 6 + '%'
	})
	Zoomerang
	.config({
		maxHeight: 400,
		maxWidth: 900,
		bgColor: '#D1C4E9',
		bgOpacity: .85,
		onOpen: openCallback,
		onClose: closeCallback,
		onBeforeOpen: beforeOpenCallback,
		onBeforeClose: beforeCloseCallback
	})
	.listen('.zoom')
	function openCallback (el) {
		console.log('zoomed in on: ')
		console.log(el)
	}
	function closeCallback (el) {
		console.log('zoomed out on: ')
		console.log(el)
	}
	function beforeOpenCallback (el) {
		console.log('on before zoomed in on:')
		console.log(el)
	}
	function beforeCloseCallback (el) {
		console.log('on before zoomed out on:')
		console.log(el)
	}
	</script>
	<script>
	$("img.lazy").lazyload({effect: "fadeIn", threshold: -200 });
	
	(function() {
		[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
			var menuItems = menu.querySelectorAll('.menu__link'),
			setCurrent = function(ev) {
				ev.preventDefault();
				var item = ev.target.parentNode; 
				if (classie.has(item, 'menu__item--current')) {
					return false;
				}
				classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
				classie.add(item, 'menu__item--current');
			};
			[].slice.call(menuItems).forEach(function(el) {
				el.addEventListener('click', setCurrent);
			});
		});
		[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
			link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
			new Clipboard(link);
			link.addEventListener('click', function() {
				classie.add(link, 'link-copy--animate');
				setTimeout(function() {
					classie.remove(link, 'link-copy--animate');
				}, 300);
			});
		});
	})(window);
	new WOW().init();
	var lastId,
	topMenu = $("#top-menu"),
	topMenuHeight = topMenu.outerHeight()+15,
	menuItems = topMenu.find("a"),
	scrollItems = menuItems.map(function(){
		var item = $($(this).attr("href"));
		if (item.length) { return item; }
	});
	$(window).scroll(function(){
		var fromTop = $(this).scrollTop()+topMenuHeight;
		var cur = scrollItems.map(function(){
			if ($(this).offset().top < fromTop)
			return this;
		});
		cur = cur[cur.length-1];
		var id = cur && cur.length ? cur[0].id : "";
		if (lastId !== id) {
			lastId = id;
			menuItems
			.parent().removeClass("menu__item--current")
			.end().filter("[href='#"+id+"']").parent().addClass("menu__item--current");
		}                   
	});
	</script>
	</body>
</html>