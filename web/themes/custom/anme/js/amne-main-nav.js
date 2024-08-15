(function ($) {
     document.addEventListener('DOMContentLoaded', function() {
           const activeElement_gp = document.querySelector('#highlighted-header-first .region-highlighted_header_first #block-anme-tabsmenu li:first-child a.is-active');
           const activeElement_cmp = document.querySelector('#highlighted-header-first .region-highlighted_header_first #block-anme-tabsmenu li:nth-child(2) a.is-active');
           const activeElement_tp = document.querySelector('#highlighted-header-first .region-highlighted_header_first #block-anme-tabsmenu li:nth-child(3) a.is-active');
           const activeElement_pr = document.querySelector('#highlighted-header-first .region-highlighted_header_first #block-anme-tabsmenu li:nth-child(4) a.is-active');

           const superfishMain = document.querySelector('#superfish-main');
           const superfishMainToggle = document.querySelector('#superfish-main-accordion');

             if (activeElement_gp) {
                 superfishMain.style.backgroundColor = '#00a3da';
                 superfishMainToggle.style.backgroundColor = '#00a3da';
             }
             if (activeElement_cmp) {
                 superfishMain.style.backgroundColor = '#465b94';
                 superfishMainToggle.style.backgroundColor = '#465b94';
             }
             if (activeElement_tp) {
                 superfishMain.style.backgroundColor = '#ffa000';
                 superfishMainToggle.style.backgroundColor = '#ffa000';
             }
             if (activeElement_pr) {
                 superfishMain.style.backgroundColor = '#8ab882';
                 superfishMainToggle.style.backgroundColor = '#8ab882';
             }
     });
})(jQuery);