$(function(){
    
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        responsiveClass:true,
        lazyLoad: true,
        video: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            900:{
                items:5,
                nav:true,
                loop:true
            }
        }
    });
    $(".book").click(function(){
        var imageUrl = $(this).attr("title");
        
        $(".slider-bar").slideUp(300, function(){
			$(".book-img").attr("src",imageUrl);
			$(".slider-bar").slideDown(500);
		});
    });

});