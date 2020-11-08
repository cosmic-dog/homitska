H.menu = (function () {
    const menu = $('.header-menu'),
        menuBtn = $('.header-menu-btn'),
        expandBtn = $('.menu-expand-btn'),
        langBtn = $('.header-lang-btn'),
        langs = $('.header_lang-ul');

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

    function setActiveLang(params) {
        let activeLang = langs.find('.active');

        langs.prepend(activeLang)
    }

    function init() {
        menuBtn.click(openMenu);
        expandBtn.click(expandSubmenu);
        langBtn.click(langMenu);
        setActiveLang();
    };

    return {
        init: init
    }
})();