;(function($) {

    $.fn.fixMe = function() {

        return this.each(function() {

            var $this = $(this),
                $t_fixed;

            function init() {
                $this.wrap('<div class="container" />');
                $t_fixed = $this.clone();
                $t_fixed.find("tbody").remove().end().addClass("fixed").insertBefore($this);
                resizeFixed();
            }

            function resizeFixed() {
                $t_fixed.width($this.outerWidth());
                $t_fixed.find("th").each(function(index) {
                    $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
                });
            }

            function scrollFixed() {

                var offsetY             = $(this).scrollTop(),
                    offsetX             = $(this).scrollLeft(),
                    tableOffsetTop      = $this.offset().top,
                    tableOffsetBottom   = tableOffsetTop + $this.height() - $this.find("thead").height(),
                    tableOffsetLeft     = $this.offset().left;

                if(offsetY < tableOffsetTop || offsetY > tableOffsetBottom)

                    $t_fixed.hide();

                else if(offsetY >= tableOffsetTop && offsetY <= tableOffsetBottom && $t_fixed.is(":hidden"))

                    $t_fixed.show();

                $t_fixed.css("left", tableOffsetLeft - offsetX + "px");
            }

            $(window).resize(resizeFixed);

            $(window).scroll(scrollFixed);

            init();
        });
    };
})(jQuery);

$(document).ready(function(){

    $("table").fixMe();

    // $(".up").click(function() {
    //
    //     $('html, body').animate({
    //         scrollTop: 0
    //     }, 2000);
    // });
});
