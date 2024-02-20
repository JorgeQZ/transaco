jQuery(document).ready(function ($) {

    let banner_elementes = $('.banner_title');
    if(banner_elementes){
        for (let i = 0; i < banner_elementes.length; i++) {
            new Waypoint({
                element: $('.banner_title')[i],
                handler: function () {
                    $('.banner_title').eq(i).addClass('animate__fadeInUp');
                },
                offset: '75%',
            })
        }
    }

    let animated_elements = $('.inner-item ');
    for (let i = 0; i < animated_elements.length; i++) {
        new Waypoint({
            element: $('.inner-item ')[i],
            handler: function () {
                $('.inner-item ').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }

    let img_elements = $('.desc-img ');
    for (let i = 0; i < img_elements.length; i++) {
        new Waypoint({
            element: $('.desc-img ')[i],
            handler: function () {
                $('.desc-img ').eq(i).addClass('animate__fadeInRight');
            },
            offset: '70%',
        })
    }

    let inner_videos = $('.inner-videos ');
    for (let i = 0; i < inner_videos.length; i++) {
        new Waypoint({
            element: $('.inner-videos ')[i],
            handler: function () {
                $('.inner-videos ').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }

    let hr_animated = $('hr');
    for (let i = 0; i < hr_animated.length; i++) {
        new Waypoint({
            element: $('hr')[i],
            handler: function () {
                $('hr').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }

    let video_elementes = $('.video-item');
    for (let i = 0; i < video_elementes.length; i++) {
        new Waypoint({
            element: $('.video-item')[i],
            handler: function () {
                $('.video-item').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }

    let footer_image = $('.footer-image');
    for (let i = 0; i < footer_image.length; i++) {
        new Waypoint({
            element: $('.footer-image')[i],
            handler: function () {
                $('.footer-image').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }
});