/*
Creado:
http://www.jhcodes.com/
Jesus Herrera - jesuxherrera@jhcodes.com
Modificado:
http://www.sofroscorp.com/
Pablo Rodriguez - pablordzmz@yandex.com
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

function fn_ir(value) {

switch (value) {
  case 'jpklopmia':
location.href="http://jpklop-mia.blogspot.mx/";
    break;
    case 'sofrosblog':
location.href="http://sofroscorp.com/blog/";
      break;
  default:

}
}
