
$(function () {

    let header = $("#header");
    let introH = $("#intro").innerHeight();
    let scrollOffset = $(window).scrollTop();

    checkScroll(scrollOffset);

    $(window).on("scroll", function () {
        scrollOffset = $(this).scrollTop();
        checkScroll(scrollOffset);
    });

    function checkScroll(scrollOffset) {
        if (scrollOffset >= introH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    }


    let burger = $("#burger");

    burger.on("click", function (event) {
        event.preventDefault();
        $(this).toggleClass("active");
        $(".nav").toggleClass("active");
        
        if (header.hasClass("fixed")) {
            header.removeClass("active");
        } else {
            header.addClass("active");
        }

    });

    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();

        let blockId = $(this).data("scroll");
        let blockOffset = $(blockId).offset().top;
        console.log(blockOffset);

        $(".nav").removeClass("active");
        $("#burger").removeClass("active");

        $("html, body").animate({
            scrollTop: blockOffset
        }, 500)
    });


});