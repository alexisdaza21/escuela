
<?php require("Vistas/home/header.php");?>
  <?php 
    if (isset($_GET["error"]) ) {
     
         echo "<script>
                alert('Datos incorrectos');
               
   		 </script>";
    }
?>
<style>
* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #fff;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 30%;
  text-align: center;
  top: 70%;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dot2 {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dot3 {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
	<label type="datetime-local"></label>
		<!-- Banner -->
			<section id="banner">
				<div class="inner" >
					<h1>The Moments</h1>
					<h2>deseo  y placer</h2>
				</div>
				<div></div>
				<video autoplay loop muted playsinline src="images/banner.jpg"></video>
			</section>
			<div class="inner"  >
				<br><br><br>
			</div>
		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<br><br><br><br><br>
				</div>
			</section>
		<!-- Highlights -->
			<section class="wrapper" >
				<div class="inner"  >
					<header class="special">
						<h2 style="color: #bfbfbf;">...visitanos...</h2>
						<p style="color: #fff;">te ofrecemos entre diferentes cuartos estandar y premiunn, donde podras tener de un momento magico y satisfacer tus fantasisas. disfruta de nuestros mini-bar y servicio al cuarto </p>
					</header>
					<div class="highlights">
						<section >
							<div class="content" >
								<header>
									
					<div class="slideshow-container">

									<div class="mySlides fade">
									  <div class="numbertext">1 / 3</div>
									  <img src="images/s1.jpg" style="width:100%"><br>
									  <h3 class="text" >standar </h3>
									</div>

									<div class="mySlides fade">
									  <div class="numbertext">2 / 3</div>
									  <img src="images/p1.jpg" style="width:100%">
									  <h3 class="text">premium</h3>
									</div>

									<div class="mySlides fade">
									  <div class="numbertext">3 / 3</div>
									  <img src="images/p2.jpg" style="width:100%">
									  <h3 class="text">premium</h3>
									</div>

									</div>
									<br>

									<div >
									  <span class="dot"></span> 
									  <span class="dot"></span> 
									  <span class="dot"></span> 
									</div>		
									<h3>Cuartos</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
						<div class="slideshow-container">

									<div class="mySlides2 fade">
									  <div class="numbertext">1 / 3</div>
									  <img src="images/m1.jpg" style="width:100%"><br>
									  <h3 class="text" >mini~bar </h3>
									</div>

									<div class="mySlides2 fade">
									  <div class="numbertext">2 / 3</div>
									  <img src="images/s2.jpg" style="width:100%">
									  <h3 class="text">condones</h3>
									</div>

									<div class="mySlides2 fade">
									  <div class="numbertext">3 / 3</div>
									  <img src="images/s3.jpg" style="width:100%">
									  <h3 class="text">cenas</h3>
									</div>

									</div>
									<br>

									<div >
									  <span class="dot2"></span> 
									  <span class="dot2"></span> 
									  <span class="dot2"></span> 
									</div>	
									<h3>Servicios</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>

							</div>
						</section>
						<section>
							<div class="content">
								<header>
								
						<div class="slideshow-container">

									<div class="mySlides3 fade">
									  <div class="numbertext">1 / 3</div>
									  <img src="images/i1.jpg" style="width:100%"><br>
									  <h3 class="text" >garage </h3>
									</div>

									<div class="mySlides3 fade">
									  <div class="numbertext">2 / 3</div>
									  <img src="images/i2.jpg" style="width:100%">
									  <h3 class="text">cabañas</h3>
									</div>

									<div class="mySlides3 fade">
									  <div class="numbertext">3 / 3</div><a href="https://goo.gl/maps/Q8Ahw43w9X92"  target="_blank">
									  <img  src="images/i3.jpg" style="width:100%">
									  <h3 class="text" style="color: black;">ubicanos</h3></a>
									</div>

									</div>
									<br>

									<div >
									  <span class="dot3"></span> 
									  <span class="dot3"></span> 
									  <span class="dot3"></span> 
									</div>	
							
							<h3>instalaciones</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
			<br><br><br><br><br>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Faucibus consequat lorem</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote><br>
									<p>No es tu desnudez, es el placer de haberla provocado.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/mind.jpg" alt="" />
									</div><br><br><br><br>
									<p class="credit">- <strong> Mind of brando</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>El sexo si amor es una experiencia vacia, Pero como experiencia vacia es una de las mejores.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/woody.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Woody allen</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>El sexo es el consuelo que le queda a uno cuando ya no le alcanza el amor.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/garcia.jpg" alt="" />
									</div><br><br><br><br>
									<p class="credit">- <strong>Gabriel garci&aacute; m&aacute;rquez</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // tiempo de cambio
}
</script>
<script>
var index = 0;
slide2();

function slide2() {
    var i;
    var slides2 = document.getElementsByClassName("mySlides2");
    var dots = document.getElementsByClassName("dot2");
    for (i = 0; i < slides2.length; i++) {
       slides2[i].style.display = "none";  
    }
    index++;
    if (index > slides2.length) {index = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides2[index-1].style.display = "block";  
    dots[index-1].className += " active";
    setTimeout(slide2, 3000); // tiempo de cambio
}
</script>
<script>
var index3 = 0;
slide3();

function slide3() {
    var i;
    var slides3 = document.getElementsByClassName("mySlides3");
    var dots = document.getElementsByClassName("dot3");
    for (i = 0; i < slides3.length; i++) {
       slides3[i].style.display = "none";  
    }
    index3++;
    if (index3 > slides3.length) {index3 = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides3[index3-1].style.display = "block";  
    dots[index3-1].className += " active";
    setTimeout(slide3, 3500); // tiempo de cambio
}
</script>

<?php require("Vistas/home/footer.php");?>