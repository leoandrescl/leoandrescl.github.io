$(document).ready(function(){
    var banner = {
        father: $('#banner'),
        nroSlides: $('#banner').children('.slide').length,
        position: 1
    }
    
    var info = {
        father: $('#info'),
        nroSlides: $('#info').children('.slide').length,
        position: 1
    }
    
    banner.father.children('.slide').first().css({
        'left': 0
    });
    
    info.father.children('.slide').first().css({
        'left': 0
    });
    
    
    var heightContainer = function(){
        var heightWindow = $(window).height();

        if(heightWindow <= $('#container').outerHeight() + 200){
            $('#container').css({
                'height' : ''
            });
        } else {
            $('#container').css({
                'height' : heightWindow + 'px'
            });
        }
    }
    
    var heightBanner = function(){
        var height = banner.father.children('.slide').outerHeight();
        
        banner.father.css({
           'height' : height + 'px' 
        });
    }
    
    var heightInfo = function(){
        var height = info.father.children('.active').outerHeight();
        
        info.father.animate({
           'height' : height + 'px' 
        });
    }

    
    heightBanner();
    heightInfo();
    heightContainer();
    
    $(window).resize(function(){
        heightBanner(); 
        heightInfo();
        heightContainer();
    });
    
});