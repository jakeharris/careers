<head>
            <?= stylesheet_link_tag() ?>
</head>
<body>
<div class="container">
   <div id="content-slider">
      <div id="slider">  <!-- Slider container -->
         <div id="mask">  <!-- Mask -->

         <ul>
         <li id="first" class="firstanimation">  <!-- ID for tooltip and class for animation -->
         <a href="#"> <img src="assets/major.png" alt="Cougar"/> </a>
         <div class="tooltip"> <h1>Cougar</h1> </div>
         </li>
 
         <li id="second" class="secondanimation">
         <a href="#"> <img src="assets/using.png" alt="Lions"/> </a>
         <div class="tooltip"> <h1>Lions</h1> </div>
         </li>

         <li id="third" class="thirdanimation">
         <a href="#"> <img src="assets/major.png" alt="Snowalker"/> </a>
         <div class="tooltip"> <h1>Snowalker</h1> </div>
         </li>

         <li id="fourth" class="fourthanimation">
         <a href="#"> <img src="assets/using.png" alt="Howling"/> </a>
         <div class="tooltip"> <h1>Howling</h1> </div>
         </li>

         <li id="fifth" class="fifthanimation">
         <a href="#"> <img src="assets/major.png" alt="Sunbathing"/> </a>
         <div class="tooltip"> <h1>Sunbathing</h1> </div>
         </li>
         </ul>

         </div>  <!-- End Mask -->
         <div class="progress-bar"></div>  <!-- Progress Bar -->
      </div>  <!-- End Slider Container -->
   </div>
</div>
</body>