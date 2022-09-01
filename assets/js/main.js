$(document).ready(function(){
    $('.menuprin .botones li:has(ul)').click(function(event){

        if($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
            $(".menuprin .botones .huevos .pito li ul").slideUp();
            $(".menuprin .botones .huevos .pito li").removeClass('activado');
        } else {
            $(".menuprin .botones .huevos .pito").slideUp();
            $(".menuprin .botones .huevos").removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        };
    });

    $('.menuprin .botones .gatos li:has(ul)').click(function(e){

        if($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        } else {
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        };
    });
})