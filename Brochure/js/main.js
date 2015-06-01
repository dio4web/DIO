$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.fadeInBlock').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });

    $(function() {
        $(window).scroll( function(){
        
           
            $('.fadeInBlock2').each( function(i){
                
                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
                bottom_of_window = bottom_of_window - 100;  
              
                if( bottom_of_window > bottom_of_object ){
                    
                    $(this).animate({'opacity':'1'},500);
                        
                }
            }); 
        
        });
    });

    $(function() {
        $(window).scroll( function(){
        
           
            $('.fadeInBlock3').each( function(i){
                
                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
                bottom_of_window = bottom_of_window - 200;  
              
                if( bottom_of_window > bottom_of_object ){
                    
                    $(this).animate({'opacity':'1'},500);
                        
                }
            }); 
        
        });
    });

    $(function() {
        $(window).scroll( function(){
        
           
            $('.fadeInBlockEarly').each( function(i){
                
                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
                bottom_of_window = bottom_of_window + 350;  
              
                if( bottom_of_window > bottom_of_object ){
                    
                    $(this).animate({'opacity':'1'},500);
                        
                }
            }); 
        
        });
    });

});