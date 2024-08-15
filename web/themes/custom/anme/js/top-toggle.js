(function ($) {
        $('#toggle-button').click(function(){
            var header = $('#top-header-first');
            if (header.is(':visible')) {
                header.slideUp(500).fadeOut(500);
            } else {
                header.slideDown(500).fadeIn(500);
            }
        });
})(jQuery);