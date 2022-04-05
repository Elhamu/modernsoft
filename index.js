
/*
width() => width bs;
innerWidth() => width + padding
outerWidth() => width + padding + border;
outerWidth(true) => width + padding + border + margin
*/

$("#options-container > i").click(function(){

        let opW = $("#options-box").outerWidth()


    if($("#options-container").css("left") == '0px' )
        {
    $("#options-container").animate({left:'-'+opW} , 1000)
            
        }
    else
        {
    $("#options-container").animate({left:'0'} , 1000)
            
        }

})


let lis = $("#options-container ul li");


let colors = ['orange' , 'lightgreen' , '#09c' , 'teal' , 'aqua']


for(let i= 0 ; i< colors.length ; i++)
    {
        lis.eq(i).css("backgroundColor" , colors[i])
    }

lis.click(function(){
    
    let color = $(this).css("backgroundColor");
    $("h1,h2,h3,h4, p").css("color" , color)
})


let imgs = $("#options-container  img");

imgs.click(function(){
    
    let imgSrc = $(this).attr("src");
    
    $("header").css("backgroundImage", `url(${imgSrc})`)
})


$("#plus").click(function(){
    
    $("p").css("fontSize","+=2px")
})

$("#minus").click(function(){
    
    $("p").css("fontSize","-=2px")
})



$(window).scroll( function(){


    let profileOffset = $("#profile").offset().top; // 600px
    
    if( $(window).scrollTop() > profileOffset - 50)
        {
    $("nav").css("backgroundColor","rgba(0,0,0,0.7)")        
        }
    else
        {
    $("nav").css("backgroundColor","transparent")        
            
        }
})




$("#btnUp").click(function(){

    $("html,body").animate({scrollTop:0} , 1000)
})



$(document).ready(function(){

    
   $("#loading").fadeOut(3000 , function(){
       
       $("body").css("overflow","auto")
   })
})






$("a").click(function(){
    
   let aHref =  $(this).attr("href");
    
    let profileOff = $(aHref).offset().top;
    $("html,body").animate({scrollTop:profileOff} , 1000)
    
})














