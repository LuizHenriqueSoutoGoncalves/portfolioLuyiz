// MENU MOBILE


let lzMenu = document.getElementById('lz-abrir-menu')
let menu = document.getElementById('menu-mobile')
let closeMenu = document.getElementById('lz-fechar')

lzMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

closeMenu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
}) 