<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gochilas</title>
        <style>
            

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container1 {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text1 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext1 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot1 {
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
.fade1 {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


            body{
                background-color: white;
                color: black;
                width: 100%;
            }
            .sideNav a{
                text-decoration-line: none;
                color: black;
            }
            .home{
               background-color: aqua; 
               width: 100px;
            }
            .sideNav{
                
                
            }
            
            
          * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
 cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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
  cursor: pointer;
  height: 30px;
  width: 30px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 600px) {
    body{
    background-size: cover;
    height: auto;
}

}   
        </style>
    </head>
    <body>
        <div style="background-image:url(images/IMG_7688.JPG); width: 100%; background-size:100% 100%; height: 1500px; background-repeat:no-repeat; 
             ">
        <br/>
            <div>
            <div>
            <h1 style="border: 1px white solid; border-radius: 9px; margin-left:20px; width:300px; color: white; text-align: center;">The Brand Guild</h1>
            </div>
            </div>
           
        </div>
        <div style="width: 100%;">
            <hr style="color: black;"/>
            <br/>
        </div>
        
        
        <div class="slideshow-container" style="width: 100%;">

<div class="mySlides fade1">
  <div class="numbertext1">1 / 10</div>
  <img src="images/13.jpg" style="width:100%">
  <div class="text1">Caption Text</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext1">2 / 10</div>
  <img src="images/14.jpg" style="width:100%">
  <div class="text1">Caption Two</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext1">3 / 10</div>
  <img src="images/2.jpg" style="width:100%">
  <div class="text1">Caption Three</div>
</div>

            
<div class="mySlides fade1">
  <div class="numbertext1">4 / 10</div>
  <img src='images/2.jpg'
       style="width:100%">
  <div class="text1">Caption Four</div>
</div>
            
            
<div class="mySlides fade1">
  <div class="numbertext1">5 / 10</div>
  <img src="images/4.jpg" style="width:100%">
  <div class="text1">Caption five</div>
</div>
            
<div class="mySlides fade1">
  <div class="numbertext1">6 / 10</div>
  <img src="images/5.jpg" style="width:100%">
  <div class="text1">Caption six</div>
</div>
            
<div class="mySlides fade1">
  <div class="numbertext1">7 / 10</div>
  <img src="images/6.jpg" style="width:100%">
  <div class="text1">Caption Seven</div>
</div>
            
<div class="mySlides fade1">
  <div class="numbertext1">8 / 10</div>
  <img src="images/7.jpg" style="width:100%">
  <div class="text1">Caption Eight</div>
</div>
            
<div class="mySlides fade1">
  <div class="numbertext1">9 / 10</div>
  <img src="images/9.jpg" style="width:100%">
  <div class="text1">Caption Nine</div>
</div>
            
<div class="mySlides fade1">
  <div class="numbertext1">10 / 10</div>
  <img src="images/1_1.jpg" style="width:100%">
  <div class="text1">Caption Ten</div>
</div>
</div>
<br>

<div style="text-align:center; width: 100%;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
   <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
   <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
   <span class="dot"></span>
</div>
        
        
 










        
        
        
        <div style="text-align: center; width: 100%;">
            <br/><br/>
            <button style="background-color: blue; color: white; width:200px; border-radius: 9px; height:50px;">Learn More</button>
        </div>
        <div style="text-align: center; width: 100%;">
            <h3>We're world-class</h3>
            <h3>spirits storytellers.</h3>
            <br/><br/>
            <h3>We work with the most innovative brands in whine & <br/> spirits.</h3>
        </div>
        <div style="width: 100%;">
            <br/><br/>
             <marquee>
            <div style='padding-left:50px; padding-right: 50px; display:grid; grid-template-columns:auto auto auto auto auto auto auto; gap:50px;'>
                
            <div>
                <img src='images/12.jpg' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/13.jpg' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/14.jpg' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/10.jpg' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/7.jpg' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/IMG_7691.JPG' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
                     <div>
                         <img src='images/IMG_7690.JPG' style='height: 500px; width:600px; border-radius:10px;'/>
            </div>
               
            </div>
                  </marquee>
            <br/><br/><br/>
        </div>
        <div style="border-radius:10px; width: 100%;
             background-color: midnightblue; color: white; padding-left: 30px; padding-right:30px;">
            <br/><br/>
            <div style='width:100%;'>
                <br/><br/>
                <p>PR SPOTLIGHT</p>
                <br/>
                <h3>Uncle Nearest</h3>
                <h3>Premium Whiskey</h3>
                <br/>
                <p>The Brand Guild has been the PR partner to Uncle
                </p>
                <p>Nearest since the start of their national launch in</p>
                <p>2018.We have meticulously work to tell the story</p>
                <p>of Nearest Green,the formerly enslaved man for</p>
                <p>whom the brand is named,and the all-female</p>
                <p>leadership team breaking glass ceilings in the spirits</p>
                <p>industry.</p>
                <br/><br/>
                <p>Now the fastest-growing whiskey brand in U.S.</p>
                <p>history, we have brought media to their Tennessee</p>
                <p>distillery, and brought the award-winning whiskey</p>
                <p>and founder/CEO Fawn Weaver to the media</p>
                <p>through a continous stream of press activations-</p>
                <p>all with the focus on storytelling around this award- </p>
                <p>winning brand that preserves a legacy and honors</p>
                <p>the spirit's past.</p>
                <br/><br/>
            </div>
            <div style='text-align: center; background-color: black; border-radius: 20px; width: 100%; padding-left:100px; padding-right:100px; border:1px white solid;'>
                <br/><br/>
                <h3>The Brand Guild isn't just</h3> 
                <h3>our PR agency,they are an </h3>
                <h3>extension of our core team,</h3>
                <h3>and you'd be hard pressed to</h3>
                <h3>figure out where our team</h3>
                <h3>ends and theirs begins.</h3>
                <br/>
                <img src='images/1.JPG' style="border-radius: 50%; "/> 
                <br/><br/>
                <p>Fawn Weaver,Cofounder & CEO</p>
                <P>Uncle Nearest Premium Whiskey</P>
                <br/><br/><br/>
            </div>
             <div style=" text-align: center; width: 100%;">
                 <br/><br/>
                 <img src='images/tim3.svg' style="height:500px; border-radius: 50%;"/>
            
        </div>
            <div style='text-align: center; width: 100%;'>
                <h3>Why we were named</h3> 
                <h3>Whisky Agency of the</h3>
                <h3>Year:</h3>
            </div>
                <div style='text-align: center; background-color:white; width: 100%; color: midnightblue; border-radius: 20px;  padding-left:100px; padding-right:100px; border:1px white solid;'>
                <br/><br/>
                <h3>Earned media</h3>
                <h3>to date:</h3>
                <h3>27B +</h3>
                <h3>impressions</h3>
                <br/><br/><br/>
            </div>
                 <div style='text-align: center; background-color:white; margin-top:50px; width: 100%; color:black; border-radius: 20px; 
                      padding-left:100px; padding-right:100px; border:1px white solid;'>
                <br/><br/>
                <p>Groundbreaking new product launches,</p>
                  <p>including eight new whiskeys,the opening of</p>
                    <p>the Nearest Green Distillery,and their</p>
                      <p>industry-transforming initiatives-the</p>
                        <p>Nearest and jack Advercement Initiative</p>
                          <p>and the $50 million Uncle Nearest Venture</p>
                          <p>Fund</p>
                <br/><br/><br/>
            </div>
            
            
             <div style='text-align: center; background-image:url(images/IMG_7694.JPG); width: 100%;  background-size:100% 100%; height: 1500px;
                  background-repeat:no-repeat; margin-top: 50px; 
                  color:white; border-top-left-radius:20px; border-top-right-radius: 20px;  padding-left:100px; padding-right:100px;   border:1px white solid;'>
                 
             </div>
                <div style="background-color: white; width: 100%; color: black; 
                     border-bottom-right-radius:9px; border-bottom-left-radius:9px;  padding-left:100px; padding-right:100px;">
                    <br/><br/>
                <p>Launch of CEO Fawn Weaver's book</p>
                <p>Love & Whiskey,to 2 on the New York</p>
                    <p>Times Best Sellers List</p>
                    <br/><br/>
                </div> 
             
            
          
        
              <div style='text-align: center; background-image:url(images/IMG_7695.JPG); margin-top:50px; background-repeat:no-repeat; 
                  background-size:100% 100%; height: 1500px; color:white; 
                   border-radius: 20px;  padding-left:100px; padding-right:100px; width: 100%; border:1px white solid;'>
                  <div style="margin-top:50%; width: 100%;">
                <h3>The New York Times</h3>
                <br/>
                  <h3>A Black Whiskey Enterpreneur Will Help</h3>
                    <h3>Bankroll Other Like Her</h3>
                    <br/><br/>
                      <h3>Read More </h3>
                        
                  </div>
            </div>
              <div style='text-align: center;background-image:url(images/IMG_7696.JPG); margin-top:50px;  background-repeat:no-repeat;
                   background-size:100% 100%; height: 1500px; color:white;
                   border-radius: 20px;  padding-left:100px; width: 100%; padding-right:100px;  border:1px white solid;'>
                  <div style="margin-top: 50%; width: 100%;">
                <h3>Forbes</h3>
                <br/>
                  <h3>How To Build A Whiskey Unicorn </h3>
                    
                    <br/><br/>
                      <h3>Read More </h3>
                  </div>  
                
            </div>
              <div style='text-align: center; background-image:url(images/IMG_7697.JPG); background-size:100% 100%; height: 1500px;
                   background-repeat:no-repeat; margin-top:50px; 
                   color:red; border-radius: 20px; width: 100%;  border:1px white solid;'>
               
                  <div style="margin-top: 50%; width: 100%;">
                <h3>Marie Claire</h3>
                <br/>
                  <h3>Fawn Weaver Is All About the Whiskey</h3>
                    <h3>Business</h3>
                    <br/><br/>
                      <h3>Read More </h3>
                   
                  </div>
            </div>
              <div style='text-align: center; background-image:url(images/10.jpg); margin-top:50px; background-repeat:no-repeat;
                   background-size:100% 100%; height: 1500px;color:yellow;
                   border-radius: 20px;  padding-left:100px; width: 100%; padding-right:100px; border:1px white solid;'>
                 
                  <div style="margin-top: 50%; width: 100%;">
                <h3>The Today Show</h3>
                <br/>
                  <h3>A Black Whiskey Enterprenuer Will Help</h3>
                    <h3>Bankroll Other Like Her</h3>
                    <br/><br/>
                      <h3>Read More </h3>
                 </div> 
               
            </div>
            
              <div style='text-align: center; background-image:url(images/image-resizer.jpg); margin-top:50px;color:yellow; background-repeat:no-repeat;
                   background-size:100% 100%; height: 1500px; width: 100%;
                   border-radius: 20px;  padding-left:100px; padding-right:100px; border:1px white solid;'>
                  
                <div style='margin-top:50%; width: 100%;'>
                <h3>Oprah.Com</h3>
                <br/>
                  <h3>Oprah's Favorite Things</h3>
                    
                    <br/><br/>
                      <h3>View Oprah's List</h3>
              </div>  
               
            </div>
              <div style='text-align: center; background-image:url(images/tim.webp); margin-top:50px; color:white; background-repeat:no-repeat;
                  background-size:100% 100%; height: 1500px;
                   border-radius: 20px;  padding-left:100px; width: 100%; padding-right:100px; border:1px white solid;'>
               <br/><br/><br/><br/><br/>
               <div style='margin-top:200px; width: 100%;'>
                <h3>NPR</h3>
                <br/>
                  <h3>How I Built This- Uncle Nearest Premium</h3>
                    <h3>Whiskey % Fawn Weaver</h3>
                    <br/><br/>
                      <h3>Listen Here </h3>
               </div>  
                <br/><br/><br/>
            </div>
             <div style='text-align: center; background-image:url(images/tim2.webp); margin-top:50px; color:white; background-repeat:no-repeat; 
                 background-size:100% 100%; height: 1500px;
                  border-radius: 20px;  padding-left:100px; width: 100%; padding-right:100px; border:1px white solid;'>
               
               <div style='margin-top:50%; width: 100%;'>
                <h3>Inc.com</h3>
                <br/>
                  <h3>This Founder Is Helping Essential Workers</h3>
                    <h3>and Black Business Owners-and Making </h3>
                    <h3>Inspired Whiskey</h3>
                    <br/><br/>
                      <h3>Read More</h3>
               </div>   
                
            </div>
           <br/>
           <hr style="color: white; width: 100%;"/>
            <br/><br/>
        </div>
        <div style="padding-left:70px; padding-right:70px;width: 100%;">
            <div style="padding-left: 20px; padding-right: 20px; width: 100%;">
            
            <h3>Four Roses</h3>
        </div>

        <div style='text-align: center; background-image:url(images/4Roses7.jpg-p-1080.webp);  color:white; background-repeat:no-repeat;
            background-size:100% 100%; height: 1500px;
                  border-radius: 20px; width: 100%; border:5px black solid;'>
            
        </div>
        </div>    
            
                 <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
        <div style="width: 100%;">
            <br/>
             <span style="color: red;">CREATIVE SPOTLIGHT</span>
             
             <h3>DC Brau &AMP; Old Time Lager</h3>
        </div>

        <div style='text-align: center; width: 100%; background-image:url(images/old-time-cans.png);  color:white; background-repeat:no-repeat;
             background-size:100% 100%; height: 1500px;
                  border-radius: 20px;  border:5px black solid;'>
            
        </div>
        </div>
        
                 <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
                     <div style="width: 100%;">
            <br/>
             <span style="color:red;">SOCIAL MEDIA SPOTLIGHT</span>
             
             <h3>Casa Obsidiana</h3>
        </div>

        <div style='text-align: center; background-image:url(images/casa-obsidiana-social-p-1080.jpg);  background-repeat:no-repeat; color:white; 
            background-size:100% 100%; height: 1500px;
                  border-radius: 20px; width: 100%; border:5px black solid;'>
            
        </div>
        </div>
<div style='text-align: center; width: 100%;'>
    <h3>WHAT OUR CUSTOMERS SAYS</h3>
</div>
           
<div>
   
 

    <div class="slideshow-container1" style="width: 100%;">

    <div class="mySlides fade" >
  <div class="numbertext">1 / 6</div>
  <div class="img" style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/15.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>i'm proud to come across</p>
      <p>the brand guild</p>
      <br/><br/>
  </div>
  
  <div class="text">Caption one</div>
</div>

    <div class="mySlides fade" style="height:100px;">
  <div class="numbertext">2 / 6</div>
  <div class="img"style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/17.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>the brandguild is the best in</p>
      <p>spirit manufactory</p>
      <br/><br/>
  </div>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
   <div style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/18.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>Win originality and quality</p>
      <p>is maintain</p>
      <br/><br/>
  </div>
  <div class="text">Caption Three</div>
</div>
    
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
   <div style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/16.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>I thank God for making</p>
      <p>to come across the brandguild</p>
      <br/><br/>
  </div>
  <div class="text">Caption Three</div>
</div>
    
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
   <div style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/20.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>Brand guild is the</p>
      <p>best in All</p>
      <br/><br/>
  </div>
  <div class="text">Caption Three</div>
</div>
    
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
   <div style="width:100%; text-align: center; background-color:black; color: white;">
      <br/><br/>
      <img src="images/15.jpg" style="width:200px; height:50px; border-radius:50%;"/>
      <br/><br/>
      <p>We work well</p>
      <p>lets do it again</p>
      <br/><br/>
  </div>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
    
    
    
    
    <br/><br/>
    
    <div style="text-align:center" style="margin-top: 20px; width: 100%;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>
    
</div>

        <br/><br/>
        <div style="text-align: center; width: 100%;">
            <h3>Our Leadership Team</h3>
        </div>
        <br/>
                  <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
        <div>
            <br/>
            <h3>Amy Clark</h3>
             <span style="color:red;">EXECUTIVE VICE PRESIDENT . PR</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/amy.png );  color:white; background-repeat:no-repeat; 
            background-size:100% 100%; height: 1500px;
                  border-radius: 20px; width: 100%;  border:5px black solid;'>
            
        </div>
        </div>
                     <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
                         <div style="width: 100%;">
            <br/>
            <h3>Giselle -Marie Roig</h3>
             <span style="color: red;">VICE PRESIDENT,PR, FOOD AND BEVERAGE</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/gisel.png );  background-repeat:no-repeat; color:white;
            background-size:100% 100%; width: 100%; height: 1500px;
                  border-radius: 20px;  border:5px black solid;'>
            
        </div>
        </div>
                   <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
        <div style="width: 100%;">
            <br/>
            <h3>Lance Hayden</h3>
             <span style="color: red;"> VICE PRESIDENT CREATIVE</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/lance.png );  color:white; background-repeat:no-repeat; 
             background-size:100% 100%; width: 100%; height: 1500px;
                  border-radius: 20px;  border:5px black solid;'>
            
        </div>
        </div>
                     <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
                         <div style="width: 100%;">
            <br/>
            <h3>Jsssica Davis</h3>
             <span style="color: red;"> SENIOR PR DIRECTOR</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/jess.png );  background-repeat:no-repeat; color:white; 
            background-size:100% 100%; height: 1500px;
                  border-radius: 20px; width: 100%; border:5px black solid;'>
            
        </div>
        </div>
                      <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
                          <div style="width: 100%;">
            <br/>
            <h3>Katina Stevenson</h3>
             <span style="color: red;">MARKETING DIRECTOR</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/katina.png );  color:white; background-repeat:no-repeat;
            background-size:100% 100%; width: 100%; height: 1500px;
                  border-radius: 20px;  border:5px black solid;'>
            
        </div>
        </div>
                      <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
                          <div style="width: 100%;">
            <br/>
            <h3>Abby Colby</h3>
             <span style="color: red;"> SENIOR SOCIAL MEDIA DIRECTOR</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/abby.png );  color:white; background-repeat:no-repeat; background-size:100%; height:2800px;
                  border-radius: 20px;  width: 100%; border:5px black solid;'>
            
        </div>
        </div>
                      <div style="padding-left:70px; width: 100%; padding-right:70px; margin-top: 50px;">
        <div style="width: 100%;">
            <br/>
            <h3>Amanda Katz</h3>
             <span style="color: red;"> SENIOR PR MANAGER</span>
             <br/><br/>
             
        </div>

        <div style='text-align: center; background-image:url(images/amanda.png);  background-repeat:no-repeat; color:white;
             background-size:100% 100%;width: 100%;  height: 1500px;
                  border-radius: 20px;  border:5px black solid;'>
            
        </div>
        </div>
        <br/><br/>

        


        
        <div style="background-color: black; width: 100%; color: white; text-align: center;">
            <br/><br/><br/><br/>
            
<h3>We turn brands </h3>
<h3>into cultural movements.</h3>

<p>Our public relations, marketing, events and strategy teams are each led by some of the foremost experts 
    in their fields. Together, we're an <br/>integrated team of creators and storytellers who bring seasoned experience and 
relentless passion to the table. We have a true spirit of<br/> collaboration—both across
our teams and with our clients—with which we build strategies that get our clients measurable results.</p>
<br/><br/>
<button style="width:200px; height: 50px; border-radius:9px;">Contact Us Today</button>
<br/><br/><br/><br/>
        </div>
        
           <div style=" text-align: center; width: 100%;">
                 <br/><br/>
                 <img src='images/tim3.svg' style="height:500px; border-radius: 50%;"/>
            <br/><br/>
        </div>
        <h3 style="padding-left: 30px; width: 100%;">BEST WORK OF THE YEAR</h3>
        <div style="background-color:darkgray; width: 100%;border-radius: 9px; height:20px;">
            <div style="width:95%; background-color: red; text-align: center; color: white; ">90%</div>
        </div>
        <br/><br/>
         <div style="background-color: darkgray; width: 100%; border-radius: 9px; height:20px;">
            <div style="width:90%; background-color: red; text-align: center; color: white; ">85%</div>
        </div>
        <br/><br/>
         <div style="background-color:darkgray; width: 100%; border-radius: 9px; height:20px;">
            <div style="width:85%; background-color: red; text-align: center; color: white; ">80%</div>
        </div>
        <br/><br/>
         <div style="background-color: darkgray; width: 100%; border-radius: 9px; height:20px;">
            <div style="width:80%; background-color: red; text-align: center; color: white; ">75%</div>
        </div>
        <br/>
        <hr style="color: black; width: 100%;"/>
       
        <p style="padding-left:10px;">© 2024 The Brand Guild. All rights reserved.</p>
         <br/>
         <div style='display: grid; grid-template-columns:auto auto; width: 100%;'>
         <div style="padding-left:50px;">
             <span><img src="images/face.png" style="width:50px; height:20px; border-radius:50px;"/></span>
             <span><img src="images/whatsap.jpg" style="width:50px; height:20px; border-radius:50px;"/></span>
             <span><img src="images/insta.jpg" style="width:50px; height:20px; border-radius:50px;"/></span>
             <span><img src="images/tiktok.png" style="width:50px; height:20px; border-radius:50px;"/></span>
             <span><img src="images/twiter.png" style="width:50px; height:20px; border-radius:50px;"/></span>
         </div>
         <div>
         <h4>Coded by Edu governor/ezepuo student</h4>
         </div>
    </div>
         <br/>
         
         <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </body>
    </html>
 