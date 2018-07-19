$(document).ready(function(){
				
    //smooth scroll
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            //event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
            window.location.hash = hash;
            });
        }
    });
    
    //well slide
    $(window).scroll(function() {
      $(".well").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });  
    
});