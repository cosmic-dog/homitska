H.svg = (function() {
    let toDraw = [$(".header_logo-svg")],
        line = $(".header_logo-line");
        
    function init() {
        $.each(toDraw, function(index, item) {
            var paths = $(item).find("path");
            $.each(paths, function(subIndex, subItem) {
                var length = subItem.getTotalLength();
                $(subItem).css({
                    "stroke-dashoffset": length+"px",
                    "stroke-dasharray": length+"px",
                    "fill": "transparent",
                    "stroke": "rgba(0,0,0,.4)"
                })

                setTimeout(function() {
                    $(subItem).css({
                        "stroke-dashoffset": "0px",
                        "transition": "all ease-in-out 2.8s, fill ease-in-out 1s"
                    });
                }, 100)

                setTimeout(function() {
                    $(subItem).css("fill", "#333");
                    line.css("width", "10em");
                }, 2000);
            })
            $(item).css("visibility", "visible");
        })
    }

    return {
        init: init
    }
})();