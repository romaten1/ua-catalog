
$(function(){
    var margin = 0;
    var count=$('div.slider-content-item').length -1;
    var itemWidth=$('div.slider-content-item').outerWidth(true);
    var slider=$('.slider-content');
    var index=0;


    //Pressing the navigation buttons
    $('.switchers a').click(function(ev){
    ev.preventDefault();
    var switchersIndex=$('.switchers a').index(this);
    if (switchersIndex!=index){
    Goto(switchersIndex);
    };
    });

    function Goto(slideNumber){
    margin = -itemWidth*slideNumber;
    slider.css('margin-left', margin);
    $('.switchers li a').removeClass('active');
    $('.switchers li a').eq(slideNumber).addClass('active');
    index=slideNumber;
    };
    //automatic scrolling
    function ShowNext(){
    if (index < count){
    Goto(index+1);
    } else {
    Goto(0);
    }
    };
    var intervalID = setInterval(ShowNext, 3000);
    $('.slider').hover(function(){
    clearInterval(intervalID);
    }, function(){
    intervalID = setInterval(ShowNext, 3000);
    });


    });
