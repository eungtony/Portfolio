$(document).ready(function(){
if (window.matchMedia("(max-device-width: 900px)").matches){
  $('*').removeClass("wow");
  $('navbar').removeClass("sticky");
}
else {

}
});

 new WOW().init();
 

 $(window).scroll(function() {
if ($(this).scrollTop() > 10){  
    $('.navbar').addClass("sticky");
  	$('.navbar-nav>li>a').addClass("sticky");
  	$('.left').addClass("sticky");
    $('')
  }
  else{
    $('.navbar').removeClass("sticky");
    $('.navbar-nav>li>a').removeClass("sticky");
    $('.left').removeClass("sticky");
  }
});