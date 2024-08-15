(function ($) {
    function replaceClassByCol() {

        var width = window.innerWidth;

        if (width >= 300 && width <= 768) {
            var sidebarSecond = document.querySelector('body.frontpage #sidebar-second');
            var content = document.querySelector('body.frontpage #content');


            if (sidebarSecond && content) {
                sidebarSecond.classList.remove('col-4');
                //sidebarSecond.classList.add('col');

                content.classList.remove('col-8');
                //content.classList.add('col');
            }
        }
    }
    function reverseReplaceClassByCol() {

        var width = window.innerWidth;

        if (width > 768) {
            var sidebarSecond = document.querySelector('body.frontpage #sidebar-second');
            var content = document.querySelector('body.frontpage #content');


            if (sidebarSecond && content) {
                sidebarSecond.classList.remove('col');
                sidebarSecond.classList.add('col-4');

                content.classList.remove('col');
                content.classList.add('col-8');
            }
        }
    }
    window.addEventListener('load', replaceClassByCol);
    //window.addEventListener('resize', replaceClassByCol);
    window.addEventListener('load', reverseReplaceClassByCol);
    //window.addEventListener('resize', reverseReplaceClassByCol);

})(jQuery)