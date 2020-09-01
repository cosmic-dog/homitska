H.menu = (function () {
    const menu = $('.header-menu'),
        menuBtn = $('.header-menu-btn'),
        expandBtn = $('.header-menu-expand');

    function openMenu() {
        menu.toggle();
        $(this).toggleClass('active');
        H.assets.disableScroll(menu.is(':hidden'));
    };

    function expandSubmenu() {
        $(this).next().toggle();
        $(this).toggleClass('expanded');
    };

    function init() {
        menuBtn.click(openMenu);
        expandBtn.click(expandSubmenu);
    };

    return {
        init: init
    }
})();