
// section one
let opW = $("#options-box").outerWidth()
 $(".fa-times-circle").click(function(){
        $("#options-container").animate({left:'-'+ opW} , 1000);
         $(".fa-sliders-h").show(1000)

})


$("#options-container .fa-sliders-h").click(function(){
 
          $("#options-container").animate({left:'0'} , 1000)
               $(".fa-sliders-h").hide(1000)
       
    
 })



$("#options-box a").click(function(){
    let Href = $(this).attr("href");
    let scrollSection = $(Href).offset().top;
    $("html,body").animate({scrollTop : scrollSection},1000)
})
//section two
$("div:first").css("display","block")
$("h3").click(function(){
    $(this).next().slideToggle(1000);
    $(".test").not($(this).next()).slideUp(1000)
    
})
//section three


var end = new Date('12/30/2021 10:37:20 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

             clearInterval(timer);
            document.getElementById('days').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('days').innerHTML = days + 'days ';
        document.getElementById('hours').innerHTML = hours + 'hrs ';
        document.getElementById('minutes').innerHTML = minutes + 'mins ';
        document.getElementById('seconds').innerHTML = seconds + 'secs';
    }

    timer = setInterval(showRemaining, 1000);



//section four
var max =100;
$("textarea").keyup(function(){
    var length = $(this).val().length;
    var text = max - length;
    if(text <= 0){
        $("#char").text("your available character finished");


    }else{
        $("#char").text(text)
    }

})


$(window).scroll( function(){


    let sectiontwo = $("#acc").offset().top; // 600px
    
    if( $(window).scrollTop() > sectiontwo - 50)
        {
        $("#btnUp").show(1000);       
        }
    else
        {
        $("#btnUp").hide(1000);       
            
        }
})

$("#btnUp").click(function(){
    $("html,body").animate({scrollTop: 0},1000)
})