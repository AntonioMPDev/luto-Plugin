jQuery(document).ready(function( $ ){
  
    var draggable = $('#luto-drg'); //element 

 draggable.on('mousedown', function(e){
 var dr = $(this).addClass("drag").css("cursor","move");
 height = dr.outerHeight();
 width = dr.outerWidth();
 ypos = dr.offset().top + height - e.pageY,
 xpos = dr.offset().left + width - e.pageX;
 $(document.body).on('mousemove', function(e){
     var itop = e.pageY + ypos - height;
     var ileft = e.pageX + xpos - width;
     if(dr.hasClass("drag")){
         dr.offset({top: itop,left: ileft});
     }
 }).on('mouseup', function(e){
         dr.removeClass("drag");
     });
 });
});
