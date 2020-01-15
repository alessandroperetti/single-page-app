$(document).ready(function(){
    // Sticky sidebar for small devices
    $("#open").click(function(){
        var x = $("#sticky-sidebar").position();
        if(x.top == 0){
            $('#sticky-sidebar').css("top", "-100px");
            $('#open').removeClass('fa-arrow-up');
            $('#open').addClass('fa-arrow-down');
            //CLose and change with arrow down
        }else{
            //open and change with arrow up
            $('#sticky-sidebar').css("top", "0px");
            $('#open').removeClass('fa-arrow-down');
            $('#open').addClass('fa-arrow-up');
        }
    });

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
        $('.nav-link').removeClass("active");
        $(this).addClass("active");

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1200, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    $("#education" ).load( "modules/timeline-education.html" );
    $("#work" ).load( "modules/timeline-job.html" );
    $("#publications" ).load( "modules/publications.html" );
    $("#contact" ).load( "modules/contact.html" );
    $("#social-container" ).load( "modules/social.html" );

});