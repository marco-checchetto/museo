function openMenu(){
    menu = document.getElementsByTagName("menu")[0];

    menu.classList.toggle('menu-open');
    spans = document.getElementsByClassName("span-container")[0];
    spans.classList.toggle('active');
    nav = document.getElementsByTagName("nav")[0];
    nav.classList.toggle('open');
    /*span = document.getElementsByTagName("span");
    document.getElementById("menu").setAttribute( "onClick", "closeMenu()" );
    console.log(menu);
    span[1].style.width = span[1].style.width == '20px' ? '15px' : '20px';*/
}

/*function closeMenu(){
    
}*/