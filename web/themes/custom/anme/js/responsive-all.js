(function ($) {
    function replaceClassByCol() {

        var width = window.innerWidth;

        if (width >= 300 && width <= 768) {
            var mainWrapper = document.querySelector('#main-wrapper');
            var main = document.querySelector('#main');
            var sidebarSecond = document.querySelector('#sidebar-second');
            var content = document.querySelector('#content');


            if (sidebarSecond && content && mainWrapper && main) {
                mainWrapper.classList.remove('container');
                main.classList.remove('row');

                sidebarSecond.classList.remove('col-4');
                sidebarSecond.classList.add('col');

                content.classList.remove('col-8');
                content.classList.add('col');
            }
        }
    }
    function reverseReplaceClassByCol() {

        var width = window.innerWidth;

        if (width > 768) {

            var mainWrapper = document.querySelector('#main-wrapper');
            var main = document.querySelector('#main');
            var sidebarSecond = document.querySelector('#sidebar-second');
            var content = document.querySelector('#content');


            if (sidebarSecond && content && mainWrapper && main) {
                mainWrapper.classList.add('container');
                main.classList.add('row');

                sidebarSecond.classList.remove('col');
                sidebarSecond.classList.add('col-4');

                content.classList.remove('col');
                content.classList.add('col-8');
            }
        }
    }
    window.addEventListener('resize', replaceClassByCol);
    window.addEventListener('load', replaceClassByCol);
    window.addEventListener('resize', reverseReplaceClassByCol);
    window.addEventListener('load', reverseReplaceClassByCol);
})(jQuery);