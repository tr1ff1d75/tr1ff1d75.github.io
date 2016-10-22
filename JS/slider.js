var slideWidth=window.innerWidth;
var sliderTimer;
$(function(){
$('.slidersheets').width($('.slidersheets').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,3000);
});

function nextSlide(){
    var currentSlide=parseInt($('.slidersheets').data('current'));
    currentSlide++;
    if(currentSlide>=$('.slidersheets').children().size())
    {
        currentSlide=0;  
        $('.slidersheets').animate({left: -currentSlide*slideWidth},0).data('current',currentSlide);
    }
    $('.slidersheets').animate({left: -currentSlide*slideWidth},500).data('current',currentSlide);

}