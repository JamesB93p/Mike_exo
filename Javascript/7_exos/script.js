/*
*
*VARIABLES
*
*/
// cibler le boutton
var btn = document.getElementById('toggle-rectangle');
// cibler le rectangle
var rectangle = document.querySelector('.rectangle');

/*
*
*FONCTIONS
*
*/
// fonction afficher-cacher
function showHide(){
    rectangle.classList.toggle('hide');
}
// fonction mousein
function mouseIn(){
    rectangle.classList.add('important');
}
// fonction mouseout
function mouseOut(){
    rectangle.classList.remove('important');
    rectangle.classList.remove('good');
}
// fonction double-clic sur le rectangle
function dblClick(){
    rectangle.classList.remove('important');
    rectangle.classList.add('good');
}

/*
*
*CODE PRINCIPAL
*
*/
// écouteur d'évènements : double-clic sur le rectangle
rectangle.addEventListener('dblclick', dblClick);

// écouteur d'évènements : clic sur le boutton
btn.addEventListener('click', showHide);

// écouteur d'évènements : mouse enter et out sur le rectangle
rectangle.addEventListener('mouseenter', mouseIn);
rectangle.addEventListener('mouseout', mouseOut);
