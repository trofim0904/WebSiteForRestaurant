let timeInter = 5000;
let imgWidth = "100%";
let imgHeight = "700px";
let doCycle = true;

let slideIndex = 1;
 
document.body.onload = function(){
    if(doCycle)
    sliderAuto();
}

showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);  
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}


function showSlides(n) {
    
    let slides = document.getElementsByClassName("item");
    let imgs = document.getElementsByClassName("item-img");
    let slider = document.getElementById("slider");
    
    slider.style.width = imgWidth;
    slider.style.height = imgHeight;

    for(let img of imgs){
        img.style.height = imgHeight;
    }
    
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
  
    
    for (let slide of slides) {
        slide.style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";    
}


function sliderAuto() {          
   setTimeout(function () {    
      nextSlide()          
      sliderAuto();             
   }, timeInter)
}
