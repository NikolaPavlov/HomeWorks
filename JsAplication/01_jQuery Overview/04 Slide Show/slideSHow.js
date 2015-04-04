$(document).ready(function() {

    var elementWidth = 720,
        animationSpeed = 1000,
        nextSlideTimeInterval = 5000,
        currSlide = 1,
        $sliderContainer = $('#slides')
        $slides = $('.slide');

   startSLide = setInterval(function  () {
       $sliderContainer.animate({'margin-left': '-=' + elementWidth},
            animationSpeed, function  () {
                if(++currSlide === $slides.length){
                    currSlide = 1;
                    $sliderContainer.css('margin-left' , 0);
                }
            });
   }, nextSlideTimeInterval);
   startSLide();
});