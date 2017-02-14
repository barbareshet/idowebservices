jQuery(document).ready(function ($) {
    $(function () {
        //Cache the window object
        var $window = $(window);

        //Parallax background effect
        $('section[data-type="background"]').each(function () {
            var $bgobj = $(this); //assaining the object   
            jQuery($window).scroll(function () {
                // scroll the background at var speed
                //the yPos is a negative value because we're scrolling it UP!
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                // put together our final background position
                var coords = '50% ' + yPos + 'px';

                //Move the background
                $bgobj.css({
                    backgroundPosition: coords
                });
            }); //ebd window scroll
        });
    });

    /*    $('.service-img').hover(function(){
            $('.service-title').removeClass('hidden');
           $(this).toggleClass('show');
            
        });*/
    //Modal
    $('.modal-trigger').leanModal();
    //Add active class to labels
    Materialize.updateTextFields();
});