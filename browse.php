<?php
include("includes/includedFiles.php");
?>




<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="browse_img/slide1.jpg" style="width:100%">
  <div class="text">Unlimited Yoga</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="browse_img/slide2.jpg" style="width:100%">
  <div class="text">New Life</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="browse_img/s4.jpg" style="width:100%">
  <div class="text">Overcome the Barriers</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>





<div class ="browsediv">
<h1 class="pageHeadingBig">Focus on your fitness inside out</h1>



<?php
	$albumQuery = mysqli_query($con, "SELECT * FROM browse ORDER BY RAND()");

	while ($row = mysqli_fetch_array($albumQuery)) {




		echo "<div class='gridViewItem'>
					<span role='link' tabindex='0' onclick='openPage(\"browse.php?id=" . $row['id'] . "\")'>
					<a href='" .$row['link'] . "'>	<img src='" . $row['artworkPath'] . "'></a>

						<div class='gridViewInfo'>"
			. $row['title'] .
			"</div>
					</span>

				</div>";
	}
	?>


	<svg id="svgfilters" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
			<filter id="spring-grass" x="-10%" y="-10%" width="120%" height="120%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feColorMatrix type="matrix" values=".33 .33 .33 0 0
          .33 .33 .33 0 0
          .33 .33 .33 0 0
          0 0 0 1 0" in="SourceGraphic" result="colormatrix" />
				<feComponentTransfer in="colormatrix" result="componentTransfer">
					<feFuncR type="table" tableValues="0 0.38 0.92" />
					<feFuncG type="table" tableValues="0.5 0.8 1" />
					<feFuncB type="table" tableValues="0.5 0.56 0.74" />
					<feFuncA type="table" tableValues="0 1" />
				</feComponentTransfer>
				<feBlend mode="normal" in="componentTransfer" in2="SourceGraphic" result="blend" />
			</filter>
		</defs>
	</svg>
</div>


	