<?php
require_once('dbConnect.php');
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISION 2021</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/img/faviconGreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

</head>

<style>
.wrapper {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 270px;
  height: 270px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
.wrapper span {
  position: absolute;
  width: 100%;
  height: 6px;
  background-color: #9CECA1;
  border: 1px solid #9CECA1;
}
.wrapper span:first-child {
  transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform-origin: 0 0;
}

.wrapper span:nth-child(2) {
  bottom: 0;
  z-index: 1;
}

.wrapper span:nth-child(3) {
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform-origin: 100% 0;
}

.wrapper span:nth-child(4) {
  z-index: 1;
}

.wrapper .img_box {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

.quote1{
  color:#fff;
  border: 2px solid #66EF67;
  padding:20px;
  position:relative;
  margin:20px;
}

.quote1::before, .quote1::after{
  position:absolute;
  font-size:105px;
  font-family: 'Mulish', sans-serif;
  background:#000;
  display:block;
  height:30px;
  width:45px;
  text-align:center;
  color:#fff;
}

.quote1::before{
  content:"“";
  top:-30px;
  left:20px;
  line-height:100px;
}

.quote1::after{
  content:"”";
  bottom:-25px;
  right:20px;
  line-height: 60px;
}

@media(max-width:768px){
  .two{
    width:50%;
    margin-bottom:50px;
  }

}

.sizing p {
  font-size:90px;
  line-height:100px
}
.sizing2 p {
  font-size:60px;
  line-height:70px;
}

@media (max-width: 650px) {
  .sizing p {
    font-size: 60px;
  }
  .sizing2 p {
    font-size: 50px;
  }
}

</style>


<body>
<?php include "header.php"; ?>

<section id="workshop" class="pricing"  style="margin-top:60px;" >

<div class="container" data-aos="fade-left">
 <header class="section-header">
  <p style="color:#fff">Sponsors</p>
 </header>
</div>

<div style="height:30px;" ></div>
<div class="container" data-aos="fade-left">
 <header class="section-header">
   <div class="sizing">
     <p>TITLE SPONSOR</p>
   </div>
 </header>
</div>


<section  class="about">
  <div class="container" data-aos="fade-up">
    
    <div class="row gx-0">
      <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="quote1">
              <h2 style="color:#47FFBC">VIJAY CEMENTS</h2>
              <p>
                &emsp; &emsp; They are a leading environmentally and socially progressive cement manufacturing company. Their plant has been awarded with IS 1489-Part: 1-1991 Certification, IMS Certification and 5S Certification which makes it one of the most comprehensive and holistic quality management endeavors in this category.
              </p>
            </div>
      </div>


      <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="img_box" style= "background-image: url('assets/img/clients/vijaycements_square.png'); "></div>
          </div>
      </div>

    </div>
  </div>
</section>


<div style="height:50px;" ></div>
<div class="container" data-aos="fade-left">
 <header class="section-header">
   <div class="sizing2">
     <p>ASSOCIATE SPONSOR</p>
   </div>
 </header>
</div>

<section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/clients/linkeddots.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Linkeddots</h2>
            <p>
              &emsp; &emsp; It is an industrial IoT Products and Solutions company. They provide a real time view of where people and things are, measure its presence and provide you exception alerts against the plan. 
            </p>
          </div>
        </div>

    </div>
  </div>
</section>

<div style="height:50px;" ></div>
<div class="container" data-aos="fade-left">
 <header class="section-header">
   <div class="sizing2">
     <p >ADDITIONAL SPONSORS</p>
   </div>
 </header>
</div>



<section  class="about">
    <section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="quote1">
              <h2>Masters Engineering Academy</h2>
              <p>
                &emsp; &emsp; It is one of the leading academies providing high quality coaching for GATE / ESE / PSU's examinations. Slogan: "A great place to be the pioneers!"
              </p>
            </div>
      </div>

      <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="img_box" style= "background-image: url('assets/img/clients/masters_square.png'); "></div>
          </div>
      </div>

    </div>
  </div>
</section>
</section>

<section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/clients/dwaraka1.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Dhwaraka Boutique</h2>
            <p>
              &emsp; &emsp; It is a top player in the category 'Tailors for Ladies' in Chennai.  This well-known establishment acts as a one-stop destination, servicing customers both local and from other parts of Chennai.
            </p>
          </div>
        </div>

    </div>
  </div>
</section>

<section  class="about">
    <section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="quote1">
              <h2>OASYS Cybernetics</h2>
              <p>
                &emsp; &emsp; It is a one of the leading organizations specializing in supporting a nation building process through Project Management and System Integration.
              </p>
            </div>
      </div>

      <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="img_box" style= "background-image: url('assets/img/clients/oasys.png'); "></div>
          </div>
      </div>

    </div>
  </div>
</section>
</section>

<section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/clients/shri vari.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Shri Vaari Electricals</h2>
            <p>
              &emsp; &emsp; This Pvt. Ltd. company is a professionally managed, multi-location based engineering firm having market leadership in South India. 
            </p>
          </div>
        </div>

    </div>
  </div>
</section>

<section  class="about">
    <section  class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="quote1">
              <h2>Agilisium</h2>
              <p>
                &emsp; &emsp; They are a Big Data and Analytics Company ​with a clear focus on helping organizations take the “Data-to-Insights-Leap”​ and are invested in all stages of Data Journey: Data Architecture Consulting, ​Data Integration, Data Storage, Data Governance and Data Analytics.
              </p>
            </div>
      </div>

      <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <div class="wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="img_box" style= "background-image: url('assets/img/clients/agilisium.png'); "></div>
          </div>
      </div>

    </div>
  </div>
</section>
</section>

<div style="height:50px;" ></div>
<div class="container" data-aos="fade-left">
 <header class="section-header">
  <p style="font-size:60px;line-height:70px">PARTNERS</p>
 </header>
</div>

<div class="container-fluid align-items" >
  <div class="row">

<div class="col-md-3 align-items two">
<img style="width:80%;display:block;margin:auto;" src="assets/img/clients/partners/d2c.png" class="img-fluid" alt="">
</div>

<div class="col-md-3 align-items two">
<img style="width:80%;display:block;margin:auto;border-radius:40px;" src="assets/img/clients/partners/DIYguru_sq.png" class="img-fluid" alt="">
</div>

<div class="col-md-3 align-items two">
<a href="https://www.geeksforgeeks.org/" target="_blank">
<img style="width:80%;display:block;margin:auto;border-radius:40px;" src="assets/img/clients/partners/gfg_sq.png" class="img-fluid" alt="">
</a>
</div>

<div class="col-md-3 align-items two">
<img style="width:80%;display:block;margin:auto;" src="assets/img/clients/partners/progate.png" class="img-fluid" alt="">
</div>

</div>
</div>


</section>

<div style="height:80px;"></div>
<?php include "alt-footer.php"; ?>
</body>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</html>

