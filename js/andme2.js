/*
 _____  __  __  ____                __                   
/\___ \/\ \/\ \/\  _`\             /\ \                  
\/__/\ \ \ \_\ \ \ \/\_\    ___    \_\ \     __    ____  
   _\ \ \ \  _  \ \ \/_/_  / __`\  /'_` \  /'__`\ /',__\ 
  /\ \_\ \ \ \ \ \ \ \L\ \/\ \L\ \/\ \L\ \/\  __//\__, `\
  \ \____/\ \_\ \_\ \____/\ \____/\ \___,_\ \____\/\____/
   \/___/  \/_/\/_/\/___/  \/___/  \/__,_ /\/____/\/___/ 
                                                         
http://www.jhcodes.com/
Jesus Herrera - jesuxherrera@jhcodes.com
*/

$(document).ready(function() {
  $(window).load(function() {
      // Animacion Header
      setTimeout(function(){ $('#header').addClass('animated fadeInDown').fadeIn(); }, 1000);
      // Animacion Well
      setTimeout(function(){ $('.well').addClass('animated zoomIn').fadeIn(); }, 1000);
      // Loading Animation
  	  $('.loader-inner').removeClass('infinite jello').addClass('animated bounceOutUp');
      setTimeout(function(){ $('.loadingloader').addClass('animated zoomOut'); }, 1000);
      setTimeout(function(){ $('.loadingloader').fadeOut(); }, 500);
      // Menu links animation
      setTimeout(function(){ $('.profile-image').addClass('animated bounceInDown').fadeIn(); }, 1000);
      setTimeout(function(){ 
        $('.profile-image').removeClass('bounceInDown').addClass('flash');
        $('.name-me').addClass('animated flash').fadeIn();
      }, 2500);
      // Animacion titulo y menu
      setTimeout(function(){ 
        $('#name').addClass('animated flipInX').fadeIn(); 
        $('#menu').addClass('animated zoomInRight').fadeIn();
      }, 1000);
      setTimeout(function(){ $('#footer').addClass('animated fadeIn').fadeIn(1000); }, 1000);
    });
});

$("#name a").hover(
  function() {
    $(this).find("i").removeClass('rubberBand').addClass('tada');
  }, function() {
    $(this).find("i").removeClass('tada').addClass('rubberBand');
  }
);

$(".cube-service").hover(
  function() {
    $(this).find("i").removeClass('animated rubberBand').addClass('animated color-icon tada');
  }, function() {
    $(this).find("i").removeClass('color-icon tada').addClass('animated rubberBand');
  }
);


$("#menu a").click(function(event){
  event.preventDefault();
  var link = $(this).attr('href');

  $('#name').removeClass('flipInX').addClass('bounceOut'); 
  $('#menu').removeClass('zoomInRight').addClass('bounceOutLeft');
  $('.profile-image').removeClass('flash').addClass('zoomOut');
  $('.name-me').removeClass('flash').addClass('zoomOut');
  setTimeout(function(){$('.well').removeClass('zoomIn').addClass('rotateOutUpLeft'); }, 500);
  setTimeout(function(){ $('#header').removeClass('fadeInDown').addClass('animated fadeOutUp').fadeIn(); }, 500);
  setTimeout(function(){ $('#footer').removeClass('fadeIn').addClass('bounceOutUp'); }, 500);
  setTimeout(function(){ 
        window.location=link;
  }, 1000);
});