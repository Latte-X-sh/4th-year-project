$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
     loop:true,
     margin:45,
     nav:true,
     responsive:{
         0:{
             items:1,
             nav:true
         },
         600:{
             items:1,
             nav:true
         },
         1000:{
             items:1,
             nav:false,
             loop:false
         },
         1200:{
            items:1,
            nav:false,
            loop:false
        }
     }
 });
  });