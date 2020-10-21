$(function(){
    $('.main-nav').find('.nav-link').click(function(e){
        let target = $(this).data('target');
        console.log(target);
        let offset = $(target).offset().top;
        $('html,body').animate({
            scrollTop: offset
        })
        e.preventDefault();
    })
})