(function ($) {
    "use strict";
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('.nav-bar').addClass('nav-sticky');
        } else {
            $('.nav-bar').removeClass('nav-sticky');
        }
    });
    
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 768) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);

        // function loaddata() {
        //     $.ajax({
        //         type: "POST",
        //         url: "http://15.207.46.236/" + "directory/directorylisting",
        //         dataType: "json",
        //         cache: false,
        //         beforeSend: function () {
        //         $("#displaydata").html(
        //         '<tr><td colspan="4" class="text-center font-weight-bold">Loading...</td></tr></center>'
        //             );
        //         },
        //         success: function (data) {
        //             console.log(data.data);
        //             if (data.error == false) {
        //                 if (data.data.length > 0) {
        //                     $("#displaydata").html("");
        //                     for (i = 0; i < data.data.length; i++) {
        //                         $("#displaydata").append(
        //                             `<div class="col-md-4">
        //                             <div class="mn-img">
        //                                 <img src="img/news-350x223-1.jpg" />
        //                                 <div class="mn-title">
        //                                     <a href="">Lorem ipsum dolor sit</a>
        //                                 </div>
        //                             </div>
        //                         </div>`
        //                         );
        //                     }
        //                 } else {
        //                     $("#displaydata").html(
        //                         '<tr><td colspan="5" class="text-center font-weight-bold">No record Found!</td></tr></center>'
        //                     );
        //                 }
        //             } else {
        //                     alert(data.data);
        //                 }
        //         },
        //     });
        // }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Top News Slider
    $('.tn-slider').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    
    // Category News Slider
    $('.cn-slider').slick({
        autoplay: false,
        infinite: true,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    
    // Related News Slider
    $('.sn-slider').slick({
        autoplay: false,
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
})(jQuery);

