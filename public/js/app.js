function open_menu_mobile(){
  document.querySelector('.header nav').classList.toggle('show')
}

function open_other_menu(that){
  that.nextElementSibling.classList.toggle('show')
}