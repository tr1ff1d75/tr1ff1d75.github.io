var slideWidth=window.innerWidth;
var sliderTimer;
$(function(){
$('.slidewrapper').width($('.slidewrapper').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,3000);
});

function nextSlide(){
    var currentSlide=parseInt($('.slidewrapper').data('current'));
    currentSlide++;
    if(currentSlide>=$('.slidewrapper').children().size())
    {
        currentSlide=0;  
        $('.slidewrapper').animate({left: -currentSlide*slideWidth},0).data('current',currentSlide);
    }
    $('.slidewrapper').animate({left: -currentSlide*slideWidth},500).data('current',currentSlide);

}