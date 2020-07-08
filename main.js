
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
            $(".nav").addClass("lg");
        } else {
            header.removeClass("fixed");
            $(".nav").removeClass("lg");
        }
        if (header.hasClass("fixed")) {
            header.removeClass("active");
            $("#burger").removeClass("active");
            $(".nav").removeClass("active");
        } 

    }

    let burger = $("#burger");

    burger.on("click", function (event) {
        event.preventDefault();
        $(this).toggleClass("active");
        if (header.hasClass("fixed")) {
            header.removeClass("active");
        } else {
            header.addClass("active");
        }
        $(".nav").toggleClass("active");
    });

    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();

        let blockId = $(this).data("scroll");
        let blockOffset = $(blockId).offset().top;

        $(".nav").removeClass("active");
        $("#burger").removeClass("active");

        $("html, body").animate({
            scrollTop: blockOffset
        }, 500)
    });

    $("#sliderCNext").on("click", function () {
        let firstImage = $(".community__img");
        let secondImage = $(".community__img--slider");
        let currentImage = $(".community__img.curry");
        let currentSecondImage = $(".community__img--slider.curry");
        let currentImageIndex = currentImage.index();
        let currentSecondImageIndex = currentSecondImage.index();
        let nextImageIndex = currentImageIndex + 1;
        let nextSecondImageIndex = currentSecondImageIndex + 1;
        let nextImage = firstImage.eq(nextImageIndex);
        let nextSecondImage = secondImage.eq(nextSecondImageIndex);
        currentImage.removeClass("curry");
        currentSecondImage.removeClass("curry");

        if (nextImageIndex == $(".community__img:last").index() + 1) {
            firstImage.eq(0).addClass("curry");
        } else {
            nextImage.addClass("curry");
        }
        if (nextSecondImageIndex == $(".community__img--slider:last").index() + 1) {
            secondImage.eq(0).addClass("curry");
        } else {
            nextSecondImage.addClass("curry");
        }
    });
    $("#sliderCPrev").on("click", function () {
        let firstImage = $(".community__img");
        let secondImage = $(".community__img--slider");
        let currentImage = $(".community__img.curry");
        let currentSecondImage = $(".community__img--slider.curry");
        let currentImageIndex = currentImage.index();
        let currentSecondImageIndex = currentSecondImage.index();
        let prevImageIndex = currentImageIndex - 1;
        let prevSecondImageIndex = currentSecondImageIndex - 1;
        let prevImage = firstImage.eq(prevImageIndex);
        let prevSecondImage = secondImage.eq(prevSecondImageIndex);
        currentImage.removeClass("curry");
        currentSecondImage.removeClass("curry");
        if (prevImageIndex == $(".community__img:first").index() - 1) {
            firstImage.eq(2).addClass("curry");
        } else {
            prevImage.addClass("curry");
        }
        if (prevSecondImageIndex == $(".community__img--slider:first").index() - 1) {
            secondImage.eq(2).addClass("curry");
        } else {
            prevSecondImage.addClass("curry");
        }
    });

    $("#sliderDNext").on("click", function () {
        let commonImage = $(".design__img");
        let commonNumber = $(".slider__date");
        let currentImage = $(".design__img.curry");
        let currentNumber = $(".slider__date.curry");
        let currentImageIndex = currentImage.index();
        let currentNumberIndex = currentNumber.index();
        let nextImageIndex = currentImageIndex + 1;
        let nextNumberIndex = currentNumberIndex + 1;
        let nextImage = commonImage.eq(nextImageIndex);
        let nextNumber = commonNumber.eq(nextNumberIndex);
        currentImage.removeClass("curry");
        currentNumber.removeClass("curry");

        if (nextImageIndex == $(".design__img:last").index() + 1) {
            commonImage.eq(0).addClass("curry");
        } else {
            nextImage.addClass("curry");
        }
        if (nextNumberIndex == $(".slider__date:last").index() + 1) {
            commonNumber.eq(0).addClass("curry");
        } else {
            nextNumber.addClass("curry");
        }
    });
    $("#sliderDPrev").on("click", function () {
        let commonImage = $(".design__img");
        let commonNumber = $(".slider__date");
        let currentImage = $(".design__img.curry");
        let currentNumber = $(".slider__date.curry");
        let currentImageIndex = currentImage.index();
        let currentNumberIndex = currentNumber.index();
        let prevImageIndex = currentImageIndex - 1;
        let prevNumberIndex = currentNumberIndex - 1;
        let prevImage = commonImage.eq(prevImageIndex);
        let prevNumber = commonNumber.eq(prevNumberIndex);
        currentImage.removeClass("curry");
        currentNumber.removeClass("curry");
        prevImage.addClass("curry");
        prevNumber.addClass("curry");
    });

    // Get Started
    let startDownload = $("[data-start]");
    startDownload.on("click", function (event) {
        event.preventDefault();
        let startId = $(this).data("start");
        let startOffset = $(startId).offset().top;
        $("html, body").animate({
            scrollTop: startOffset
        }, 500)
    });

    // Modal
    // let modalCall = $("[data-modal]");
    let modalClose = $("[data-close]");

    modalClose.on("click", function (event) {
        event.preventDefault();

        let modalParent = $(this).parents(".modal");
        modalParent.removeClass("show");
        $("body").removeClass("no-scroll");
    });

        //E-mail Ajax Send
    $("form").submit(function (event ) {
        let form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "sendform.php",
            data: form_data,
            success: function () {
                $("#modal").addClass("show");
                $("body").addClass("no-scroll");
            }
        });
        event.preventDefault()
    });

});