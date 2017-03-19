(function($) {
    $(document).ready(function() {

        var md = new MobileDetect(window.navigator.userAgent);
        var device = (md.phone()) ? 'mobile' : 'other';        

        var slide_dimensions = {
            popularCategories: {
                mobile : {
                    width: 142,
                    height: 142,
                    margin: 8
                },
                other : {
                    width: 218,
                    margin: 13                    
                }
            },
            hotDeals: {
                mobile : {
                    width: 130,
                    height: 130,
                    margin: 28
                },
                other : {
                    width: 180,
                    margin: 20                    
                }
            },            
            moreCategories: {
                mobile : {
                    width: 157,
                    margin: 8
                },
                other : {
                    width: 185,
                    margin: 10                    
                }
            },                        
        }

        // Turn all select dropdowns into custom select for styling
        $(".select").selectmenu({
        	position: { my : "left top", at: "left bottom-1" }
        });

        $('.logo-section .categories.burger-menu-icon').on('click', function(){
            $('body').toggleClass('directory-menu-open');
            $('.main-nav-group').toggle(500);
        });

        $(window).resize(function(){
        	$(window).trigger('orientationchange');
        });

        $(window).scroll(function(x, y){
        	var heightOffset = 0;
        	if(window.innerWidth > 1024) {
        		heightOffset = 40;
        	}
        	var header = document.getElementsByTagName('header');
        	if(window.scrollY <= heightOffset) {        		
        		header[0].setAttribute('style', 'top:' + (0 - window.scrollY) + 'px');
        	} else {
        		header[0].setAttribute('style', 'top: -' + heightOffset + 'px');
        	}
        });

        $('.toggle-menu').on('click', function(e){
        	e.preventDefault();

        	$(this)
        		.toggleClass('menu-active')
        		.closest('div')
        			.css({"position": "relative"})
    				.find('.drop')
    				.toggle(300);
        });

        $('.hide-message').on('click', function(){
        	$(this).closest('div').slideToggle();
        });

        $('#main-homepage-slider').flexslider({
        	animation: "slide",
        	itemWidth: "100%",
        	controlNav: false
        });

        console.log(slide_dimensions.popularCategories[device].width);

		$('#popular-categories-slides').flexslider({
		    animation: "slide",
		    animationLoop: false,
            itemWidth: slide_dimensions.popularCategories[device].width,
		    itemHeight: slide_dimensions.popularCategories[device].height,
		    itemMargin: slide_dimensions.popularCategories[device].margin,		    
		});      

        if(!device == 'mobile') {
    		$('#deals-slides').flexslider({
    			animation: "slide",
    		    itemWidth: 335,
    		    itemMargin: 13,
    		    controlNav: false			
    		});  		
        }

		$('#hot-deals-slides').flexslider({
			animation: "slide",
		    itemWidth: slide_dimensions.hotDeals[device].width,
		    itemMargin: slide_dimensions.hotDeals[device].margin	
		});  		

		$('#new-arrivals-slides').flexslider({
			animation: "slide",
		    itemWidth: 180,
		    itemMargin: 20	
		});  

		$('#more-categories-slider').flexslider({
			animation: "slide",
			itemWidth: slide_dimensions.moreCategories[device].width,
			itemMargin: slide_dimensions.moreCategories[device].margin
		});

		$('#featured-brands-slider').flexslider({
			animation: "slide",
			itemWidth: 210,
			itemMargin: 10
		});
    });
})(jQuery);
