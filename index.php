<!DOCTYPE html> <html lang="en"> 
<!-- Title -->
 <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
    <body> 
        <!-- Navigation bar -->
      <section id="header"> 
        <div class="nav-bar">
             <nav> 
                <h1 class="logo"><b>Harrow Council</b></h1> 
                <ul> 
                    <li><a href="homepage.html">Home</a></li>
                     <li><a href="Explore.html">Ride</a></li>
                      <li><a href="Sign_up_Form.html">Sign up</a></li>
                       <li><a href="Contribute.html">contribute</a></li>
                        <li><a href="about.html">about</a></li> 
                        <li><a href="contact.html">contact</a></li> 
                    </ul> </nav> </div> </section> 
                    <!-- End of Navigation bar -->
                     <!-- Hero Section --> 
                     <section id="hero"> 
                        <div class="hero container"> 
                            <div> <h1>Rent-a-Bike<span></span></h1> 
                            <p class="heading_text"> Explore the new <b>Rent-a-Bike</b> 
                            scheme and find out how you can get involved <span></span></p>
                             <a href="#scroll-test" class="cta">Explore</a> 
                            </div>
                         </div>
                         </section>
                          <!-- End of Hero Section -->
                           <section id="quotes">
                             <!-- Slideshow container --> 
                             <div class="slideshow-container"> 
                                <!-- Full-width slides/quotes --> 
                                <div class="mySlides">
                                     <q>Cycling will reduce your chances of a heart attack by 20% </q> 
                                     <p class="author">- Adelle Davis</p> 
                                    </div> 
                                    <div class="mySlides"> 
                                        <q>60% of all cyclists say that they are more productive at work</q>
                                         <p class="author">- Euell Gibbons</p> 
                                        </div> 
                                    </div> 
                                </section>


                                <div class="myslides"> 
                                    <q>Cycling improves overall happiness by 64%</q> 
                                    <p class="author">- Gypsy Boots</p> 
                                    </div> <!-- Next/prev buttons -->
                                     <a class="prev" onclick="plusslides (-1)">&#10094;</a> 
                                     <a class="next" onclick="plusSlides (1)">&#10095;</a> 
                                     </div>
                                      <!-- Dots/bullets/indicators --> 
                                      <div class="dot-container">
                                         <span class="dot" onclick="currentSlide (1)">
                                         </span> <span class="dot" onclick="currentSlide (2)"></span> 
                                         <span class="dot" onclick="currentSlide (3)"></span>
                                          </div> 
                                          </section> 
                                          <script> var slideIndex = 1; showSlides(slideIndex);
function plusSlides(n) { showSlides(slideIndex += n); 
}

function currentSlide(n) { showSlides(slideIndex = n); 
}

function showSlides(n) { var i; var slides = document.getElementsByClassName("myslides"); 
var dots = document.getElementsByClassName("dot");
 if (n > slides.length) {slideIndex = 1} if (n < 1)
 {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++)
   { slides[i].style.display = "none"; 
   } for (i = 0; i < dots.length; i++) 
   { dots[i].className = dots[i].className.replace(" active", ""); 
   } slides[slideIndex-1].style.display = "block"; dots[slideIndex-1].className += " active"; } 
   </script> <Middle Section -->

<section id="projects"> 
    <div class="project container">
         <div class="projects-header">
             <h1 class="section-title" style="font-family: graphik">
              Get Cycling! <span></span>
            </h1> </div>
             <div class="all-projects">
                 <div class="project-item">
                     <div class="project-info" id="scroll-test"> <h1>
                        <b>Step 1</b></h1> <h2>Plan your route</h2> 
                        <p>You can't go cycling without knowing where you are going! Make sure to plan your route so you can enjoy your journey without getting lost. <br>
                        <b>HINT: </b>Google Maps is great for planning cycle routes</p>
                     </div>
                      <div class="project-image">
                         <img src="images/edit\_icon.png (2).png.png" alt="plant ing" style="width: 400px; margin-left: 100px; margin-bottom: 10px; height: 90%; margin-top: 20px;"> 
                        </div> 
                    </div> 
                    <div class="project-item">
                         <div class="project-info">
                             <h1><b>Step 2</b></h1>
                              <h2>Find your nearest bike rental shack</h2>
                               <p>You can find your nearest bike rental shack by clicking here, or going to the Ride page where you will find a map to help you locate all the bike shacks around Harrow.
                               </p> 
                            </div>
                             <div class="project-image"> 
                                <img src="images/map\_pin.png" alt="plant ing" style="width: 400px; margin-left: 75px;"> 
                            </div> 
                        </div> 
                        <div class="project-item">
                             <div class="project-info">
                                 <h1><b>Step 3</b></h1>
                                  <h2>Rent a bike</h2> 
                                  <p>Rent a bike for only <b>£2 </b> per hour. </p>
                                 </div> 
                                 <div class="project-image"> 
                                    <img src="images/money\_bag.png" alt="plant img" style="width: 420px; margin-left: 75px; margin-top: 10px; height: 95%"> 
                                </div>
                             </div>
                             <div class="project-item">
                                 <div class="project-info"> 
                                    <h1><b>Step 3</b></h1>
                                     <h2>Rent a bike</h2> 
                                     <p>Rent a bike for only
                                         <b>£2 </b> per hour. </p>
                                         </div> <div class="project-image"> 
                                            <img src="images/money\_bag.png" alt="plant img" style="width: 420px; margin-left: 75px; margin-top: 10px; height: 95%">
                                         </div> 
                                        </div>