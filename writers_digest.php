<?php
require_once('dbConnect.php');
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISION '21</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/img/faviconGreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
 
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- Vendor CSS Files -->
<script src="jquery.js"></script>
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/form.css" rel="stylesheet">


<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

</head>


<style>

@import url("https://fonts.googleapis.com/css?family=Sacramento&display=swap");

h1 {
  font-size: calc(20px + 18vh);
  line-height: calc(20px + 20vh);
/*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
  color: #fccaff; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  font-family: "Sacramento", cursive;
  text-align: center;
}
.event-name{
	font-size: calc(20px + 18vh);
    line-height: calc(20px + 20vh);
    /*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
    color: #fccaff; */
    text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
    font-family: "Sacramento", cursive;
    text-align: center;
    animation: blink 9s infinite;
    -webkit-animation: blink 9s infinite;
}

@-webkit-keyframes blink {
			20%,
			24%,
			55% {
				color: #111;
				text-shadow: none;
			   }
			0%,
			19%,
			21%,
			23%,
			25%,
			54%,
			56%,
			100% {
			    /*     color: #fccaff;
				text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
				0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
			    text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
				color: #fff6a9;
			  }
}

@keyframes blink {
			20%,
			24%,
			55% {
				color: #111;
				text-shadow: none;
			}

			0%,
			19%,
			21%,
			23%,
			25%,
			54%,
			56%,
			100% {
			/*     color: #fccaff;
				text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
				0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
			text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
				color: #fff6a9;
			}
}

.event-image{
	width:40%;
	height:40%;
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5%;
}

@media (max-width: 650px){
		.event-image{
			display: block;
			width: auto ;
			max-width: 100% ;
			height: auto ;
			margin-bottom: 5%;
		}
}

a {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}


html, body, aside {
	display: block;
	margin: 0;
	padding: 0;
}
body {
	background-attachment: fixed;
	background-position: 50% 0;
	background-size: cover;
	-webkit-text-size-adjust: none;
}

.body {
	max-width: 1120px;
	margin: 0 auto;
}
@media screen and (max-width: 1000px) {
	body {
		padding: 5px;
	}
}
@media screen and (max-width: 767px) {
	body {
		padding: 5px;
	}
}

/**/
/* font */
/**/
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);


/**/
/* defaults */
/**/
.sky-tabs,
.sky-tabs * {
	margin: 0;
	padding: 0;
	outline: none;
	border: 0;
	background: none;
}

/* describes color,size of words in the tab*/
.sky-tabs {
	position: relative;
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-size: 0;
	text-align: left;
	color: #666;
}
.sky-tabs > input {
	position: absolute;
	display: none;
}

/* describes each overall tab and words inside it*/
.sky-tabs > label {
	position: relative;
	z-index: 1;
	display: inline-block;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	padding: 15px;
	padding-top: 0;
	padding-left: 5px;
	font-size: 13px;
    color: #08da4e;
	line-height: 45px;
	cursor: pointer;
}

.sky-tabs > label.inverse {
	float: right;
	padding-right: 0;
	padding-left: 1px;
}
.sky-tabs > label.disabled {
	cursor: default;
}

/* the tab rectangle, outer one*/
.sky-tabs > label span {
	display: block;
	padding: 5px;
	background: rgba(255,255,255,0.9);
    animation: blinking 1.5s ease-in-out infinite alternate;
}

@keyframes blinking {
  0% {
    box-shadow: 0 0 15px #ffa500;
  }
  10% {
    box-shadow: 0 0 15px #ffa500;
  }1
  20% {
    box-shadow: 0 0 15px #ffa500;
  }
  30% {
    box-shadow: 0 0 15px #ffa500;
  }
  40% {
    box-shadow: 0 0 15px #ffa500;
  }
  50% {
    box-shadow: 0 0 15px #ffa500;
  }
  60% {
    box-shadow: 0 0 15px #ffa500;
  }
  70% {
    box-shadow: 0 0 15px #ffa500;
  }
  80% {
    box-shadow: 0 0 15px transparent;
  }
  90% {
    box-shadow: 0 0 15px transparent;
  }
  100% {
    box-shadow: 0 0 15px transparent;
  }
}

/* inside rectangle within each tab */
.sky-tabs > label span span {
	padding: 0 20px;
	background: transparent;
	transition: background 0.4s, color 0.4s;
	-o-transition: background 0.4s, color 0.4s;
	-ms-transition: background 0.4s, color 0.4s;
	-moz-transition: background 0.4s, color 0.4s;
	-webkit-transition: background 0.4s, color 0.4s;	
}

/* highlight color when hovering over rectangle inside main tab */
.sky-tabs > label:hover span span {
    background: #08da4e;
    box-shadow: 0 0 5px #ffffff, 0 0 25px #ffffff, 0 0 50px #ffffff,
    0 0 200px #ffffff;
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
    z-index: -1;        
	color: #fff;	
  
}

.sky-tabs > label.disabled span span {
	background: transparent;
	color: inherit;
}
.sky-tabs > input:checked + label {
	cursor: default;
}

/*clicked on color, the color of tab once its clicked, inside rectangle*/
.sky-tabs > input:checked + label span span {
	background: #00BFFF;
	color: #fff;
}
.sky-tabs > .switcher {
	display: none;
}
.sky-tabs > .switcher a {
	display: block;
	margin: 0 -20px;
	padding: 0 20px;
	text-decoration: none;
	color: inherit;
}
.sky-tabs > ul {
	list-style: none;
	position: relative;
	display: block;
	font-size: 13px;
    transition: 0.5s;
    margin: 30px 30px;
}

.sky-tabs > ul:hover{
    transform: translateY(20px);

}
.sky-tabs > ul::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(315deg, #4dff03, #00d0ff);
}

.sky-tabs > ul::after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(315deg, #4dff03, #00d0ff);
    filter: blur(30px);
}

.sky-tabs > ul span{
    position: absolute;
    top: 6px;
    left: 6px;
    right: 6px;
    bottom: 6px;
    background: rgba(0,0,0,0.6);
    z-index: 1;
}
.sky-tabs > ul span::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255,255,255,0.1);
    pointer-events: none;
}

.sky-tabs > ul > li {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	overflow: auto;
	padding: 30px 40px 25px;
    color: black;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	opacity: 0;
	-o-transform-origin: 0% 0%;
	-ms-transform-origin: 0% 0%;
	-moz-transform-origin: 0% 0%;
	-webkit-transform-origin: 0% 0%;
	-o-transition: opacity 0.8s, -o-transform 0.8s;	
	-ms-transition: opacity 0.8s, -ms-transform 0.8s;	
	-moz-transition: opacity 0.8s, -moz-transform 0.8s;	
	-webkit-transition: opacity 0.8s, -webkit-transform 0.8s;
}

.sky-tabs > .sky-tab-content-1:checked ~ ul > .sky-tab-content-1,
.sky-tabs > .sky-tab-content-2:checked ~ ul > .sky-tab-content-2,
.sky-tabs > .sky-tab-content-3:checked ~ ul > .sky-tab-content-3,
.sky-tabs > .sky-tab-content-4:checked ~ ul > .sky-tab-content-4,
.sky-tabs > .sky-tab-content-5:checked ~ ul > .sky-tab-content-5,
.sky-tabs > .sky-tab-content-6:checked ~ ul > .sky-tab-content-6,
.sky-tabs > .sky-tab-content-7:checked ~ ul > .sky-tab-content-7,
.sky-tabs > .sky-tab-content-8:checked ~ ul > .sky-tab-content-8,
.sky-tabs > .sky-tab-content-9:checked ~ ul > .sky-tab-content-9 {
	position: relative;
	z-index: 1;
	opacity: 1;
	-webkit-transform: translate(0,0);
}


/**/
/* positions */
/**/
.sky-tabs-pos-top-center {
	text-align: center;
}
.sky-tabs-pos-top-right {
	text-align: right;
}
.sky-tabs-pos-top-right > label {
	padding-right: 0;
	padding-left: 1px;
}
.sky-tabs-pos-top-justify > label {
	padding-right: 0;
	padding-left: 1px;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-2 > label {
	width: 50%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-3 > label {
	width: 33.33%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-4 > label {
	width: 25%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-5 > label {
	width: 20%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-6 > label {
	width: 16.66%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-7 > label {
	width: 14.28%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-8 > label {
	width: 12.5%;
}
.sky-tabs-pos-top-justify.sky-tabs-amount-9 > label {
	width: 11.11%;
}
.sky-tabs-pos-top-justify > input:first-child + label {
	padding-left: 0;
}
.sky-tabs-pos-left > label,
.sky-tabs-pos-right > label {
	display: block;
	width: 25%;
	float: left;
	clear: left;
	margin-right: 0;
}
.sky-tabs-pos-right > label {
	float: right;
	clear: right;
}
.sky-tabs-pos-left > ul {
	margin-left: 25%;
}
.sky-tabs-pos-right > ul {
	margin-right: 25%;
}
.sky-tabs-pos-right > label {
	padding-right: 0;
	padding-left: 1px;
}
.sky-tabs-pos-top-center > ul > li,
.sky-tabs-pos-top-justify > ul > li {
	-o-transform-origin: 50% 0%;
	-ms-transform-origin: 50% 0%;
	-moz-transform-origin: 50% 0%;
	-webkit-transform-origin: 50% 0%;
}
.sky-tabs-pos-right > ul > li,
.sky-tabs-pos-top-right > ul > li {
	-o-transform-origin: 100% 0%;
	-ms-transform-origin: 100% 0%;
	-moz-transform-origin: 100% 0%;
	-webkit-transform-origin: 100% 0%;
}


/**/
/* animations */
/**/
.sky-tabs-anim-slide-up > ul > li {
	-o-transform: translateY(-15%);
	-ms-transform: translateY(-15%);
	-moz-transform: translateY(-15%);
	-webkit-transform: translateY(-15%);
}
.sky-tabs-anim-slide-right > ul > li {
	-o-transform: translateX(15%);
	-ms-transform: translateX(15%);
	-moz-transform: translateX(15%);
	-webkit-transform: translateX(15%);
}
.sky-tabs-anim-slide-down > ul > li {
	-o-transform: translateY(15%);
	-ms-transform: translateY(15%);
	-moz-transform: translateY(15%);
	-webkit-transform: translateY(15%);
}
.sky-tabs-anim-slide-left > ul > li {
	-o-transform: translateX(-15%);
	-ms-transform: translateX(-15%);
	-moz-transform: translateX(-15%);
	-webkit-transform: translateX(-15%);
}
.sky-tabs-anim-slide-up-left > ul > li {
	-webkit-transform: translate(-15%,-15%);	
}
.sky-tabs-anim-slide-up-right > ul > li {
	-webkit-transform: translate(15%,-15%);	
}
.sky-tabs-anim-slide-down-right > ul > li {
	-webkit-transform: translate(15%,15%);	
}
.sky-tabs-anim-slide-down-left > ul > li {
	-webkit-transform: translate(-15%,15%);	
}

.sky-tabs-anim-scale > ul > li {
	-o-transform: scale(0.1,0.1);
	-ms-transform: scale(0.1,0.1);
	-moz-transform: scale(0.1,0.1);
	-webkit-transform: scale(0.1,0.1);
}
.sky-tabs-anim-scale > .sky-tab-content-1:checked ~ ul > .sky-tab-content-1,
.sky-tabs-anim-scale > .sky-tab-content-2:checked ~ ul > .sky-tab-content-2,
.sky-tabs-anim-scale > .sky-tab-content-3:checked ~ ul > .sky-tab-content-3,
.sky-tabs-anim-scale > .sky-tab-content-4:checked ~ ul > .sky-tab-content-4,
.sky-tabs-anim-scale > .sky-tab-content-5:checked ~ ul > .sky-tab-content-5,
.sky-tabs-anim-scale > .sky-tab-content-6:checked ~ ul > .sky-tab-content-6,
.sky-tabs-anim-scale > .sky-tab-content-7:checked ~ ul > .sky-tab-content-7,
.sky-tabs-anim-scale > .sky-tab-content-8:checked ~ ul > .sky-tab-content-8,
.sky-tabs-anim-scale > .sky-tab-content-9:checked ~ ul > .sky-tab-content-9 {
	-o-transform: scale(1,1);
	-ms-transform: scale(1,1);
	-moz-transform: scale(1,1);
	-webkit-transform: scale(1,1);
}

.sky-tabs-anim-rotate > ul > li {
	-o-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
}
.sky-tabs-anim-rotate.sky-tabs-pos-right > ul > li,
.sky-tabs-anim-rotate.sky-tabs-pos-top-right > ul > li {
	-o-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
}
.sky-tabs-anim-rotate > .sky-tab-content-1:checked ~ ul > .sky-tab-content-1,
.sky-tabs-anim-rotate > .sky-tab-content-2:checked ~ ul > .sky-tab-content-2,
.sky-tabs-anim-rotate > .sky-tab-content-3:checked ~ ul > .sky-tab-content-3,
.sky-tabs-anim-rotate > .sky-tab-content-4:checked ~ ul > .sky-tab-content-4,
.sky-tabs-anim-rotate > .sky-tab-content-5:checked ~ ul > .sky-tab-content-5,
.sky-tabs-anim-rotate > .sky-tab-content-6:checked ~ ul > .sky-tab-content-6,
.sky-tabs-anim-rotate > .sky-tab-content-7:checked ~ ul > .sky-tab-content-7,
.sky-tabs-anim-rotate > .sky-tab-content-8:checked ~ ul > .sky-tab-content-8,
.sky-tabs-anim-rotate > .sky-tab-content-9:checked ~ ul > .sky-tab-content-9 {
	-o-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-moz-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
}

.sky-tabs-anim-flip > ul {
	perspective: 2000px;
	-o-perspective: 2000px;
	-ms-perspective: 2000px;
	-moz-perspective: 2000px;
	-webkit-perspective: 2000px;
	perspective-origin: 50% 50%;
	-o-perspective-origin: 50% 50%;
	-ms-perspective-origin: 50% 50%;
	-moz-perspective-origin: 50% 50%;
	-webkit-perspective-origin: 50% 50%;
}
.sky-tabs-anim-flip > ul > li {
	-o-transform: rotateX(-90deg);
	-ms-transform: rotateX(-90deg);
	-moz-transform: rotateX(-90deg);
	-webkit-transform: rotateX(-90deg);
}
.sky-tabs-anim-flip.sky-tabs-pos-left > ul > li {
	-o-transform: rotateY(90deg);
	-ms-transform: rotateY(90deg);
	-moz-transform: rotateY(90deg);
	-webkit-transform: rotateY(90deg);	
}
.sky-tabs-anim-flip.sky-tabs-pos-right > ul > li {
	-o-transform: rotateY(-90deg);
	-ms-transform: rotateY(-90deg);
	-moz-transform: rotateY(-90deg);
	-webkit-transform: rotateY(-90deg);
}
.sky-tabs-anim-flip > .sky-tab-content-1:checked ~ ul > .sky-tab-content-1,
.sky-tabs-anim-flip > .sky-tab-content-2:checked ~ ul > .sky-tab-content-2,
.sky-tabs-anim-flip > .sky-tab-content-3:checked ~ ul > .sky-tab-content-3,
.sky-tabs-anim-flip > .sky-tab-content-4:checked ~ ul > .sky-tab-content-4,
.sky-tabs-anim-flip > .sky-tab-content-5:checked ~ ul > .sky-tab-content-5,
.sky-tabs-anim-flip > .sky-tab-content-6:checked ~ ul > .sky-tab-content-6,
.sky-tabs-anim-flip > .sky-tab-content-7:checked ~ ul > .sky-tab-content-7,
.sky-tabs-anim-flip > .sky-tab-content-8:checked ~ ul > .sky-tab-content-8,
.sky-tabs-anim-flip > .sky-tab-content-9:checked ~ ul > .sky-tab-content-9 {
	-o-transform: rotateX(0deg);
	-ms-transform: rotateX(0deg);
	-moz-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
	-o-transition-delay: 0.2s;
	-ms-transition-delay: 0.2s;
	-moz-transition-delay: 0.2s;
	-webkit-transition-delay: 0.2s;
}


/**/
/* grid system */
/**/
.sky-tabs .grid-row {
	margin-top: 20px;
}
.sky-tabs .grid-row:after {
	content: '';
	display: table;
	clear: both;
}
.sky-tabs .grid-row:first-child {
	margin-top: 0;
}
.sky-tabs .grid-col {
	display: block;
	float: left;
	width: 100%;
	margin-left: 2%;
}
.sky-tabs .grid-col:first-child {
	margin-left: 0;
}
.sky-tabs .grid-col .inner {
	padding: 10px 0;
	border-radius: 5px;
	background: rgba(0,0,0,0.1);
	text-align: center;
}
.sky-tabs .grid-col-1 {
	width: 6.5%;
}
.sky-tabs .grid-col-2 {
	width: 15%;
}
.sky-tabs .grid-col-3 {
	width: 23.5%;
}
.sky-tabs .grid-col-4 {
	width: 32%;
}
.sky-tabs .grid-col-5 {
	width: 40.5%;
}
.sky-tabs .grid-col-6 {
	width: 49%;
}
.sky-tabs .grid-col-7 {
	width: 57.5%;
}
.sky-tabs .grid-col-8 {
	width: 66%;
}
.sky-tabs .grid-col-9 {
	width: 74.5%;
}
.sky-tabs .grid-col-10 {
	width: 83%;
}
.sky-tabs .grid-col-11 {
	width: 91.5%;
}
.sky-tabs .grid-col-offset-1,
.sky-tabs .grid-col-offset-1:first-child {
	margin-left: 8.5%;
}
.sky-tabs .grid-col-offset-2,
.sky-tabs .grid-col-offset-2:first-child {
	margin-left: 17%;
}
.sky-tabs .grid-col-offset-3,
.sky-tabs .grid-col-offset-3:first-child {
	margin-left: 25.5%;
}
.sky-tabs .grid-col-offset-4,
.sky-tabs .grid-col-offset-4:first-child {
	margin-left: 34%;
}
.sky-tabs .grid-col-offset-5,
.sky-tabs .grid-col-offset-5:first-child {
	margin-left: 42.5%;
}
.sky-tabs .grid-col-offset-6,
.sky-tabs .grid-col-offset-6:first-child {
	margin-left: 51%;
}
.sky-tabs .grid-col-offset-7,
.sky-tabs .grid-col-offset-7:first-child {
	margin-left: 59.5%;
}
.sky-tabs .grid-col-offset-8,
.sky-tabs .grid-col-offset-8:first-child {
	margin-left: 68%;
}
.sky-tabs .grid-col-offset-9,
.sky-tabs .grid-col-offset-9:first-child {
	margin-left: 76.5%;
}
.sky-tabs .grid-col-offset-10,
.sky-tabs .grid-col-offset-10:first-child {
	margin-left: 85%;
}
.sky-tabs .grid-col-offset-11,
.sky-tabs .grid-col-offset-11:first-child {
	margin-left: 93.5%;
}


/**/
/* typography */
/**/
.sky-tabs .typography h1,
.sky-tabs .typography h2,
.sky-tabs .typography h3,
.sky-tabs .typography h4,
.sky-tabs .typography h5,
.sky-tabs .typography h6 {
	margin: 40px 0 0 0;
	padding: 0;
	text-align: left;
	color: #08da4e;
}
.sky-tabs .typography h1 {
	font-size: 40px;
	line-height: 50px;
	font-weight: 300;
}
.sky-tabs .typography h2 {
	font-size: 34px;
	line-height: 44px;
	font-weight: 300;
}
.sky-tabs .typography h3 {
	font-size: 28px;
	line-height: 36px;
	font-weight: 300;
}
.sky-tabs .typography h4 {
	font-size: 22px;
	line-height: 30px;
	font-weight: 400;
}
.sky-tabs .typography h5 {
	font-size: 16px;
	line-height: 23px;
	font-weight: 400;
	text-transform: uppercase;
}
.sky-tabs .typography h6 {
	font-size: 14px;
	line-height: 20px;
	font-weight: 400;
	text-transform: uppercase;
}
.sky-tabs .typography p {
	margin: 20px 0 0 0;
	padding: 0;
	line-height: 20px;
	text-align: left;
}
.sky-tabs .typography ul,
.sky-tabs .typography ol {
	list-style: none;
	margin: 20px 0 0 0;
	padding: 0;
	line-height: 20px;
}
.sky-tabs .typography li {
	position: relative;
	margin-top: 5px;
	padding-left: 20px;
}
.sky-tabs .typography li ul,
.sky-tabs .typography li ol {
	margin-top: 5px;
}
.sky-tabs .typography ul li:before {
	content: '';
	position: absolute;
	top: 8px;
	left: 0;
	width: 4px;
	height: 4px;
	background: #333;
}
.sky-tabs .typography ol {
	counter-reset: list1;
}
.sky-tabs .typography ol > li:before {
	counter-increment:list1;
	content: counter(list1)'.';
	position: absolute;
	top: 0;
	left: 0;
	color: #333;
}
.sky-tabs .typography a {
	text-decoration: underline;
	color: #2da5da;
}
.sky-tabs .typography a:hover {
	text-decoration: none;
}
.sky-tabs .typography .pic {
	padding: 4px;
	border: 1px dotted #ccc;
}
.sky-tabs .typography .pic img {
	display: block;
}
.sky-tabs .typography .pic-right {
	float: right;
	margin: 0 0 10px 20px;
}
.sky-tabs .typography .link {
	text-decoration: underline;
	color: #2da5da;
	cursor: pointer;
}
.sky-tabs .typography .link:hover {
	text-decoration: none;
}
.sky-tabs .typography h1:first-child,
.sky-tabs .typography h2:first-child,
.sky-tabs .typography h3:first-child,
.sky-tabs .typography h4:first-child,
.sky-tabs .typography h5:first-child,
.sky-tabs .typography h6:first-child,
.sky-tabs .typography p:first-child {
	margin-top: 0;
}
.sky-tabs .typography .text-center {
	text-align: center;
}
.sky-tabs .typography .text-right {
	text-align: right;
}


/**/
/* icons from fontawesome.com/v4.7.0/icons */
/* any xtra icons needed get from there */

.icon-fax:before {
  content: "\f1ac";
}
.icon-picture:before {
  content: "\f03e";
}
.icon-tasks:before {
  content: "\f0ae";
}
.icon-gears:before,
.icon-cogs:before {
  content: "\f085";
}
.sky-tabs > label [class^="icon-"] {
	display: block;
	float: left;
	width: 18px;
	margin: 0 12px 0 -6px;
  font-family: FontAwesome;
  font-style: normal;
  font-size: 16px;
  text-align: center;
  -webkit-font-smoothing: antialiased;
}


/**/
/* pad */
/**/
@media screen and (max-width: 1000px) {
	.sky-tabs > label span span {
		padding: 0 15px;
	}
	.sky-tabs > label [class^="icon-"] {
		margin-right: 10px;
		margin-left: -5px;
	}
}


/**/
/* phone */
/**/
@media screen and (max-width: 767px) {
	
	.sky-tabs .grid-col,
	.sky-tabs .grid-col:first-child {
		float: none;
		width: 100%;
		margin: 20px 0 0 0;
	}
	
	.sky-tabs-response-to-stack > label {
		display: block;
		width: 100%;
		padding-right: 0;
		padding-left: 0;
		text-align: left;
	}
	.sky-tabs-response-to-stack > ul {
		margin-top: 0;
		margin-right: 0;
		margin-left: 0;
	}
	.sky-tabs-response-to-stack > ul > li {
		-o-transform-origin: 50% 0%;
		-ms-transform-origin: 50% 0%;
		-moz-transform-origin: 50% 0%;
		-webkit-transform-origin: 50% 0%;
	}
	.sky-tabs-response-to-stack.sky-tabs-anim-flip > ul > li {
		-webkit-transform: rotateX(-90deg);
	}
	
	.sky-tabs-response-to-icons > label {
		font-size: 0;
	}
	.sky-tabs-response-to-icons > label [class^="icon-"] {
		width: 45px;
		margin: 0;
		font-size: 16px;
	}
	.sky-tabs-response-to-icons > label span span {
		padding: 0;
	}
	.sky-tabs-response-to-icons.sky-tabs-pos-left > label,
	.sky-tabs-response-to-icons.sky-tabs-pos-right > label {
		width: 56px;
	}
	.sky-tabs-response-to-icons.sky-tabs-pos-left > ul {
		margin-left: 56px;
	}
	.sky-tabs-response-to-icons.sky-tabs-pos-right > ul {
		margin-right: 56px;
	}
	
	.sky-tabs-response-to-switcher > label {
		display: none;
		width: 100%;
		padding-right: 0;
		padding-left: 0;
		text-align: left;
	}
	.sky-tabs-response-to-switcher > .switcher {
		display: block;
	}
	.sky-tabs-response-to-switcher:hover > label {
		display: block;
	}
	.sky-tabs-response-to-switcher:hover > .switcher {
		display: none;
	}
	.sky-tabs-response-to-switcher > ul {
		margin-top: 0;
		margin-right: 0;
		margin-left: 0;
	}
	.sky-tabs-response-to-switcher > ul > li {
		-o-transform-origin: 50% 0%;
		-ms-transform-origin: 50% 0%;
		-moz-transform-origin: 50% 0%;
		-webkit-transform-origin: 50% 0%;
	}
	.sky-tabs-response-to-switcher.sky-tabs-anim-flip > ul > li {
		-webkit-transform: rotateX(-90deg);
	}
}

@import url('https://fonts.googleapis.com/css?family=Montserrat');

.register-title {
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 60vh;
	letter-spacing: 1px;
}

.register-here {
	background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy-downsized.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 450%;
	line-height: .75;
	margin: 10px 0;
	border-radius: 25px;
    border: 2px solid #08da4e;
    padding: 20px; 
}


.register-title p{
	cursor:pointer;
}

.descp
{
	color: white;
}

@media screen and (max-width: 768px) {
	.register-title {
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 10vh;
	letter-spacing: 1px;
	
}
	.register-here {
	background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy-downsized.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 200%;
	line-height: .75;
	margin: 5px 0;
	border-radius: 25px;
    border: 2px solid #08da4e;
    padding: 10px; 
}
}
</style>


<body>
	<?php include "header.php";?>
  <div class="body">

  <!-- ======= Services Section ======= -->
  <section  class="services" style="margin-top:60px;">
            <p class="event-name">Writer's Digest</p>
			<!-- <img class="event-image" src="assets/img/eventpictest.jpeg" alt="event pic"> -->
			<!-- tabs -->
			<div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-flip sky-tabs-response-to-icons">				
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="icon-picture"></i>About Event</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="icon-tasks"></i>Rules</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
				<label for="sky-tab3"><span><span><i class="icon-cogs"></i>Time and Platform</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
				<label for="sky-tab4"><span><span><i class="icon-fax"></i>Contact</span></span></label>
				
				<label class="switcher"><span><span><a href="#"><i class="icon-reorder"></i>Tabs</a></span></span></label>
				
				<ul>
                <span></span>
					<li class="sky-tab-content-1">					
						<div class="typography">
							<h1>About Event</h1>
							<div class="descp">
							<p>&emsp;&emsp;“We write to taste life in the moment and in retrospect,” said Anais Nin. The impact and influence of writing has been cardinal from the inceptive times.  Great writing has the propensity to educate, inspire, entertain, and most importantly connect with the reader. “Writer’s Digest” has been marshalled to awaken your creative muse and unleash your writing skills. So, attention dear prolific writers! Here’s an event exclusively put together for you.</p>

                            <p>&emsp;&emsp;Talking about the general instructions, all the participants have to send a write-up/poem based on the given theme. The participants have to send their entry to the given mail ID: vision21nontech@gmail.com. The entry will later be posted on our Instagram page. Judges will decide whose write-up/poem has created an impact in the reader’s mind and the winners shall be finalized.</p>
							</div>
							<p class="text-right"><em>Click to go back to <a href="pre_events.php" > Pre-Events Page</a>.</em></p>
						</div>
					</li>
					
					<li class="sky-tab-content-2">
						<div class="typography">
							<h1>Rules</h1>
							<div class="descp">
							<ol>
                               <li>The write-up/poem should be based on the given theme.</li>
                               <li>One participant should send one entry only.</li>
                               <li>Send your entry to the given mail ID: vision21nontech@gmail.com .</li>
                               <li>The selections of winners will be based on the number of likes and also the creativity and excellence of the write-up/poem.</li>
                               <li>The write-up/poem should be written with their own creative mind. Avoid plagiarism.</li>
                               <li>Judge's decision will be final.</li>
                            </ol>
							</div>
							<p class="text-right"><em>Click to go back to <a href="pre_events.php" > Pre-Events Page</a>.</em></p>
						</div>
					</li>
					
					<li class="sky-tab-content-3">
						<div class="typography">
							<h1>Time and Platform</h1>
							<div class="descp">
							<p>Time: 6th April to 12th April - 10 pm</p>
							<p>Platform: e-Mail - Instagram</p>
							<p>Details will be updated if necessary.</p>
							</div>
							<p class="text-right"><em>Click to go back to <a href="pre_events.php" > Pre-Events Page</a>.</em></p>
						</div>
					</li>
					
					<li class="sky-tab-content-4">
						<div class="typography">
							<h1>Contact</h1>
							<div class="descp">
							<p>KISHORE M &nbsp;-&nbsp; Phone Number: 9894221861 </p>
							</div>
							<p class="text-right"><em>Click to go back to <a href="pre_events.php" > Pre-Events Page</a>.</em></p>
						</div>
					</li>			
				</ul>
			</div>
			<!--/ tabs -->
		</div>

  </section><!-- End Services Section -->
  <div style="height:10px;"></div>
	<?php include "alt-footer.php"; ?>
</body>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</html>