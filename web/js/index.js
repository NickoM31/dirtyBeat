"use strict";
(function () {
    var app = {
        init : function () {
            // Closes the Responsive Menu on Menu Item Click
            $('.navbar-collapse ul li a').click(function () {
                $('.navbar-toggle:visible').click();
            });
            // Offset for Main Navigation
            $('#mainNav').affix({
                offset: {
                    top: 200
                }
            })
        }
    };
    app.init();
})(); // End of use strict