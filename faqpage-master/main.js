//FOR BURGER NAVIGATION
$(document).ready(function(){
    $('.burger').on('click', function(){
        $('body').toggleClass("open")
    })
})
$(document).ready(function(){
    $('.burger').on('click', function(){
        $('.links').toggleClass("open")
    })
})
$(document).ready(function(){
    $('.burger').on('click', function(){
        $(this).toggleClass("open")
    })
})


//FOOTER LINK DROP DOWN
$(document).ready(function(){
    $('.po:nth-child(1)').on('click', function(){
        $('.po:nth-child(1)').toggleClass("open")
        $('footer .contact .b:nth-child(1)').toggleClass("open")
    })
})
$(document).ready(function(){
    $('.po:nth-child(2)').on('click', function(){
        $('footer .pages').toggleClass("open")
        $('footer .pages .b:nth-child(1)').toggleClass("open")
    })
})
$(document).ready(function(){
    $('.po:nth-child(3)').on('click', function(){
        $('footer .services').toggleClass("open")
        $('footer .services .b:nth-child(1)').toggleClass("open")
    })
})


