$(function () {
    const main_banner = $('#main_banner');
    const options_cont = '.teja-cont__options-cont';
    const teja_cont = '.teja_content';
    const videos = '.prod-video-cont';

    const first_sup = $('.teja-cont__options-cont[data-model="supreme"] .teja-cont__options-cont-items-item.active').data('banner_option');
    const oak_sup = $('.teja-cont__options-cont[data-model="oakridge"] .teja-cont__options-cont-items-item.active').data('banner_option');

    let currents_banner = [];
    currents_banner['supreme'] = first_sup;
    currents_banner['oakridge'] = oak_sup;

    $('.teja-cont__options-cont-items-item').on('click', function () {
        let model = $(this).parent().parent().data('model');

        $(options_cont + '[data-model="' + model + '"] .teja-cont__options-cont-items-item').removeClass('active');
        $(this).addClass('active');
        let banner_option_url = $(this).attr('data-banner_option');
        $(main_banner).attr('src', banner_option_url);
        currents_banner[model] = banner_option_url;
    });

    $('.teja-cont__banner-buttons-cont-button').on('click', function () {
        $('.teja-cont__banner-buttons-cont-button').removeClass('active');
        $(this).addClass('active');

        let model = $(this).data('button');

        $(options_cont).hide();
        $(options_cont + '[data-model="' + model + '"]').fadeIn();

        $(teja_cont).hide();
        $(teja_cont + '[data-model="' + model + '"]').fadeIn();

        let v = $('video');
        for (let i = 0; i <= v.length - 1; i++) {
            console.log($(v[i]).trigger('pause'));
        }
        $(main_banner).attr('src', currents_banner[model]);

        $(videos + '[data-video="' + model + '"] video').get(0).play();

    });

}, jQuery);