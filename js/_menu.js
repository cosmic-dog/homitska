H.menu = (function () {
    const menu = $('.header-menu'),
        menuBtn = $('.header-menu-btn'),
        expandBtn = $('.menu-expand-btn'),
        langBtn = $('.header-lang-btn'),
        langs = $('#menu-languages');

    function openMenu() {
        menu.toggle();
        $(this).toggleClass('active');
        H.assets.disableScroll(menu.is(':hidden'));
    };

    function expandSubmenu() {
        $(this).next().toggle();
        $(this).toggleClass('expanded');
    };

    function langMenu(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        langs.toggleClass('active');
    };

    function init() {
        menuBtn.click(openMenu);
        expandBtn.click(expandSubmenu);
        langBtn.click(langMenu);
    };

    return {
        init: init
    }
})();