  
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       
                $AutoPlay: true,                                     
                $Idle: 4000,                            
                $PauseOnHover: 1,                    
                $ArrowKeyNavigation: true,                     
                $SlideEasing: $JssorEasing$.$EaseOutQuint,         
                $SlideDuration: 800,                               
                $MinDragOffsetToSlide: 20,                          
                $SlideSpacing: 0,                           
                $Cols: 1,                                  
                $ParkingPosition: 0,                                 
                $UISearchMode: 1,                                    
                $PlayOrientation: 1,                                 
                $DragOrientation: 1,                               
              
                $BulletNavigatorOptions: {                          
                    $Class: $JssorBulletNavigator$,                 
                    $ChanceToShow: 2,                               
                    $AutoCenter: 1,                                 
                    $Steps: 1,                                      
                    $Rows: 1,                                      
                    $SpacingX: 8,                                   
                    $SpacingY: 8,                                   
                    $Orientation: 1,                                
                    $Scale: false                                   
                },

                $ArrowNavigatorOptions: {                            
                    $Class: $JssorArrowNavigator$,                  
                    $ChanceToShow: 1,                               
                    $AutoCenter: 2,                                 
                    $Steps: 1                                        
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

         
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
          
        });
 