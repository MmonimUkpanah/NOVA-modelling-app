
const burgerMenus = document.querySelectorAll('.hamburger')
const sideNav = document.querySelector('.side-nav')

burgerMenus.forEach(menu => {
  menu.addEventListener('click', (e) => {
    e.preventDefault()
  
    if(!sideNav.classList.contains('show')){
      sideNav.classList.add('show');
    } else {
      sideNav.classList.remove('show');
    }
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