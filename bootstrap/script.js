$(function(){
    new WOW().init();
    $('.main-nav').find('.nav-link').click(function(e){
        let target = $(this).data('target');
        console.log(target);
        let offset = $(target).offset().top;
        $('html,body').animate({
            scrollTop: offset
        })
        e.preventDefault();
    })
    $('#gotop').click(function(e){
        $('html,body').animate({
            scrollTop:0
        })
        e.preventDefault();
    })
    $(window).scroll(function(){
        let h = $(this).scrollTop();
        console.log(h)
        if(h > 700){
            $('#gotop').fadeIn();
        }else{
            $('#gotop').fadeOut();
        }
    })

})