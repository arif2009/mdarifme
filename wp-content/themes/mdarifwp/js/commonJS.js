(function($) {
    $(document).ready(function() {
        /*Start Miscellineous Menu JS*/
        $('.menu-miscellaneous-menu-container > ul > li > a').click(function() {
            $('.menu-miscellaneous-menu-container li').removeClass('active');
            $(this).closest('li').addClass('active');
            var checkElement = $(this).next();
            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('.menu-miscellaneous-menu-container ul ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if ($(this).closest('li').find('ul').children().length == 0) {
                return true;
            } else {
                return false;
            }
        });
        
        //Select Expand Current Selected
        var menuItem = $('.menu-miscellaneous-menu-container li');
        if(menuItem.hasClass('current-menu-item')){
            var selectedMenuItem = $('.menu-miscellaneous-menu-container li.current-menu-item');
            selectedMenuItem.closest('li.current-menu-parent').find('a').click();
        }
        
        /*End Miscellineous Menu JS*/
        
        /*Start LightBox*/
        // Select all links that contains lightbox in the attribute rel
        $('a[rel*=lightbox]').lightBox({
            imageLoading: 'http://mdarif.me/wp-content/themes/mdarifwp/images/lightbox-ico-loading.gif',
            imageBtnClose: 'http://mdarif.me/wp-content/themes/mdarifwp/images/lightbox-btn-close.gif'
        });
        /*End LightBox*/
    });
})(jQuery);
