(function($) {
    $(function() {

        
            
    

    $('.bxslider').bxSlider({
     infiniteLoop: true,
      auto: true,
      speed: 1000,
      autoControls: true,
      autoDelay: 9999
      /*hideControlOnEnd: true*/
    });

});


    var url = window.location.pathname,
                urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
                $('.interna nav a, footer.iint nav a').each(function () {
                
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).addClass('active');
                }

            });

})(jQuery);
